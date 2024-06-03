<?php

namespace App\Entity;

use App\Repository\EtagereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtagereRepository::class)]
class Etagere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'etageres')]
    private ?descente $descente = null;

    #[ORM\Column]
    private ?int $hauteur = null;

    #[ORM\Column]
    private ?int $largeur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescente(): ?descente
    {
        return $this->descente;
    }

    public function setDescente(?descente $descente): static
    {
        $this->descente = $descente;

        return $this;
    }

    public function getHauteur(): ?int
    {
        return $this->hauteur;
    }

    public function setHauteur(int $hauteur): static
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    public function getLargeur(): ?int
    {
        return $this->largeur;
    }

    public function setLargeur(int $largeur): static
    {
        $this->largeur = $largeur;

        return $this;
    }
}
