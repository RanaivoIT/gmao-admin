<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Site;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $faker = Factory::create('fr-FR');

        //Data fixture Site

        for ($i=0; $i < 5; $i++) { 
            $site = new Site();
            
        }

        $manager->flush();
    }
}
