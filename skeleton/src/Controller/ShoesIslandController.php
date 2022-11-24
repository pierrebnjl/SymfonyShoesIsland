<?php

namespace App\Controller;


use App\Entity\Categorie;
use App\Entity\SousCategorie;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShoesIslandController extends AbstractController
{
    #[Route('/', name: 'app_shoes_island')]
    public function index(): Response
    {
        return $this->render('shoesIsland/index.html.twig', [
            'controller_name' => 'ShoesIslandController',
        ]);
    }

    #[Route('/CategorieHomme' , name:'app_categorieHomme')]
    public function categorieHomme(CategorieRepository $repo):Response
    {
         $categories = $repo -> findBy(array('categorieType' => 'Homme'));

        return $this->render('shoesIsland/CategorieHomme.html.twig' , [
            'controller_name' => 'ShoesIslandController',
            'categories' => $categories,
        ]);

    }

    #[Route('/CategorieFemme' , name:'app_categorieFemme')]
    public function categorieFemme(CategorieRepository $repo):Response
    {
         $categories = $repo->findBy(array('categorieType' => 'Femme'));

        return $this->render('shoesIsland/CategorieFemme.html.twig' , [
            'controller_name' => 'ShoesIslandController',
            'categories' => $categories,
        ]);

    }   
        
        #[Route('/CategorieEnfant' , name:'app_categorieEnfant')]
        public function categorieEnfant(CategorieRepository $repo):Response
    {
         $categories = $repo->findBy(array('categorieType' => 'Enfant'));
    
        return $this->render('shoesIsland/CategorieEnfant.html.twig' , [
            'controller_name' => 'ShoesIslandController',
            'categories' => $categories,
        ]);
    }
        
    #[Route('/CategorieAccessoire' , name:'app_categorieAccessoire')]
    public function categorieAccessoire(CategorieRepository $repo):Response
{
     $categories = $repo->findBy(array('categorieType' => 'Accessoire'));

    return $this->render('shoesIsland/CategorieAccessoire.html.twig' , [
        'controller_name' => 'ShoesIslandController',
        'categories' => $categories,
    ]);
}
#[Route('/SousCategorieAccessoire' , name:'app_SousCategorieAccessoire')]
    public function SousCategorieAccessoire(SousCategorieRepository $repoSousCat):Response
{
     $SousCategories = $repoSousCat->findBy(array('SousCategorieType' => 'Accessoire'));

    return $this->render('shoesIsland/SousCategorieAccessoire.html.twig' , [
        'controller_name' => 'ShoesIslandController',
        'SousCategories' => $SousCategories,
    ]);
}
    
#[Route('/SousCategorieEnfant' , name:'app_SousCategorieEnfant')]
    public function SousCategorieEnfant(SousCategorieRepository $repoSousCat):Response
{
     $SousCategories = $repoSousCat->findBy(array('SousCategorieType' => 'Enfant'));

    return $this->render('shoesIsland/SousCategorieEnfant.html.twig' , [
        'controller_name' => 'ShoesIslandController',
        'SousCategories' => $SousCategories,
    ]);
}
#[Route('/SousCategorieHomme' , name:'app_SousCategorieHomme')]
    public function SousCategorieHomme(SousCategorieRepository $repoSousCat):Response
{
     $SousCategories = $repoSousCat->findBy(array('SousCategorieType' => 'Homme'));

    return $this->render('shoesIsland/SousCategorieHomme.html.twig' , [
        'controller_name' => 'ShoesIslandController',
        'SousCategories' => $SousCategories,
    ]);
}
    #[Route('/SousCategorieFemme' , name:'app_SousCategorieFemme')]
    public function SousCategorieFemme(SousCategorieRepository $repoSousCat):Response
{
     $SousCategories = $repoSousCat->findBy(array('SousCategorieType' => 'Femme'));

    return $this->render('shoesIsland/SousCategorieFemme.html.twig' , [
        'controller_name' => 'ShoesIslandController',
        'SousCategories' => $SousCategories,
    ]);
}

        
    }
