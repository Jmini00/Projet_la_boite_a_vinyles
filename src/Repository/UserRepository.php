<?php

namespace App\Repository;

use App\Entity\User;
use Core\Database;

class UserRepository extends Database
{
    private \PDO $instance;

    public function __construct()
    {
        $this->instance = self::getInstance();
    }
 
    /**
     * Insertion utilisateur en base de données
     */
    public function add(User $user): User
    {
        $query = $this->instance->prepare("
            INSERT INTO users (lastname, firstname, username, email, password, role, status) 
            VALUES (:lastname, :firstname, :username, :email, :password, :role, :status)
        ");

        $query->bindValue(':lastname', $user->getLastname());
        $query->bindValue(':firstname', $user->getFirstname());
        $query->bindValue(':username', $user->getUsername());
        $query->bindValue(':email', $user->getEmail());
        $query->bindValue(':password', $user->getPassword());
        $query->bindValue(':role', $user->getRole());
        $query->bindValue(':status', $user->getStatus());
        $query->execute();

        // Récupère l'ID nouvellement créé
        $id = $this->instance->lastInsertId();

        $user->setId($id);

        return $user;
    }

    /**
     * Selectionne un utilisateur selon un email
     */
    public function findByUsername(string $email): User|bool {

        $query = $this->instance->prepare("
        SELECT * FROM users WHERE email = :email
        ");

        $query->bindValue('email', $email);
        $query->execute();

        $user = $query->fetch();

        if ($user) {
            $objectUser = new User();
            $objectUser->setId($user->id);
            $objectUser->setLastname($user->lastname);
            $objectUser->setFirstname($user->firstname);
            $objectUser->setUsername($user->username);
            $objectUser->setEmail($user->email);
            $objectUser->setPassword($user->password);
            $objectUser->setRole($user->role);
            $objectUser->setStatus($user->status);

            return $objectUser;
        }

        return false;
    }

    /**
     * Selectionne un utilisateur selon un nom d'utilisateur
     */
    public function findByName(string $username): User|bool {

        $query = $this->instance->prepare("
        SELECT * FROM users WHERE username = :username
        ");

        $query->bindValue('username', $username);
        $query->execute();

        $user = $query->fetch();

        if ($user) {
            $objectUser = new User();
            $objectUser->setId($user->id);
            $objectUser->setLastname($user->lastname);
            $objectUser->setFirstname($user->firstname);
            $objectUser->setUsername($user->username);
            $objectUser->setEmail($user->email);
            $objectUser->setPassword($user->password);
            $objectUser->setRole($user->role);
            $objectUser->setStatus($user->status);

            return $objectUser;
        }

        return false;
    }

    /**
     * Selectionne un utilisateur selon un id
     */
    public function find(int $id): User|bool {

        $objectUser = false;

        $query = $this->instance->prepare("SELECT * FROM users WHERE id = :id");
        $query->bindValue(':id', $id);
        $query->execute();

        $user = $query->fetch();

        if ($user) {
            $objectUser = new User();
            $objectUser->setId($user->id);

            $objectUser->setLastname($user->lastname);
            $objectUser->setFirstname($user->firstname);
            $objectUser->setUsername($user->username);
            $objectUser->setEmail($user->email);
            $objectUser->setPassword($user->password);
            $objectUser->setRole($user->role);
            $objectUser->setStatus($user->status);

        }

        return $objectUser;
    }

    /**
     * Selectionne tous les utilisateurs
     */
    public function findAll(): array {
        $objectsUsers = [];
        $query = $this->instance->query("SELECT * FROM users ORDER BY username");
        $users = $query->fetchAll();

        foreach ($users as $user) {
            $item = new User();
            $item->setId($user->id);
            $item->setLastname($user->lastname);
            $item->setFirstname($user->firstname);
            $item->setUsername($user->username);
            $item->setEmail($user->email);
            $item->setPassword($user->password);
            $item->setRole($user->role);
            $item->setStatus($user->status);

            $objectsUsers[] = $item;
        }

        return $objectsUsers;
    }

    /**
     * Supprime utilisateur en base de données
     */
    public function delete(User $user): User
    {
        $query = $this->instance->prepare("DELETE FROM users WHERE id = :id");
        $query->bindValue(':id', $user->getId());
        $query->execute();

        return $user;
    }

    /**
     * Edition utilisateur en base de données
     */
    public function edit(User $user): User
    {
        $query = $this->instance->prepare("
            UPDATE users SET role = :role, status = :status
            WHERE id = :id
        ");

        $query->bindValue(':role', $user->getRole());
        $query->bindValue(':status', $user->getStatus());
        $query->bindValue(':id', $user->getId());
        $query->execute();

        // Retourne notre objet
        return $user;
    }

}

