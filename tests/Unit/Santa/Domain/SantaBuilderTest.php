<?php

namespace Tests\Unit\Santa\Domain;

use App\Layer\Domain\Santa\Dto\CreateSantaDto;
use App\Layer\Domain\Santa\SantaBuilder;
use PHPUnit\Framework\TestCase;
use Tests\Unit\Santa\Domain\Implement\GetUserIdsWithoutSantaTest;

class SantaBuilderTest extends TestCase
{

    public function test_createSanta()
    {
        $ids = [11, 22, 33];

        $santaBuilder = $this->getSantaBuilder($ids);

        $name = 'Laravel';

        $createSantaDto = new CreateSantaDto($name);

        $santa = $santaBuilder->make($createSantaDto);

        $this->assertTrue(in_array($santa->getGiftRecipientId(), $ids));
        $this->assertEquals($santa->getName(), $name);
    }


    private function getSantaBuilder(array $testData): SantaBuilder
    {
        return new SantaBuilder(
            new GetUserIdsWithoutSantaTest($testData)
        );
    }
}
