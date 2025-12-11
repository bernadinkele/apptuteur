<?php

namespace App\Controller;

use App\Entity\Etudiant;
use App\Entity\Tuteur;
use App\Form\EtudiantType;
use App\Repository\EtudiantRepository;
use App\Repository\TuteurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/etudiants')]
class EtudiantController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $em,
        private EtudiantRepository $etudiantRepository,
        private TuteurRepository $tuteurRepository
    ) {}

    #[Route('', name: 'etudiants_index')]
    public function index(SessionInterface $session): Response
    {
        $tuteurId = $session->get('tuteur_id');
        if (!$tuteurId) {
            return $this->redirectToRoute('login');
        }

        $etudiants = $this->etudiantRepository->findBy(['tuteur' => $tuteurId]);

        return $this->render('etudiant/index.html.twig', [
            'etudiants' => $etudiants,
        ]);
    }

    #[Route('/new', name: 'etudiants_new')]
    public function new(Request $request, SessionInterface $session): Response
    {
        $tuteurId = $session->get('tuteur_id');
        if (!$tuteurId) {
            return $this->redirectToRoute('login');
        }

        $tuteur = $this->tuteurRepository->find($tuteurId);

        $etudiant = new Etudiant();
        $etudiant->setTuteur($tuteur);

        $form = $this->createForm(EtudiantType::class, $etudiant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($etudiant);
            $this->em->flush();

            $this->addFlash('success', 'Étudiant ajouté avec succès.');
            return $this->redirectToRoute('etudiants_index');
        }

        return $this->render('etudiant/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'etudiants_edit')]
    public function edit(Etudiant $etudiant, Request $request, SessionInterface $session): Response
    {
        $tuteurId = $session->get('tuteur_id');
        if (!$tuteurId || $etudiant->getTuteur()->getId() !== $tuteurId) {
            return $this->redirectToRoute('login');
        }

        $form = $this->createForm(EtudiantType::class, $etudiant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();

            $this->addFlash('success', 'Étudiant modifié avec succès.');
            return $this->redirectToRoute('etudiants_index');
        }

        return $this->render('etudiant/update.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
