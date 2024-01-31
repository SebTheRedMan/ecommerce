<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class UsersFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder,
        private SluggerInterface $sluggerInterface
    )
    {
        
    }

    public function load(ObjectManager $manager): void
    {
        $admin = new Users();
        $admin->setEmail('admin@demo.fr');
        $admin->setLastname('theRed');
        $admin->setFirstname('Seb');
        $admin->setAddress('666 de Satan');
        $admin->setZipcode('75666');
        $admin->setCity('Diable');
        $admin->setPassword(
            $this->passwordEncoder->hashPassword($admin, 'admin')
        );
        $admin->setRoles(['ROLE_ADMIN']);
        $manager->persist($admin);

        $faker = faker\Factory::create('fr_FR');

        for ($user = 0; $user < 5; $user++) {
            $userObj = new Users();
            $userObj->setEmail($faker->email());
            $userObj->setLastname($faker->lastName);
            $userObj->setFirstname($faker->firstName);
            $userObj->setAddress($faker->streetAddress);
            $userObj->setZipcode(str_replace(' ', '', $faker->postcode));
            $userObj->setCity($faker->city);
            $userObj->setPassword(
                $this->passwordEncoder->hashPassword($userObj, 'secret')
            );
        // $admin->setRoles(['ROLE_ADMIN']);
        $manager->persist($userObj);
        }

        $manager->flush();
    }
}
