<?php

namespace App\Entity;

class Vinyle
{
    private int $id;
    private string $name;
    private string $preview;
    private string $alt;
    private string $description;
    private int $releaseDate;
    private string $categorie;
    private string $artiste;
    private string $artisteDesc;
    private string $tracklist;
    private int $likes;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPreview(): string
    {
        // Si l'image n'existe pas, j'en attribue une par defaut
        if (!file_exists($_ENV['FOLDER_PROJECT'] . $this->preview)) {
            $this->preview = 'test2.webp';
        }
        return $this->preview;
    }

    // Retourne le chemin complet de l'image du projet
    public function getFolderPreview(): string {

        return $_ENV['FOLDER_PROJECT'] . $this->getPreview();
    }

    public function setPreview(string $preview): void
    {
        $this->preview = $preview;
    }

    public function getAlt(): string
    {
        return $this->alt;
    }

    public function setAlt(string $alt): void
    {
        $this->alt = $alt;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getReleaseDate(): int
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(int $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    public function getCategorie(): string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): void
    {
        $this->categorie = $categorie;
    }

    public function getTracklist(): string
    {
        return $this->tracklist;
    }

    public function setTracklist(string $tracklist): void
    {
        $this->tracklist = $tracklist;
    }

    public function getArtisteDesc(): string
    {
        return $this->artisteDesc;
    }

    public function setArtisteDesc(string $artisteDesc): void
    {
        $this->artisteDesc = $artisteDesc;
    }

    public function getArtiste(): string
    {
        return $this->artiste;
    }

    public function setArtiste(string $artiste): void
    {
        $this->artiste = $artiste;
    }

    public function getLikes(): int
    {
        return $this->likes;
    }

    public function setLikes(int $likes): void
    {
        $this->likes = $likes;
    }
}