<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use app\entity\User;

class Userfixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $user = new user();
        $user->setEmail("bob@skull.com");
        $user->setLogin("bob");
        $user->setFirstname("Bob");
        $user->setLastname("skull");
        $user->setLangue("FR");
        $user->setPassword("root");

        $manager->persist($user);

        $manager->flush();
    }
}
