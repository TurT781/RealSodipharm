<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
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

    #[ORM\Column]
    private ?int $longueur = null;

    #[ORM\Column]
    private ?int $poids = null;

    #[ORM\Column(length: 255)]
    private ?string $univers = null;

    #[ORM\Column(length: 255)]
    private ?string $famille = null;

    #[ORM\Column]
    private ?int $code = null;

    /**
     * @var Collection<int, EtagereArticle>
     */
    #[ORM\OneToMany(targetEntity: EtagereArticle::class, mappedBy: 'article')]
    private Collection $etagereArticles;

    public function __construct()
    {
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

    public function getLongueur(): ?int
    {
        return $this->longueur;
    }

    public function setLongueur(int $longueur): static
    {
        $this->longueur = $longueur;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(int $poids): static
    {
        $this->poids = $poids;

        return $this;
    }

    public function getUnivers(): ?string
    {
        return $this->univers;
    }

    public function setUnivers(string $univers): static
    {
        $this->univers = $univers;

        return $this;
    }

    public function getFamille(): ?string
    {
        return $this->famille;
    }

    public function setFamille(string $famille): static
    {
        $this->famille = $famille;

        return $this;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): static
    {
        $this->code = $code;

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
            $etagereArticle->setArticle($this);
        }

        return $this;
    }

    public function removeEtagereArticle(EtagereArticle $etagereArticle): static
    {
        if ($this->etagereArticles->removeElement($etagereArticle)) {
            // set the owning side to null (unless already changed)
            if ($etagereArticle->getArticle() === $this) {
                $etagereArticle->setArticle(null);
            }
        }

        return $this;
    }
}
