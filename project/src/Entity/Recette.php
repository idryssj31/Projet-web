<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecetteRepository::class)
 */
class Recette
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
    private $unesemaine;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $unmois;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $sixmois;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $unans;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUnesemaine(): ?int
    {
        return $this->unesemaine;
    }

    public function setUnesemaine(?int $unesemaine): self
    {
        $this->unesemaine = $unesemaine;

        return $this;
    }

    public function getUnmois(): ?int
    {
        return $this->unmois;
    }

    public function setUnmois(?int $unmois): self
    {
        $this->unmois = $unmois;

        return $this;
    }

    public function getSixmois(): ?int
    {
        return $this->sixmois;
    }

    public function setSixmois(?int $sixmois): self
    {
        $this->sixmois = $sixmois;

        return $this;
    }

    public function getUnans(): ?int
    {
        return $this->unans;
    }

    public function setUnans(?int $unans): self
    {
        $this->unans = $unans;

        return $this;
    }
}
