<?php

namespace App\Layer\Persistence\Action\Santa;

use App\Layer\Domain\Santa\GetNameUserByIdInterface;
use App\Layer\Persistence\Repository\Santa\SantaRepository;

class GetNameUserByIdAction implements GetNameUserByIdInterface
{
    private SantaRepository $santaRepository;

    public function __construct(SantaRepository $santaRepository)
    {
        $this->santaRepository = $santaRepository;
    }

    public function get(int $id): string
    {
        $santa = $this->santaRepository->getSantaById($id);

        return $santa->getName();
    }
}
