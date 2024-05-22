<?php

namespace App\Entity;

use App\Repository\DescenteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DescenteRepository::class)]
class Descente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column]
    private ?int $hauteur = null;

    #[ORM\Column]
    private ?int $largeur = null;

    #[ORM\ManyToOne(inversedBy: 'descente_id')]
    private ?Etagere $etagere = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

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

    public function getEtagere(): ?Etagere
    {
        return $this->etagere;
    }

    public function setEtagere(?Etagere $etagere): static
    {
        $this->etagere = $etagere;

        return $this;
    }
}
