<?php

namespace App\Layer\Persistence\Repository\Santa;

use App\Layer\Persistence\Entity\Santa\SantaPersistence;

class SantaRepository
{

    public function insert(SantaPersistence $santaPersistence): void
    {

        $santaEloquentModel = new Santa([
            'name' => $santaPersistence->getName(),
            'gift_recipient_id' => $santaPersistence->getGiftRecipientId()
        ]);

        $santaEloquentModel->save();
    }

    public function getSantaById(int $id): SantaPersistence
    {
        $santaEloquentModel = Santa::find($id);

        return $this->makePersistenceEntity($santaEloquentModel);
    }

    /**
     * @return SantaPersistence[]
     */
    public function getSantasWithoutSanta(): array
    {
        $giftRecipients = Santa::whereNotNull('gift_recipient_id')->pluck('gift_recipient_id')->toArray();

        $usersWithoutSanta = Santa::whereNotIn('id', $giftRecipients)->get();

        return $usersWithoutSanta->map(
            fn (Santa $santaEloquentModel): SantaPersistence => $this->makePersistenceEntity($santaEloquentModel)
        )->toArray();
    }

    private function makePersistenceEntity(Santa $santaEloquentModel): SantaPersistence
    {
        return new SantaPersistence(
            $santaEloquentModel->id,
            $santaEloquentModel->name,
            $santaEloquentModel->gift_recipient_id
        );
    }
}
