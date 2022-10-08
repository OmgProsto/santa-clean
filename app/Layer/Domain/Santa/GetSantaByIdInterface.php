<?php

namespace App\Layer\Domain\Santa;

use App\Layer\Domain\Santa\Entity\SantaDomain;

interface GetSantaByIdInterface
{
    public function get(int $id): SantaDomain;
}
