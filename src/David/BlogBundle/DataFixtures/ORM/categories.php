<?php
// src/David/BlogBundle/DataFixtures/ORM/Categories.php

namespace David\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use David\BlogBundle\Entity\Categorie;

class Categories implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        // Liste des noms de catégorie à ajouter
        $noms = array('Symfony2', 'Doctrine2', 'Tutoriel', 'Evènement');

        foreach($noms as $i => $nom)
        {
            // On crée la catégorie
            $liste_categories[$i] = new Categorie();
            $liste_categories[$i]->setNom($nom);

            // On la persiste
            $manager->persist($liste_categories[$i]);
        }

        // On déclenche l'enregistrement
        $manager->flush();
    }
}

?>