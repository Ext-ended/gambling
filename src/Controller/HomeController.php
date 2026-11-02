<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {   
        /** @var User|null $user */
        $user = $this->getUser();
        if (isset($user)) $username = $user->getUsername();
        else $username = '';
        
        return $this->render('home/index.html.twig', [
            'username' => $username,
        ]);
    }

    #[Route('/user', name: 'app_user')]
    public function user(
        Request $request, 
        UserPasswordHasherInterface $userPasswordHasher, 
        ValidatorInterface $validator, 
        EntityManagerInterface $em, 
        SluggerInterface $slugger): Response
    {
        if(!$this->isGranted('ROLE_USER')) {
            $this->addFlash('fail', 'Vous devez vous connectez pour changer votre profil');
            return $this->redirectToRoute('app_home');
        }

        /** @var User $user */
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        
        if (($form->isSubmitted() && $form->isValid())){
            $errors = $validator->validate($form);

            if ($errors->count()) {
                $messages = [];
                foreach ($errors as $error) {
                $messages[] = $error->getMessage();
                }
                return $this->json($messages, Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            $imageFile = $form->get('image')->getData();
            if($imageFile){
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('profiles_directory'),
                        $newFilename
                    );
                    $user->setImage($newFilename);
                } catch (FileException $e){
                    $this->addFlash('fail', 'Erreur lors du transfert de la photo de profil');
                }
            }
        
            $plainPassword = $form->get('plainPassword')->getData();
            if(!empty($plainPassword)){

                // encode the plain password
                $user->setPassword($userPasswordHasher->hashPassword($user, $plainPassword));
            }

            $em->flush();
            $this->addFlash('success', 'Profil mis à jour !');
        return $this->redirectToRoute('app_home');
        }

        return $this->render('user/user_edit.html.twig', [
            'form' => $form
        ]);
    }
}
