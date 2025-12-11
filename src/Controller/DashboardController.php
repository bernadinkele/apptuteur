<?php

namespace App\Controller;

use App\Repository\TuteurRepository;
use App\Repository\EtudiantRepository;
use App\Repository\VisiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(
        SessionInterface $session,
        TuteurRepository $tuteurRepository,
        EtudiantRepository $etudiantRepository,
        VisiteRepository $visiteRepository
    ): Response {
        $tuteurId = $session->get('tuteur_id');

        if (!$tuteurId) {
            return $this->redirectToRoute('login');
        }

        // Récupérer le tuteur
        $tuteur = $tuteurRepository->find($tuteurId);

        // Récupérer les étudiants suivis par ce tuteur
        $etudiants = $etudiantRepository->findBy(['tuteur' => $tuteur]);

        // Récupérer les prochaines visites planifiées
        $prochainesVisites = $visiteRepository->createQueryBuilder('v')
            ->where('v.tuteur = :tuteur')
            ->andWhere('v.date >= :today')
            ->setParameter('tuteur', $tuteur)
            ->setParameter('today', new \DateTimeImmutable())
            ->orderBy('v.date', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->render('dashboard/index.html.twig', [
            'tuteur' => $tuteur,
            'etudiants' => $etudiants,
            'prochainesVisites' => $prochainesVisites
        ]);
    }

    
}
