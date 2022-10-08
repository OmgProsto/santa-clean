<?php

namespace App\Layer\Presentation\View\Santa;

use App\Layer\Domain\Santa\Entity\SantaDomain;
use App\Layer\Presentation\ViewModel\Santa\GiftRecipientNameViewModel;
use App\Layer\Presentation\ViewModel\Santa\NameViewModel;

class SantaView
{
    public const SANTA_ID = 'id';
    public const SANTA_NAME = 'name';
    public const SANTA_GIFT_RECIPIENT_NAME = 'gift_recipient_name';

    private NameViewModel $nameViewModel;
    private GiftRecipientNameViewModel $giftRecipientNameViewModel;

    public function __construct(NameViewModel $nameViewModel, GiftRecipientNameViewModel $giftRecipientNameViewModel)
    {
        $this->nameViewModel = $nameViewModel;
        $this->giftRecipientNameViewModel = $giftRecipientNameViewModel;
    }


    public function toArray(SantaDomain $santa): array
    {
        return [
            self::SANTA_ID => $santa->getSantaId(),
            self::SANTA_NAME => $this->nameViewModel->getName(
                $santa->getName()
            ),
            self::SANTA_GIFT_RECIPIENT_NAME => $this->giftRecipientNameViewModel->getGiftRecipientName(
                $santa->getGiftRecipientId()
            )
        ];
    }
}
