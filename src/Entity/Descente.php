<?php

namespace App\Entity;

use App\Repository\DescenteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @var Collection<int, Etagere>
     */
    #[ORM\OneToMany(targetEntity: Etagere::class, mappedBy: 'descente')]
    private Collection $etageres;

    /**
     * @var Collection<int, EtagereArticle>
     */
    #[ORM\OneToMany(targetEntity: EtagereArticle::class, mappedBy: 'descente')]
    private Collection $etagereArticles;

    public function __construct()
    {
        $this->etageres = new ArrayCollection();
        $this->etagereArticles = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Etagere>
     */
    public function getEtageres(): Collection
    {
        return $this->etageres;
    }

    public function addEtagere(Etagere $etagere): static
    {
        if (!$this->etageres->contains($etagere)) {
            $this->etageres->add($etagere);
            $etagere->setDescente($this);
        }

        return $this;
    }

    public function removeEtagere(Etagere $etagere): static
    {
        if ($this->etageres->removeElement($etagere)) {
            // set the owning side to null (unless already changed)
            if ($etagere->getDescente() === $this) {
                $etagere->setDescente(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, EtagereArticle>
     */
    public function getEtagereArticles(): Collection
    {
        return $this->etagereArticles;
    }

    public function addEtagereArticle(EtagereArticle $etagereArticle): static
    {
        if (!$this->etagereArticles->contains($etagereArticle)) {
            $this->etagereArticles->add($etagereArticle);
            $etagereArticle->setDescente($this);
        }

        return $this;
    }

    public function removeEtagereArticle(EtagereArticle $etagereArticle): static
    {
        if ($this->etagereArticles->removeElement($etagereArticle)) {
            // set the owning side to null (unless already changed)
            if ($etagereArticle->getDescente() === $this) {
                $etagereArticle->setDescente(null);
            }
        }

        return $this;
    }
}
