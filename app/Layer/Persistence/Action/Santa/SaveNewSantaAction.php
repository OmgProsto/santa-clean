<?php

namespace App\Layer\Persistence\Action\Santa;

use App\Layer\Domain\Santa\Entity\SantaDomain;
use App\Layer\Domain\Santa\SaveNewSantaInterface;
use App\Layer\Persistence\Model\Santa\SantaModel;
use App\Layer\Persistence\Repository\Santa\SantaRepository;

class SaveNewSantaAction implements SaveNewSantaInterface
{
    private SantaModel $santaModel;
    private SantaRepository $santaRepository;

    public function __construct(
        SantaModel $santaModel,
        SantaRepository $santaRepository)
    {
        $this->santaModel = $santaModel;
        $this->santaRepository = $santaRepository;
    }

    public function save(SantaDomain $santa): void
    {
        $this->santaRepository->insert(
            $this->santaModel->fromDomain($santa)
        );
    }
}
