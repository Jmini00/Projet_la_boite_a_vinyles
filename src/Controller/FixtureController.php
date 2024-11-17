<?php

namespace App\Controller;

use Faker;
use App\Entity\User;
use App\Repository\UserRepository;

// Genere des fausses donnees
class FixtureController extends AbstractController
{

    public function index(): void
    {

        $faker = Faker\Factory::create();

        // Insertion de faux utilisateurs
        $userRepository = new UserRepository();

        for ($i = 0; $i < 10; $i++) {
            // Creer un objet avec l'entite "User"
            $user = new User();
            $user->setLastname($faker->lastName);
            $user->setFirstname($faker->firstName);
            $user->setUsername($faker->userName);
            $user->setEmail($faker->email);
            $user->setPassword(password_hash('secret', PASSWORD_DEFAULT));
            $user->setRole('USER');
            $user->setStatus($faker->boolean);

            // Inserer en base de donnees
            $userRepository->add($user);
        }

        // Creation d'un administrateur  
        $admin = new User();
        $admin->setLastname('Doe');
        $admin->setFirstname('John');
        $admin->setUsername('JohnDoeAdmin');
        $admin->setEmail('admin@admin.com');
        $admin->setPassword(password_hash('secret', PASSWORD_DEFAULT));
        $admin->setRole('ADMINISTRATEUR');
        $admin->setStatus('1');

        $userRepository->add($admin);  

    }
}
