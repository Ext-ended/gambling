<?php

namespace App\Controller;

use App\Entity\SpinHistory;
use App\Entity\User;
use App\Repository\SpinHistoryRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class SpinnerController extends AbstractController
{   
    #[Route('/spinner', name: 'app_spinner')]
    public function index(UserRepository $userRepository): Response
    {
        if(!$this->isGranted('ROLE_USER')) {
            $this->addFlash('fail', 'Vous devez vous connectez pour jouer');
            return $this->redirectToRoute('app_home');
        }

        /** @var User|null $user */
        $user = $this->getUser();
        $userBalance = $user->getBalance();
        return $this->render('spinner/index.html.twig',[
            'userBalance' => $userBalance
        ]);
    }

    #[Route('/api/spin', name:'api_spin', methods: ['POST'])]
    #[IsGranted('ROLE_USER', statusCode: 403, message: "Il faut être connecté pour utiliser cette API")]
    public function spin(Request $request, EntityManagerInterface $em, ValidatorInterface $validator){

        if(!$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('app_home');
        }

        /** @var User|null $user */
        $user = $this->getUser();

        if(!$user) return $this->json("Non connecté", 401);

        $content = $request->getContent();
        $data = json_decode($content, true);
        $betAmount = $data['betAmount'] ?? null;
        
        if (is_null($betAmount) || $betAmount == 0 || $betAmount <= 0) return $this->json("Merci de miser une somme valide", 400);
        if ($betAmount > $user->getBalance()) return $this->json("Vous n'avez pas assez d'argent pour viser cette some", 400);

        $stats = [
            'x0'   => ['multiplier' => 0,   'prob' => 50, 'angle' => 113],
            'x0.5' => ['multiplier' => 0.5, 'prob' => 60, 'angle' => 67],
            'x1'   => ['multiplier' => 1,   'prob' => 80, 'angle' => 25],
            'x2'   => ['multiplier' => 2,   'prob' => 87, 'angle' => 337],
            'x3'   => ['multiplier' => 3,   'prob' => 90, 'angle' => 292],
            'x5'   => ['multiplier' => 5,   'prob' => 95, 'angle' => 248],
            'x8'   => ['multiplier' => 8,   'prob' => 98, 'angle' => 203],
            'x10'  => ['multiplier' => 10,  'prob' => 100, 'angle' => 157]
        ];

        $probability = random_int(1, 100);
        $result = ['x0'];

        foreach ($stats as $key => $segment){
            if ($probability <= $segment['prob']){
                $result = $segment;
                break;
            }
        }

        $payout = $betAmount * $result['multiplier'];
        
        if($result['multiplier'] < 1) $userNewBalance = $user->getBalance() - $betAmount + $payout;
        elseif($result['multiplier'] == 1) $userNewBalance = $user->getBalance();
        else $userNewBalance = $user->getBalance() + $betAmount + $payout;

        $user->setBalance($userNewBalance);

        $spinHistory = new SpinHistory();
        $spinHistory
        ->setBetAmount($betAmount)
        ->setMultiplier($result['multiplier'])
        ->setPayout($payout)
        ->setCreatedAt(new \DateTimeImmutable())
        ->setSpinnedUser($user);

        $errors = $validator->validate($spinHistory);

        if ($errors->count()) {
            $messages = [];
            foreach ($errors as $error) {
            $messages[] = $error->getMessage();
            }
            return $this->json($messages, Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        else {
            $em->persist($spinHistory);
            $em->flush();

            return $this->json([
                'angle' => $result['angle'],
                'multiplier' => $result['multiplier'],
                'newBalance' => $userNewBalance 
            ], Response::HTTP_OK);
        }
    }

    #[Route('/spinner/leaderboard', name: 'app_spinner_leaderboard')]
    public function spinnerLeaderboard(SpinHistoryRepository $spinHistoryRepository, Request $request){
        
        $user = $request->query->get('user', '');
        $sort = $request->query->get('sort', 'betAmount');
        $direction = $request->query->get('direction', 'ASC');
        $limit = $request->query->get('limit', 20);
        $page = $request->query->get('page', 1);
        if (!in_array($sort, ['spinnedUser', 'betAmount', 'multiplier', 'payout', 'createdAt'])){
            $sort = 'createdAt';
        }

        if (!in_array($limit, [20, 50, 100])) $limit = 20;

        $totalSpinHistories = $spinHistoryRepository->count([]);
        $totalPages = (int) ceil($totalSpinHistories / $limit);

        if ($page < 1) $page = 1;
        elseif ($totalPages > 0 && $page > $totalPages) $page = $totalPages;

        $offset = ($page - 1) * $limit;
        
        $spinHistories = $spinHistoryRepository->SortAndSearch($user, $sort, $direction, $limit, $offset);

        return $this->render('spinner/leaderboard.html.twig', [
            'user' => $user,
            'spinHistories' => $spinHistories,
            'sort' => $sort,
            'direction' => $direction,
            'limit' => $limit,
            'offset' => $offset,
            'page' => $page,
            'totalPages' => $totalPages
        ]);
    }
}
