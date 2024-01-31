<?php

namespace App\DataFixtures;

use App\Entity\Products;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProductsFixtures extends Fixture
{
    public function __construct(private SluggerInterface $slugger){}

    public function load(ObjectManager $manager): void
    {
        $faker = faker\Factory::create('fr_FR');

        for ($prod = 1; $prod <= 10; $prod++) {
            $prodObj = new Products();
            $prodObj->setName($faker->text(5));
            $prodObj->setDescription($faker->text());
            $prodObj->setSlug($this->slugger->slug($prodObj->getName())->lower());
            $prodObj->setPrice($faker->numberBetween(900, 15000));
            $prodObj->setStock($faker->numberBetween(0, 10));

            // reference géré par les datafixture : voir la class CategoriesFixtures
            $category = $this->getReference('cat-' . rand(1, 8));
            $prodObj->setCategories($category);

            $manager->persist($prodObj);
            $this->addReference('prod-' . $prod, $prodObj);
        }

        $manager->flush();
    }
}
