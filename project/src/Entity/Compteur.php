<?php

namespace App\Entity;

use App\Repository\CompteurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteurRepository::class)
 */
class Compteur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $admin;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $membre;

    /**
     * @ORM\Column(type="smallint")
     */
    private $film;

    /**
     * @ORM\Column(type="smallint")
     */
    private $connexion;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $inscription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdmin(): ?int
    {
        return $this->admin;
    }

    public function setAdmin(?int $admin): self
    {
        $this->admin = $admin;

        return $this;
    }

    public function getMembre(): ?int
    {
        return $this->membre;
    }

    public function setMembre(?int $membre): self
    {
        $this->membre = $membre;

        return $this;
    }

    public function getFilm(): ?int
    {
        return $this->film;
    }

    public function setFilm(int $film): self
    {
        $this->film = $film;

        return $this;
    }

    public function getConnexion(): ?int
    {
        return $this->connexion;
    }

    public function setConnexion(int $connexion): self
    {
        $this->connexion = $connexion;

        return $this;
    }

    public function getInscription(): ?int
    {
        return $this->inscription;
    }

    public function setInscription(?int $inscription): self
    {
        $this->inscription = $inscription;

        return $this;
    }
}
