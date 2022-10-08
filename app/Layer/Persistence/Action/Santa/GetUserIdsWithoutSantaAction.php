<?php

namespace App\Layer\Persistence\Action\Santa;

use App\Layer\Domain\Santa\GetUserIdsWithoutSantaInterface;
use App\Layer\Persistence\Entity\Santa\SantaPersistence;
use App\Layer\Persistence\Repository\Santa\SantaRepository;

class GetUserIdsWithoutSantaAction implements GetUserIdsWithoutSantaInterface
{
    private SantaRepository $santaRepository;

    public function __construct(SantaRepository $santaRepository)
    {
        $this->santaRepository = $santaRepository;
    }

    /**
     * @return int[]
     */
    public function get(): array
    {
        return array_map(
            fn (SantaPersistence $santaPersistence): int => $santaPersistence->getId(),
            $this->santaRepository->getSantasWithoutSanta()
        );
    }
}
