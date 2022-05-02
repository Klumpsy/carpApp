<?php

namespace App\Entity;

use App\Repository\VangstRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VangstRepository::class)]
class Vangst
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $water;

    #[ORM\Column(type: 'float')]
    private $gewicht;

    #[ORM\ManyToOne(targetEntity: Soort::class, inversedBy: 'soort')]
    #[ORM\JoinColumn(nullable: false)]
    private $soort;

    #[ORM\Column(type: 'integer')]
    private $diepte;

    #[ORM\Column(type: 'blob', nullable: true)]
    private $image;

    #[ORM\ManyToOne(targetEntity: Land::class, inversedBy: 'land')]
    #[ORM\JoinColumn(nullable: false)]
    private $land;

    #[ORM\Column(type: 'date')]
    private $datum;

    #[ORM\Column(type: 'time')]
    private $time;

    #[ORM\Column(type: 'time')]
    private $tijd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWater(): ?string
    {
        return $this->water;
    }

    public function setWater(string $water): self
    {
        $this->water = $water;

        return $this;
    }

    public function getGewicht(): ?float
    {
        return $this->gewicht;
    }

    public function setGewicht(float $gewicht): self
    {
        $this->gewicht = $gewicht;

        return $this;
    }

    public function getSoort(): ?Soort
    {
        return $this->soort;
    }

    public function setSoort(?Soort $soort): self
    {
        $this->soort = $soort;

        return $this;
    }

    public function getDiepte(): ?int
    {
        return $this->diepte;
    }

    public function setDiepte(int $diepte): self
    {
        $this->diepte = $diepte;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getLand(): ?Land
    {
        return $this->land;
    }

    public function setLand(?Land $land): self
    {
        $this->land = $land;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getTijd(): ?\DateTimeInterface
    {
        return $this->tijd;
    }

    public function setTijd(\DateTimeInterface $tijd): self
    {
        $this->tijd = $tijd;

        return $this;
    }
}
