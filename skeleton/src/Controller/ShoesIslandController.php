<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use App\Entity\Categorie;
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

// Produit //

#[Route('shoesIsland/categorieHomme/{produit}', name: 'app_produit')]
public function produit(Produit $produit, ProduitRepository $repo): Response
{
    $produits = $repo->findBy(array('produitType' => 'Sneakers'));
    // dd($produit);
    return $this->render('shoesIsland/ProduitHomme.html.twig', [
        'produit' => $produit,
        'produits' => $produits,
    ]);
}
public function produit1(Produit $produit1, ProduitRepository $repo): Response
{
    $produits1 = $repo->findBy(array('produitType' => 'Chaussure de Ville'));
    // dd($produit);
    return $this->render('shoesIsland/ProduitHomme.html.twig', [
        'produit1' => $produit1,
        'produits1' => $produits1,
    ]);
}
public function produit2(Produit $produit2, ProduitRepository $repo): Response
{
    $produits2 = $repo->findBy(array('produitType' => 'Chaussure de sport'));
    // dd($produit);
    return $this->render('shoesIsland/CategorieHomme/ProduitHomme.html.twig', [
        'produit2' => $produit2,
        'produits2' => $produits2,
    ]);
}
public function produit3(Produit $produit3, ProduitRepository $repo): Response
{
    $produits3 = $repo->findBy(array('produitType' => 'Chaussure haut de gamme'));
    // dd($produit);
    return $this->render('shoesIsland/CategorieHomme/ProduitHomme.html.twig', [
        'produit3' => $produit3,
        'produits3' => $produits3,
    ]);
}
}