<?php

namespace App\Entity;

use App\Controller\ShoesIslandController;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{

    #[ORM\OneToMany(targetEntity: Produit::class, mappedBy: 'categorie')]
    private $produits;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    
    #[ORM\Column(length: 255)]
    private ?string $categorieNom = null;

    #[ORM\Column(length: 255)]
    private ?string $categorieType = null;

    #[ORM\Column(length: 255)]
    private ?string $categorieImg = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    
    public function getCategorieNom(): ?string
    {
        return $this->categorieNom;
    }

    public function setCategorieNom(string $categorieNom): self
    {
        $this->categorieNom = $categorieNom;

        return $this;
    }

    public function getCategorieType(): ?string
    {
        return $this->categorieType;
    }

    public function setCategorieType(string $categorieType): self
    {
        $this->categorieType = $categorieType;

        return $this;
    }

    public function getCategorieImg(): ?string
    {
        return $this->categorieImg;
    }

    public function setCategorieImg(string $categorieImg): self
    {
        $this->categorieImg = $categorieImg;

        return $this;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }
}
