<?php

namespace App\Entity;

use App\Repository\PalierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PalierRepository::class)
 */
class Palier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $rookie;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $fan;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $cinephile;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $vip;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $admin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRookie(): ?string
    {
        return $this->rookie;
    }

    public function setRookie(?string $rookie): self
    {
        $this->rookie = $rookie;

        return $this;
    }

    public function getFan(): ?string
    {
        return $this->fan;
    }

    public function setFan(?string $fan): self
    {
        $this->fan = $fan;

        return $this;
    }

    public function getCinephile(): ?string
    {
        return $this->cinephile;
    }

    public function setCinephile(?string $cinephile): self
    {
        $this->cinephile = $cinephile;

        return $this;
    }

    public function getVip(): ?string
    {
        return $this->vip;
    }

    public function setVip(?string $vip): self
    {
        $this->vip = $vip;

        return $this;
    }

    public function getAdmin(): ?string
    {
        return $this->admin;
    }

    public function setAdmin(?string $admin): self
    {
        $this->admin = $admin;

        return $this;
    }
}
