<?php

namespace App\Layer\UseCase;

use App\Layer\Domain\Santa\Dto\CreateSantaDto;
use App\Layer\Domain\Santa\SantaBuilder;
use App\Layer\Domain\Santa\SaveNewSantaInterface;

class CreateNewSantaUseCase
{
    private SantaBuilder $santaBuilder;
    private SaveNewSantaInterface $saveSanta;

    public function __construct(SantaBuilder $santaBuilder, SaveNewSantaInterface $saveSanta)
    {
        $this->santaBuilder = $santaBuilder;
        $this->saveSanta = $saveSanta;
    }

    public function create(CreateSantaDto $createSantaDto): void
    {
        $santa = $this->santaBuilder->make($createSantaDto);

        $this->saveSanta->save($santa);
    }
}
