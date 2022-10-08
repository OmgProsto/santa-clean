<?php

namespace App\Laravel\DI;

use App\Layer\Domain\Santa\GetNameUserByIdInterface;
use App\Layer\Domain\Santa\GetSantaByIdInterface;
use App\Layer\Domain\Santa\GetUserIdsWithoutSantaInterface;
use App\Layer\Domain\Santa\SaveNewSantaInterface;
use App\Layer\Persistence\Action\Santa\GetNameUserByIdAction;
use App\Layer\Persistence\Action\Santa\GetSantaByIdAction;
use App\Layer\Persistence\Action\Santa\GetUserIdsWithoutSantaAction;
use App\Layer\Persistence\Action\Santa\SaveNewSantaAction;

class Santa
{
    public function __invoke(): array
    {
        return [
            SaveNewSantaInterface::class => SaveNewSantaAction::class,
            GetNameUserByIdInterface::class => GetNameUserByIdAction::class,
            GetSantaByIdInterface::class => GetSantaByIdAction::class,
            GetUserIdsWithoutSantaInterface::class => GetUserIdsWithoutSantaAction::class
        ];
    }
}
