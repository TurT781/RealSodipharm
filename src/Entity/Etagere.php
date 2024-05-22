<?php

namespace App\Entity;

use App\Repository\EtagereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtagereRepository::class)]
class Etagere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, descente>
     */
    #[ORM\OneToMany(targetEntity: descente::class, mappedBy: 'etagere')]
    private Collection $descente_id;

    #[ORM\Column]
    private ?int $hauteur = null;

    #[ORM\Column]
    private ?int $largeur = null;

    /**
     * @var Collection<int, EtagereArticle>
     */
    #[ORM\OneToMany(targetEntity: EtagereArticle::class, mappedBy: 'descente')]
    private Collection $etagereArticles;

    public function __construct()
    {
        $this->descente_id = new ArrayCollection();
        $this->etagereArticles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, descente>
     */
    public function getDescenteId(): Collection
    {
        return $this->descente_id;
    }

    public function addDescenteId(descente $descenteId): static
    {
        if (!$this->descente_id->contains($descenteId)) {
            $this->descente_id->add($descenteId);
            $descenteId->setEtagere($this);
        }

        return $this;
    }

    public function removeDescenteId(descente $descenteId): static
    {
        if ($this->descente_id->removeElement($descenteId)) {
            // set the owning side to null (unless already changed)
            if ($descenteId->getEtagere() === $this) {
                $descenteId->setEtagere(null);
            }
        }

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
