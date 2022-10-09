<?php

namespace Tests\Unit\Santa\Domain\Implement;

use App\Layer\Domain\Santa\GetUserIdsWithoutSantaInterface;

class GetUserIdsWithoutSantaTest implements GetUserIdsWithoutSantaInterface
{
    private array $testData;

    public function __construct(array $testData)
    {
        $this->testData = $testData;
    }

    public function get(): array
    {
        return $this->testData;
    }
}
