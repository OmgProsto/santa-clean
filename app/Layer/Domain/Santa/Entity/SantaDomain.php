<?php

namespace App\Layer\Domain\Santa\Entity;

class SantaDomain
{
    private ?int $santaId;
    private string $name;
    private int $giftRecipientId;

    public function __construct(
        ?int $santaId,
        string $name,
        int $giftRecipientId
    ) {
        $this->santaId = $santaId;
        $this->name = $name;
        $this->giftRecipientId = $giftRecipientId;
    }

    public function getSantaId(): ?int
    {
        return $this->santaId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGiftRecipientId(): int
    {
        return $this->giftRecipientId;
    }
}
