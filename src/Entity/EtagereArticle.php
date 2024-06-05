<?php

namespace App\Entity;

use App\Repository\EtagereArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtagereArticleRepository::class)]
class EtagereArticle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'etagereArticles')]
    private ?Article $article = null;

    #[ORM\ManyToOne(inversedBy: 'etagereArticles')]
    private ?Descente $descente = null;

    #[ORM\Column]
    private ?int $position = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): static
    {
        $this->article = $article;

        return $this;
    }

    public function getDescente(): ?Descente
    {
        return $this->descente;
    }

    public function setDescente(?Descente $descente): static
    {
        $this->descente = $descente;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): static
    {
        $this->position = $position;

        return $this;
    }
}
