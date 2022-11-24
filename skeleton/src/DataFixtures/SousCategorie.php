<?php

namespace App\DataFixtures;

use App\Entity\SousCategorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SousCategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       

        $nomSousCategorie = array("bleu" , "rouge" , "vert" , "noir" , "gris" , "orange" );
     
        foreach ($nomSousCategorie as $key => $value) {
                    
            $sousCategorieHomme = new Categorie();
            $sousCategorieHomme ->setCategorieNom("Categorie : ".$value)
            ->setCategorieType("Homme")
            ->setCategorieImg('http://placehold.it/350x150');

            $manager->persist($sousCategorieHomme);
    
            $sousCategorieFemme = new Categorie();
            $sousCategorieFemme ->setCategorieNom("Categorie : ".$value)
            ->setCategorieType("Femme")
            ->setCategorieImg('http://placehold.it/350x150');

            $manager->persist($sousCategorieFemme);
        
            $sousCategorieEnfant = new Categorie();
            $sousCategorieEnfant ->setCategorieNom("Categorie : ".$value)
            ->setCategorieType("Enfant")
            ->setCategorieImg('http://placehold.it/350x150');

            $manager->persist($sousCategorieEnfant);
        
        
        
        }


        $sousCategorieAccessoire = new Categorie();
        $sousCategorieAccessoire ->setCategorieNom("Categorie : ".$value)
        ->setCategorieType("Accessoire")
        ->setCategorieImg('http://placehold.it/350x150');

        $manager->persist($sousCategorieAccessoire);

        $manager->flush();
    }
}
