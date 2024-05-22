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
    private ?etagere $descente = null;

    #[ORM\ManyToOne(inversedBy: 'etagereArticles')]
    private ?article $article_id = null;

    #[ORM\Column]
    private ?int $position = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescente(): ?etagere
    {
        return $this->descente;
    }

    public function setDescente(?etagere $descente): static
    {
        $this->descente = $descente;

        return $this;
    }

    public function getArticleId(): ?article
    {
        return $this->article_id;
    }

    public function setArticleId(?article $article_id): static
    {
        $this->article_id = $article_id;

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
