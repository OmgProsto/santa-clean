<?php

namespace App\Layer\Domain\Santa;

use App\Layer\Domain\Santa\Dto\CreateSantaDto;
use App\Layer\Domain\Santa\Entity\SantaDomain;

class SantaBuilder
{
    private GetUserIdsWithoutSantaInterface $getUsersWithoutSanta;

    public function __construct(GetUserIdsWithoutSantaInterface $getUsersWithoutSanta)
    {
        $this->getUsersWithoutSanta = $getUsersWithoutSanta;
    }

    public function make(CreateSantaDto $createSantaDto): SantaDomain
    {
        $giftRecipientIds = $this->getUsersWithoutSanta->get();

        $giftRecipientId = $giftRecipientIds[
            array_rand($giftRecipientIds)
        ];

        return new SantaDomain(
            null,
            $createSantaDto->getName(),
            $giftRecipientId
        );
    }
}
