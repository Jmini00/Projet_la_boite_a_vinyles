<?php

namespace App\Repository;

use App\Entity\Country;
use Core\Database;


class CountryRepository extends Database
{

    private $instance;

    public function __construct()
    {
        $this->instance = self::getInstance();
    }

    /** Selectionne tous les pays */
    public function findAll(): array
    {
        $objectsCountries = [];
        $query = $this->instance->query("SELECT 
        countries.id, 
        countries.name as countryname
        FROM countries");
        $countries = $query->fetchAll();

        foreach ($countries as $country) {
            $item = new Country();
            $item->setId($country->id);
            $item->setName($country->countryname);

            $objectsCountries[] = $item;
        }

        return $objectsCountries;
    }

    /** Insertion pays en base de donnees */
    public function add(Country $country): Country {

        $query = $this->instance->prepare("
            INSERT INTO countries (name)
            VALUES (:name)
            ");

            $query->bindValue(':name', $country->getName());
            $query->execute();

            // Recupere l'ID nouvellement créé
            $id = $this->instance->lastInsertId();

            // Ajoute l'ID à mon objet
            $country->setId($id);

            // Retourne notre objet muni d'un ID
            return $country;
    }
}