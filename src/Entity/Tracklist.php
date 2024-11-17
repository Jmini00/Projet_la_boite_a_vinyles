<?php

namespace App\Entity;

class Tracklist
{
    private int $id;
    private string $title;
    private string $vinyle;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getVinyle(): string
    {
        return $this->vinyle;
    }

    public function setVinyle(string $vinyle): void
    {
        $this->vinyle = $vinyle;
    }
}