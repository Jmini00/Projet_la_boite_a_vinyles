<?php

namespace App\Repository;

use App\Entity\Vinyle;
use Core\Database;

class VinyleRepository extends Database
{

    private $instance;

    public function __construct()
    {
        $this->instance = self::getInstance();
    }

    /**
     * Selectionne tous les vinyles
     */
    public function findAll(): array
    {
        $objectsVinyls = [];
        $query = $this->instance->query("SELECT 

        vinyls.id, vinyls.name, vinyls.preview, vinyls.alt, vinyls.release_date,
        categories.name as category,
        artists.name as artistname
        
        FROM `vinyls` 
        
        INNER JOIN categories
        ON vinyls.category_id = categories.id
        INNER JOIN artists
        ON vinyls.artist_id = artists.id
        
        ORDER BY artistname ASC");
        $vinyls = $query->fetchAll();

        foreach ($vinyls as $vinyl) {
            $item = new Vinyle();
            $item->setId($vinyl->id);
            $item->setName($vinyl->name);
            $item->setPreview($vinyl->preview);
            $item->setAlt($vinyl->alt);
            $item->setReleaseDate($vinyl->release_date);
            $item->setCategorie($vinyl->category);
            $item->setArtiste($vinyl->artistname);
            $objectsVinyls[] = $item;
        }

        return $objectsVinyls;
    }

    /**
     * Selectionne un vinyle
     */
    public function find(int $id): Vinyle|bool
    {

        $objectVinyle = false;

        $query = $this->instance->prepare("SELECT 
        vinyls.id, vinyls.name, vinyls.preview, vinyls.alt, vinyls.description, 
        vinyls.release_date, vinyls.likes,
        categories.name as category,
        artists.name as artistname,
        artists.description as artistdescription,
        tracklists.title as tracklist
         FROM `vinyls` 
         INNER JOIN categories
         ON vinyls.category_id = categories.id
         INNER JOIN artists
         ON vinyls.artist_id = artists.id
         INNER JOIN tracklists
         ON tracklists.vinyl_id = vinyls.id
         WHERE vinyls.id = :id");
        $query->bindValue(':id', $id);
        $query->execute();

        $vinyle = $query->fetch();

        if ($vinyle) {
            $objectVinyle = new Vinyle();
            $objectVinyle->setId($vinyle->id);
            $objectVinyle->setName($vinyle->name);
            $objectVinyle->setPreview($vinyle->preview);
            $objectVinyle->setAlt($vinyle->alt);
            $objectVinyle->setDescription($vinyle->description);
            $objectVinyle->setReleaseDate($vinyle->release_date);
            $objectVinyle->setCategorie($vinyle->category);
            $objectVinyle->setArtiste($vinyle->artistname);
            $objectVinyle->setArtisteDesc($vinyle->artistdescription);
            $objectVinyle->setTracklist($vinyle->tracklist);
            $objectVinyle->setLikes($vinyle->likes);
        }

        return $objectVinyle;
    }

    /**
     * Selectionne tous les morceaux
     */
    public function findTracklist(int $id): array
    {
        $objectsTracklists = [];
        $query = $this->instance->prepare("SELECT 

        vinyls.id,
        tracklists.title as tracklisttitle
    
        FROM `tracklists` 
        
        INNER JOIN vinyls
        ON tracklists.vinyl_id = vinyls.id
        WHERE vinyls.id = :id");
                $query->bindValue(':id', $id);
                $query->execute();

        $tracklists = $query->fetchAll();

        foreach ($tracklists as $tracklist) {
            $item = new Vinyle();
            $item->setId($tracklist->id);
            $item->setTracklist($tracklist->tracklisttitle);
            $objectsTracklists[] = $item;
        }

        return $objectsTracklists;
    }

    /**
     * Edition d'un vinyle */ 
    public function edit(Vinyle $vinyle): Vinyle
    {
        $query = $this->instance->prepare("
            UPDATE vinyls SET 
                name = :name, preview = :preview, alt = :alt, 
                description = :description, release_date = :release_date
            WHERE id = :id
        ");

        $query->bindValue(':name', $vinyle->getName());
        $query->bindValue(':preview', $vinyle->getPreview());
        $query->bindValue(':alt', $vinyle->getAlt());
        $query->bindValue(':description', $vinyle->getDescription());
        //$query->bindValue('', $vinyle->getArtisteDesc());
        $query->bindValue(':release_date', $vinyle->getReleaseDate());
        $query->bindValue(':id', $vinyle->getId());
        $query->execute();

        // Retourne notre objet
        return $vinyle;
    }

    /**
     * Insertion vinyle en base de donnees
     */
    public function add(Vinyle $vinyle): Vinyle
    {

        $query = $this->instance->prepare("
            INSERT INTO vinyls (name, preview, alt, description, release_date, artist_id, category_id, likes)
            VALUES (:name, :preview, :alt, :description, :release_date, :artist_id, :category_id, :likes)
            ");

        $query->bindValue(':name', $vinyle->getName());
        $query->bindValue(':preview', $vinyle->getPreview());
        $query->bindValue(':alt', $vinyle->getAlt());
        $query->bindValue(':description', $vinyle->getDescription());
        $query->bindValue(':release_date', $vinyle->getReleaseDate());
        $query->bindValue(':artist_id', $vinyle->getArtiste());
        $query->bindValue(':category_id', $vinyle->getCategorie());
        $query->bindValue(':likes', $vinyle->getLikes()); 

        $query->execute();

        // Recupere l'ID nouvellement créé
        $id = $this->instance->lastInsertId();

        // Ajoute l'ID à mon objet
        $vinyle->setId($id);

        // Retourne notre objet muni d'un ID
        return $vinyle;
    }

    /**
     * Selection vinyles Liam Gallagher
     */
    public function findByArtist(string $name): array
    {
        $objectsVinyls = [];
        $query = $this->instance->prepare("SELECT 

        vinyls.id, vinyls.name, vinyls.preview, vinyls.alt, vinyls.release_date, vinyls.description,
        artists.name as artistname
        
        FROM `vinyls` 
        
        INNER JOIN artists
        ON vinyls.artist_id = artists.id
        
        WHERE artists.name = :name
        
        ORDER BY release_date ASC");
        $query->bindValue(':name', $name);
        $query->execute();
        $vinyls = $query->fetchAll();

        foreach ($vinyls as $vinyl) {
            $item = new Vinyle();
            $item->setId($vinyl->id);
            $item->setName($vinyl->name);
            $item->setPreview($vinyl->preview);
            $item->setAlt($vinyl->alt);
            $item->setReleaseDate($vinyl->release_date);
            $item->setArtiste($vinyl->artistname);
            $objectsVinyls[] = $item;
        }

        return $objectsVinyls;
    }

    /**
     * Selection vinyles UK
     */
    public function findByCountry(): array
    {
        $objectsVinyls = [];
        $query = $this->instance->query("SELECT 

        vinyls.id, vinyls.name, vinyls.preview, vinyls.alt, vinyls.release_date, vinyls.description,
        artists.name as artistname,
        countries.name as countryname

        FROM `vinyls` 

        INNER JOIN artists
        ON vinyls.artist_id = artists.id
        INNER JOIN countries
        ON artists.country_id = countries.id

        WHERE countries.name = 'Royaume-Uni'
        ORDER BY artistname ASC");

        $vinyls = $query->fetchAll();

        foreach ($vinyls as $vinyl) {
            $item = new Vinyle();
            $item->setId($vinyl->id);
            $item->setName($vinyl->name);
            $item->setPreview($vinyl->preview);
            $item->setAlt($vinyl->alt);
            $item->setReleaseDate($vinyl->release_date);
            $item->setArtiste($vinyl->artistname);
            $objectsVinyls[] = $item;
        }

        return $objectsVinyls;
    }


    /**
     * Selection vinyles 60/80
     */
    public function findByYear(): array {
        $objectsVinyls = [];
        $query = $this->instance->query("SELECT 

        vinyls.id, vinyls.name, vinyls.preview, vinyls.alt, vinyls.release_date, vinyls.description,
        artists.name as artistname

        FROM `vinyls` 

        INNER JOIN artists
        ON vinyls.artist_id = artists.id

        WHERE vinyls.release_date BETWEEN '1960'
        AND '1980'

        ORDER by release_date ASC");

        $vinyls = $query->fetchAll();
        
        foreach ($vinyls as $vinyl) {
            $item = new Vinyle();
            $item->setId($vinyl->id);
            $item->setName($vinyl->name);
            $item->setPreview($vinyl->preview);
            $item->setAlt($vinyl->alt);
            $item->setReleaseDate($vinyl->release_date);
            $item->setArtiste($vinyl->artistname);
            $objectsVinyls[] = $item;
        }

        return $objectsVinyls;
    }

    /**
     * Selectionne un seul vinyle
     */
    public function findOne(): array
    {
        $objectsVinyls = [];
        $query = $this->instance->query("SELECT 

        vinyls.id, vinyls.name, vinyls.preview, vinyls.alt,
        artists.name as artistname
        
        FROM `vinyls` 
        
        INNER JOIN artists
        ON vinyls.artist_id = artists.id
        ORDER BY RAND()
        LIMIT 1");
        $vinyls = $query->fetchAll();

        foreach ($vinyls as $vinyl) {
            $item = new Vinyle();
            $item->setId($vinyl->id);
            $item->setName($vinyl->name);
            $item->setPreview($vinyl->preview);
            $item->setAlt($vinyl->alt);
            $item->setArtiste($vinyl->artistname);
            $objectsVinyls[] = $item;
        }

        return $objectsVinyls;
    }

    /**
     * Selection vinyles par categories
     */
    public function findByCat(string $name): array
    {
        $objectsVinyls = [];
        $query = $this->instance->prepare("SELECT 

        vinyls.id, vinyls.name, vinyls.preview, vinyls.alt, vinyls.release_date, vinyls.description,
        artists.name as artistname,
        categories.name as category
        
        FROM `vinyls` 
        
        INNER JOIN artists
        ON vinyls.artist_id = artists.id
        INNER JOIN categories
        ON vinyls.category_id = categories.id

        WHERE categories.name = :name");
        $query->bindValue(':name', $name);
        $query->execute();
        $vinyls = $query->fetchAll();

        foreach ($vinyls as $vinyl) {
            $item = new Vinyle();
            $item->setId($vinyl->id);
            $item->setName($vinyl->name);
            $item->setPreview($vinyl->preview);
            $item->setAlt($vinyl->alt);
            $item->setReleaseDate($vinyl->release_date);
            $item->setArtiste($vinyl->artistname);
            $item->setCategorie($vinyl->category);
            $objectsVinyls[] = $item;
        }

        return $objectsVinyls;
    }
 
    /**
     * Liker un vinyle
     */
    public function likeVinyl(int $vinylId): void {
        $query = $this->instance->prepare("
            UPDATE vinyls 
            SET likes = likes + 1
            WHERE id = :id
        ");

        $query->bindValue(':id', $vinylId);
        $query->execute();
    }
}
