<?php

namespace App\Model;

class Coffee
{
    public function __construct(
        private int $id,
        private string $name,
        private string $origin,
        private string $notes,
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
}
