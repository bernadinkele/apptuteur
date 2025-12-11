<?php

namespace App\Repository;

use App\Entity\Visite;
use App\Enum\Statut;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Visite>
 */
class VisiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Visite::class);
    }



   
    /**
     * Récupère les visites d’un étudiant avec filtre par statut et tri par date
     *
     * @param int $etudiantId
     * @param string|null $statut
     * @param string $order 'ASC' ou 'DESC'
     */
    public function findByEtudiantWithFilterAndOrder(int $etudiantId, ?string $statut, string $order = 'ASC')
    {
        $qb = $this->createQueryBuilder('v')
            ->where('v.etudiant = :etudiant')
            ->setParameter('etudiant', $etudiantId);

        if ($statut && in_array($statut, array_column(Statut::cases(), 'value'))) {
            $qb->andWhere('v.statut = :statut')
               ->setParameter('statut', $statut);
        }

        $qb->orderBy('v.date', $order);

        return $qb->getQuery()->getResult();
    }
}
