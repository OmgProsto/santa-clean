<?php

namespace App\Layer\Persistence\Entity\Santa;

class SantaPersistence
{
    private ?int $id;
    private string $name;
    private int $giftRecipientId;

    public function __construct(
        ?int $id,
        string $name,
        int $giftRecipientId
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->giftRecipientId = $giftRecipientId;
    }

    public function getId(): ?int
    {
        return $this->id;
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
