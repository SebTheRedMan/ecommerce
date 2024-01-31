<?php

namespace App\DataFixtures;

use App\Entity\Images;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;

class ImagessFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = faker\Factory::create('fr_FR');

        for ($img = 0; $img < 10; $img++) {
            $imgObj = new Images();
            $imgObj->setName($faker->image(null, 640, 480));
            
            // reference géré par les datafixture : voir la class ProductssFixtures
            $product = $this->getReference('prod-' . rand(1, 10));
            $imgObj->setProducts($product);

            $manager->persist($imgObj);
        }

        $manager->flush();
    }

    // Sert à gerer les dépendances des créations des fixtures 
    // (les ordres des appels lorsqu'on lance la commande:
    //  symfony console doctrine:fixtures:load [--no-interaction])
    public function getDependencies(): array
    {
        return [
            ProductsFixtures::class
        ];
    }
}
