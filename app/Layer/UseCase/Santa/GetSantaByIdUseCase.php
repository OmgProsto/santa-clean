<?php

namespace App\Layer\UseCase\Santa;

use App\Layer\Domain\Santa\Entity\SantaDomain;
use App\Layer\Domain\Santa\GetSantaByIdInterface;

class GetSantaByIdUseCase
{
    private GetSantaByIdInterface $getSantaById;

    public function __construct(GetSantaByIdInterface $getSantaById)
    {
        $this->getSantaById = $getSantaById;
    }

    public function get(int $id): SantaDomain
    {
        return $this->getSantaById->get($id);
    }
}
