<?php

namespace App\Layer\Domain\Santa;

interface GetNameUserByIdInterface
{
    public function get(int $id): string;
}
