<?php

namespace App\Layer\Domain\Santa;

use App\Layer\Domain\Santa\Entity\SantaDomain;

interface SaveNewSantaInterface
{
    public function save(SantaDomain $santa): void;
}
