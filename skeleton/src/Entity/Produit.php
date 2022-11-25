<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'categorie')]
    private $categorie;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomProduit = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descriptionProduit = null;

    #[ORM\Column(length: 255)]
    private ?string $typeProduit = null;
    #[ORM\Column(length: 255)]
    private ?string $sexeProduit = null;

    #[ORM\Column]
    private ?int $qteStock = null;

    #[ORM\Column]
    private ?int $prixProduit = null;

    #[ORM\Column(length: 255)]
    private ?string $couleurProduit = null;

    #[ORM\Column(length: 255)]
    private ?string $imgProduit = null;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getSexeProduit(): ?string
    {
        return $this->sexeProduit;
    }

    public function setSexeProduit(string $sexeProduit): self
    {
        $this->sexeProduit = $sexeProduit;

        return $this;
    }

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(string $nomProduit): self
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getDescriptionProduit(): ?string
    {
        return $this->descriptionProduit;
    }

    public function setDescriptionProduit(?string $descriptionProduit): self
    {
        $this->descriptionProduit = $descriptionProduit;

        return $this;
    }

    public function getTypeProduit(): ?string
    {
        return $this->typeProduit;
    }

    public function setTypeProduit(string $typeProduit): self
    {
        $this->typeProduit = $typeProduit;

        return $this;
    }

    public function getQteStock(): ?int
    {
        return $this->qteStock;
    }

    public function setQteStock(int $qteStock): self
    {
        $this->qteStock = $qteStock;

        return $this;
    }

    public function getPrixProduit(): ?int
    {
        return $this->prixProduit;
    }

    public function setPrixProduit(int $prixProduit): self
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }

    public function getCouleurProduit(): ?string
    {
        return $this->couleurProduit;
    }

    public function setCouleurProduit(string $couleurProduit): self
    {
        $this->couleurProduit = $couleurProduit;

        return $this;
    }

    public function getImgProduit(): ?string
    {
        return $this->imgProduit;
    }

    public function setImgProduit(string $imgProduit): self
    {
        $this->imgProduit = $imgProduit;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategory(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
}
