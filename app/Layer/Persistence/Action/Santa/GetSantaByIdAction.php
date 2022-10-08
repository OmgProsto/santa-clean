<?php

namespace App\Layer\Persistence\Action\Santa;

use App\Layer\Domain\Santa\Entity\SantaDomain;
use App\Layer\Domain\Santa\GetSantaByIdInterface;
use App\Layer\Persistence\Model\Santa\SantaModel;
use App\Layer\Persistence\Repository\Santa\SantaRepository;

class GetSantaByIdAction implements GetSantaByIdInterface
{
    private SantaModel $santaModel;
    private SantaRepository $santaRepository;

    public function __construct(SantaModel $santaModel, SantaRepository $santaRepository)
    {
        $this->santaModel = $santaModel;
        $this->santaRepository = $santaRepository;
    }

    public function get(int $id): SantaDomain
    {
        return $this->santaModel->toDomain(
            $this->santaRepository->getSantaById($id)
        );
    }
}
