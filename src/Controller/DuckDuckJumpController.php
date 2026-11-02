<?php

namespace App\Controller;

use App\Entity\DuckDuckJumpHistory;
use App\Entity\User;
use App\Repository\DuckDuckJumpHistoryRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class DuckDuckJumpController extends AbstractController
{
    #[Route('/duck_duck_jump', name: 'app_duck_duck_jump')]
    public function index(UserRepository $userRepository): Response
    {
        if(!$this->isGranted('ROLE_USER')) {
            $this->addFlash('fail', 'Vous devez vous connectez pour jouer');
            return $this->redirectToRoute('app_home');
        }

        /** @var User|null $user */
        $user = $this->getUser();
        $userBalance = $user->getBalance();
        return $this->render('duck_duck_jump/index.html.twig',[
            'userBalance' => $userBalance
        ]);
    }

    #[Route('/api/duck_duck_jump/start', name:'api_duck_duck_jump_start', methods: ['POST'])]
    #[IsGranted('ROLE_USER', statusCode: 403, message: "Merci de vous connecter pour jouer")]
    public function start(Request $request, EntityManagerInterface $em, SessionInterface $session, ValidatorInterface $validator){
        if(!$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('app_home');
        }

        /** @var User|null $user */
        $user = $this->getUser();
        if(!$user) return $this->json("Non connecté", 401);

        $content = $request->getContent();
        $data = json_decode($content, true);

        $betAmount = $data['betAmount'] ?? null;
        $multiplier = $data['multiplier'] ?? null;

        if (is_null($betAmount) || $betAmount <= 0) return $this->json("Merci de miser une somme valide", 400);
        if (is_null($multiplier)) return $this->json("Merci de commencer une partie", 400);

        if ($betAmount > $user->getBalance()) return $this->json("Vous n'avez pas assez d'argent pour viser cette some", 400);

        $user->setBalance($user->getBalance() - $betAmount);

        $session->set('game', [
            'betAmount' => $betAmount,
            'multiplier' => 0,
            'active' => true
        ]);

        $em->persist($user);
        $em->flush();

        return $this->json([
            'status' => 'started'
        ]);
    }

    #[Route('api/duck_duck_jump/step', name: 'app_duck_duck_jump_step')]
    #[IsGranted('ROLE_USER', statusCode: 403, message: "Merci de vous connecter pour jouer")]
    public function step(UserRepository $userRepository, 
    SessionInterface $session, 
    EntityManagerInterface $em,
    ValidatorInterface $validator): Response
    {
        if(!$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('app_home');
        }

        $game = $session->get('game');

        if (!$game ||!$game['active']) return $this->json("Merci de commencer une partie au lieu de bidouiller avec l'API");

        $payout = 0;

        if(!$game || !$game['active']) return $this->json('Merci de commencer une partie');
        
        $luck = (bool) (rand(0, 1) === 1);
        /** @var User|null $user */
        $user = $this->getUser();
        
        if(!$luck) {
            $duckduckjumpHistory = new DuckDuckJumpHistory();
            $duckduckjumpHistory
            ->setBetAmount($game['betAmount'])
            ->setMultiplier($game['multiplier'])
            ->setPayout($payout)
            ->setCreatedAt(new \DateTimeImmutable())
            ->setPlayerId($user);

            $errors = $validator->validate($duckduckjumpHistory);

            if ($errors->count()) {
                $messages = [];
                foreach ($errors as $error) {
                $messages[] = $error->getMessage();
                }
                return $this->json($messages, Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            $em->persist($duckduckjumpHistory);
            $em->flush();

            $session->set('game', [
                'betAmount' => $game['betAmount'],
                'multiplier' => $game['multiplier'],
                'active' => false
            ]);

            return $this->json([
                'betAmount' => $game['betAmount'],
                'multiplier' => $game['multiplier'],
                'status' => 'ended'
            ]);
        }

        else{
            $game['multiplier'] += 1;
            $session->set('game', $game);

            return $this->json([
                'status' => 'win',
                'multiplier' => $game['multiplier']
            ]);
        }
    }

    #[Route('api/duck_duck_jump/cashout', name: 'app_duck_duck_jump_cashout')]
    #[IsGranted('ROLE_USER', statusCode: 403, message: "Merci de vous connecter pour jouer")]
    
    public function cashout(
    UserRepository $userRepository, 
    SessionInterface $session, 
    EntityManagerInterface $em,
    ValidatorInterface $validator): Response
    {
        if(!$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('app_home');
        }

        if (!$session->get('game') || !$session->get('game')['active']) return $this->json("Merci de commencer une partie au lieu de bidouiller avec l'API");

        /** @var User|null $user */
        $user = $this->getUser();

        $game = $session->get('game');
        $payout = $game['betAmount'] * $game['multiplier'];

        $user->setBalance($user->getBalance() + $payout);

        $duckduckjumpHistory = new DuckDuckJumpHistory();
        $duckduckjumpHistory
        ->setBetAmount($game['betAmount'])
        ->setMultiplier($game['multiplier'])
        ->setPayout($payout)
        ->setCreatedAt(new \DateTimeImmutable())
        ->setPlayerId($user);

        $errors = $validator->validate($duckduckjumpHistory);

        if ($errors->count()) {
            $messages = [];
            foreach ($errors as $error) {
            $messages[] = $error->getMessage();
            }
            return $this->json($messages, Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        else {
            $em->persist($duckduckjumpHistory);
            $em->flush();

            return $this->json($user->getBalance(), Response::HTTP_OK);
        }
    }

    #[Route('/duck_duck_jump/leaderboard', name: 'app_duck_duck_jump_leaderboard')]
    public function spinnerLeaderboard(DuckDuckJumpHistoryRepository $duckDuckJumpHistoryRepository, Request $request){
        
        $user = $request->query->get('user', '');
        $sort = $request->query->get('sort', 'betAmount');
        $direction = $request->query->get('direction', 'ASC');
        $limit = $request->query->get('limit', 20);
        $page = $request->query->get('page', 1);
        if (!in_array($sort, ['playerId', 'betAmount', 'multiplier', 'payout', 'createdAt'])){
            $sort = 'createdAt';
        }

        if (!in_array($limit, [20, 50, 100])) $limit = 20;

        $totalPlays = $duckDuckJumpHistoryRepository->count([]);
        $totalPages = (int) ceil($totalPlays / $limit);

        if ($page < 1) $page = 1;
        elseif ($totalPages > 0 && $page > $totalPages) $page = $totalPages;

        $offset = ($page - 1) * $limit;
        
        $duckDuckJumpHistoryRepositories = $duckDuckJumpHistoryRepository->SortAndSearch($user, $sort, $direction, $limit, $offset);

        return $this->render('duck_duck_jump/leaderboard.html.twig', [
            'user' => $user,
            'duckDuckJumpHistoryRepositories' => $duckDuckJumpHistoryRepositories,
            'sort' => $sort,
            'direction' => $direction,
            'limit' => $limit,
            'offset' => $offset,
            'page' => $page,
            'totalPages' => $totalPages
        ]);
    }
}


