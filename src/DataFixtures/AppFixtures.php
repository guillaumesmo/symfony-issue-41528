<?php

namespace App\DataFixtures;

use App\Entity\User\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $manager->persist(
            (new User())
                ->setUsername('admin')
                ->setPassword('password')
        );

        $manager->flush();
    }
}
