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

    /**
     * @var Collection<int, EtagereArticle>
     */
    #[ORM\OneToMany(targetEntity: EtagereArticle::class, mappedBy: 'article_id')]
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
            $etagereArticle->setArticleId($this);
        }

        return $this;
    }

    public function removeEtagereArticle(EtagereArticle $etagereArticle): static
    {
        if ($this->etagereArticles->removeElement($etagereArticle)) {
            // set the owning side to null (unless already changed)
            if ($etagereArticle->getArticleId() === $this) {
                $etagereArticle->setArticleId(null);
            }
        }

        return $this;
    }
}
