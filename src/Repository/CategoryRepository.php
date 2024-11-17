<?php

namespace App\Repository;

use App\Entity\Categorie;
use Core\Database;


class CategoryRepository extends Database
{

    private $instance;

    public function __construct()
    {
        $this->instance = self::getInstance();
    }

    /** Selectionne toutes les categories */
    public function findAll(): array
    {
        $objectsCategories = [];
        $query = $this->instance->query("SELECT 
        categories.id, 
        categories.name as categoryname
        FROM categories");
        $categories = $query->fetchAll();

        foreach ($categories as $category) {
            $item = new Categorie();
            $item->setId($category->id);
            $item->setName($category->categoryname);

            $objectsCategories[] = $item;
        }

        return $objectsCategories;
    }

    /** Insertion categorie en base de donnees */
    public function add(Categorie $categorie): Categorie {

        $query = $this->instance->prepare("
            INSERT INTO categories (name)
            VALUES (:name)
            ");

            $query->bindValue(':name', $categorie->getName());
            $query->execute();

            // Recupere l'ID nouvellement créé
            $id = $this->instance->lastInsertId();

            // Ajoute l'ID à mon objet
            $categorie->setId($id);

            // Retourne notre objet muni d'un ID
            return $categorie;
    }
}