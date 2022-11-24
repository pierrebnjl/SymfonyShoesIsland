<?php

namespace App\Entity;

use App\Repository\SousCategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SousCategorieRepository::class)]
class SousCategorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $sous_categorie_nom = null;

    #[ORM\Column(length: 255)]
    private ?string $sous_categorie_type = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getSousCategorieImg(): ?string
    {
        return $this->sous_categorie_nom;
    }
    public function setSousCategorieImg(string $sous_categorie_nom): self
    {
        $this->sous_categorie_nom = $sous_categorie_nom;

        return $this;
    }
    public function getSousCategorieNom(): ?string
    {
        return $this->sous_categorie_nom;
    }

    public function setSousCategorieNom(string $sous_categorie_nom): self
    {
        $this->sous_categorie_nom = $sous_categorie_nom;

        return $this;
    }

    public function getSousCategorieType(): ?string
    {
        return $this->sous_categorie_type;
    }

    public function setSousCategorieType(string $sous_categorie_type): self
    {
        $this->sous_categorie_type = $sous_categorie_type;

        return $this;
    }
}
