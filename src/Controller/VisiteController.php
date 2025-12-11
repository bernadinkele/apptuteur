<?php

namespace App\Controller;

use App\Entity\Visite;
use App\Entity\Etudiant;
use App\Form\VisiteType;
use App\Repository\VisiteRepository;
use App\Repository\EtudiantRepository;
use App\Repository\TuteurRepository;
use App\Enum\Statut;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/visites')]
class VisiteController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $em,
        private VisiteRepository $visiteRepository,
        private EtudiantRepository $etudiantRepository,
        private TuteurRepository $tuteurRepository
    ) {}

    // 6.1. Liste des visites d’un étudiant avec filtre et tri
    #[Route('/etudiant/{id}', name: 'visites_index')]
    public function index(int $id, Request $request, SessionInterface $session): Response
    {
        $tuteurId = $session->get('tuteur_id');
        if (!$tuteurId) {
            return $this->redirectToRoute('login');
        }

        $etudiant = $this->etudiantRepository->find($id);
        if (!$etudiant || $etudiant->getTuteur()->getId() !== $tuteurId) {
            $this->addFlash('error', 'Accès interdit à cet étudiant.');
            return $this->redirectToRoute('etudiants_index');
        }

        // Récupération des paramètres GET pour filtre et tri
        $statut = $request->query->get('statut'); // 'prévue', 'réalisée', 'annulée' ou null
        $order = $request->query->get('order', 'ASC'); // 'ASC' ou 'DESC'

        // Requête via repository personnalisé
        $visites = $this->visiteRepository->findByEtudiantWithFilterAndOrder($id, $statut, $order);

        return $this->render('visite/index.html.twig', [
            'etudiant' => $etudiant,
            'visites' => $visites,
            'statutFilter' => $statut,
            'order' => $order,
        ]);
    }

    // 6.2. Ajouter une visite
    #[Route('/etudiant/{id}/new', name: 'visites_new')]
    public function new(int $id, Request $request, SessionInterface $session): Response
    {
        $tuteurId = $session->get('tuteur_id');
        if (!$tuteurId) {
            return $this->redirectToRoute('login');
        }

        $tuteur = $this->tuteurRepository->find($tuteurId);
        $etudiant = $this->etudiantRepository->find($id);

        if (!$etudiant || $etudiant->getTuteur()->getId() !== $tuteurId) {
            $this->addFlash('error', 'Accès interdit à cet étudiant.');
            return $this->redirectToRoute('etudiants_index');
        }

        $visite = new Visite();
        $visite->setEtudiant($etudiant);
        $visite->setTuteur($tuteur);
        $visite->setStatut(Statut::PREVUE); // statut par défaut "prévue"

        $form = $this->createForm(VisiteType::class, $visite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($visite);
            $this->em->flush();

            $this->addFlash('success', 'Visite ajoutée avec succès.');
            return $this->redirectToRoute('visites_index', ['id' => $etudiant->getId()]);
        }

        return $this->render('visite/add.html.twig', [
            'form' => $form->createView(),
            'etudiant' => $etudiant,
        ]);
    }

    // 6.3. Modifier une visite
    #[Route('/{id}/edit', name: 'visites_edit')]
    public function edit(Visite $visite, Request $request, SessionInterface $session): Response
    {
        $tuteurId = $session->get('tuteur_id');
        if (!$tuteurId || $visite->getTuteur()->getId() !== $tuteurId) {
            $this->addFlash('error', 'Accès interdit à cette visite.');
            return $this->redirectToRoute('etudiants_index');
        }

        $form = $this->createForm(VisiteType::class, $visite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();

            $this->addFlash('success', 'Visite modifiée avec succès.');
            return $this->redirectToRoute('visites_index', ['id' => $visite->getEtudiant()->getId()]);
        }

        return $this->render('visite/update.html.twig', [
            'form' => $form->createView(),
            'etudiant' => $visite->getEtudiant(),
        ]);
    }
}
