<?php

namespace App\Enum;

enum Statut: string
{
    case PREVUE = 'prévue';
    case REALISEE = 'réalisée';
    case ANNULEE = 'annulée';
}
