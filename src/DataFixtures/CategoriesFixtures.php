<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategoriesFixtures extends Fixture
{
    private $counter = 1;
    
    public function __construct(private SluggerInterface $slugger){}

    public function load(ObjectManager $manager): void
    {
        $parent = $this->createCategories('Informatique', null, $manager);
        $this->createCategories('Ordinateurs portables', $parent, $manager);
        $this->createCategories('Écrans', $parent, $manager);
        $this->createCategories('Souris', $parent, $manager);

        $parent = $this->createCategories('Mode', null, $manager);
        $this->createCategories('Homme', $parent, $manager);
        $this->createCategories('Femme', $parent, $manager);
        $this->createCategories('Enfant', $parent, $manager);

        $manager->flush();
    }

    public function createCategories(string $name, Categories $parent = null, ObjectManager $manager)
    {
        $categorie = new Categories();
        $categorie->setName($name);
        $categorie->setSlug($this->slugger->slug($categorie->getName())->lower());
        $categorie->setParent($parent);
        $manager->persist($categorie);

        $this->addReference('cat-' . $this->counter, $categorie);
        $this->counter++;

        return $categorie;
    }
}
