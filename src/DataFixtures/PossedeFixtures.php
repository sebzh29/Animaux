<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Personne;
use App\Entity\Possede;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PossedeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
    $p1 = new Personne();
        $p1->setNom("Jo")->setPrenom("La frite");
        $manager->persist($p1);

    $p2 = new Personne();
        $p2->setNom("Jak")->setPrenom("L'eventreur");
        $manager->persist($p2);

    $p3 = new Personne();
        $p3->setNom("Polo")->setPrenom("Marco");
        $manager->persist($p3);

    $a1 = new Animal();
        $a1->setNom("Chien");
        $manager->persist($a1);

    $a2 = new Animal();
        $a2->setNom("Chat");
        $manager->persist($a2);

    $a3 = new Animal();
        $a3->setNom("Cochon");
        $manager->persist($a3);

    $pos1 = new Possede();
        $pos1->setPersonne($p1)
            ->setAnimals($a1)
            ->setNombres(30);
        $manager->persist($pos1);

    $pos2 = new Possede();
        $pos2->setPersonne($p2)
            ->setAnimals($a2)
            ->setNombres(10);
        $manager->persist($pos2);

    $pos3 = new Possede();
        $pos3->setPersonne($p3)
            ->setAnimals($a3)
            ->setNombres(5);
        $manager->persist($pos3);
    
    $manager->flush();
    }
}