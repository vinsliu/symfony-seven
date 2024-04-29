<?php

namespace App\Model;

class Coffee
{
    public function __construct(
        private int $id,
        private string $name,
        private string $origin,
        private string $notes,
        private CoffeeStatusEnum $status,
    ) {
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of origin
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Get the value of notes
     */
    public function getnotes()
    {
        return $this->notes;
    }

    /**
     * Get the value of status
     */
    public function getStatus(): CoffeeStatusEnum
    {
        return $this->status;
    }

    public function getStatusString(): string
    {
        return $this->status->value;
    }

    public function getStatusImageFilename(): string
    {
        return match ($this->status) {
            CoffeeStatusEnum::COMPLETED => 'images/status-complete.png',
            CoffeeStatusEnum::IN_PROGRESS => 'images/status-in-progress.png',
            CoffeeStatusEnum::WAITING => 'images/status-waiting.png',
        };
    }
}
