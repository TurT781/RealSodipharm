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
    private ?article $article = null;

    #[ORM\ManyToOne(inversedBy: 'etagereArticles')]
    private ?descente $descente = null;

    #[ORM\Column]
    private ?int $position = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticle(): ?article
    {
        return $this->article;
    }

    public function setArticle(?article $article): static
    {
        $this->article = $article;

        return $this;
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
