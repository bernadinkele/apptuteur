<?php

namespace App\Controller;

use App\Repository\TuteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function login(
        Request $request,
        TuteurRepository $tuteurRepository,
        SessionInterface $session
    ): Response {
        $error = null;

        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $password = $request->request->get('password');

            $tuteur = $tuteurRepository->findOneBy(['email' => $email]);

            if ($tuteur ) {
               
                $session->set('tuteur_id', $tuteur->getId());

                return $this->redirectToRoute('dashboard');
            }
            

            $error = "Email ou mot de passe incorrect.";
        }

        return $this->render('auth/login.html.twig', [
            'error' => $error
        ]);
    }

    #[Route('/logout', name: 'logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->remove('tuteur_id');

        $this->addFlash('success', 'Vous avez été déconnecté avec succès.');

        return $this->redirectToRoute('login');
    }
}
