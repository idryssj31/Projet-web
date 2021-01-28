<?php

namespace App\Entity;

use App\Repository\FavorisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FavorisRepository::class)
 */
class Favoris
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $film1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $film2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $film3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $film4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $film5;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilm1(): ?string
    {
        return $this->film1;
    }

    public function setFilm1(string $film1): self
    {
        $this->film1 = $film1;

        return $this;
    }

    public function getFilm2(): ?string
    {
        return $this->film2;
    }

    public function setFilm2(string $film2): self
    {
        $this->film2 = $film2;

        return $this;
    }

    public function getFilm3(): ?string
    {
        return $this->film3;
    }

    public function setFilm3(string $film3): self
    {
        $this->film3 = $film3;

        return $this;
    }

    public function getFilm4(): ?string
    {
        return $this->film4;
    }

    public function setFilm4(string $film4): self
    {
        $this->film4 = $film4;

        return $this;
    }

    public function getFilm5(): ?string
    {
        return $this->film5;
    }

    public function setFilm5(string $film5): self
    {
        $this->film5 = $film5;

        return $this;
    }
}
