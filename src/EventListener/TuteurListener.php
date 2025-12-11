<?php

namespace App\EventListener;

use App\Entity\Tuteur;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\Persistence\Event\LifecycleEventArgs as EventLifecycleEventArgs;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class TuteurListener
{
    private $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function prePersist(Tuteur $tuteur, EventLifecycleEventArgs $args)
    {
        if ($tuteur->getPassword()) {
            $tuteur->setPassword(
                $this->hasher->hashPassword($tuteur, $tuteur->getPassword())
            );
        }
    }
}
