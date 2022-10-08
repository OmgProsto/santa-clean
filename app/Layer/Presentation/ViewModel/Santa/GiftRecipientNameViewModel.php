<?php

namespace App\Layer\Presentation\ViewModel\Santa;

use App\Layer\Domain\Santa\GetNameUserByIdInterface;

class GiftRecipientNameViewModel
{
    private GetNameUserByIdInterface $getNameUserById;

    public function __construct(GetNameUserByIdInterface $getNameUserById)
    {
        $this->getNameUserById = $getNameUserById;
    }

    public function getGiftRecipientName(int $id): string
    {
        $name = $this->getNameUserById->get($id);

        return 'Получатель подарка: ' . $name;
    }
}
