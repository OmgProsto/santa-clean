<?php

namespace App\Layer\Persistence\Model\Santa;

use App\Layer\Domain\Santa\Entity\SantaDomain;
use App\Layer\Persistence\Entity\Santa\SantaPersistence;

class SantaModel
{
    public function fromDomain(SantaDomain $santa): SantaPersistence
    {
        return new SantaPersistence(
            $santa->getSantaId(),
            $santa->getName(),
            $santa->getGiftRecipientId()
        );
    }

    public function toDomain(SantaPersistence $santaPersistence): SantaDomain
    {
        return new SantaDomain(
            $santaPersistence->getId(),
            $santaPersistence->getName(),
            $santaPersistence->getGiftRecipientId()
        );
    }
}
