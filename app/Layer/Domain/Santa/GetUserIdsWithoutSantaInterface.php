<?php

namespace App\Layer\Domain\Santa;

interface GetUserIdsWithoutSantaInterface
{
    /**
     * @return int[]
     */
    public function get(): array;
}
