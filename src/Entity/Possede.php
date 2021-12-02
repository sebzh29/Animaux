<?php

namespace App\Entity;

use App\Repository\PossedeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=PossedeRepository::class)
 * @UniqueEntity(fields={"personne","animal"}) 
 */
class Possede
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="possedes")
     */
    private $personne;

    /**
     * @ORM\ManyToOne(targetEntity=Animal::class, inversedBy="possedes")
     */
    private $animals;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombres;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonne(): ?personne
    {
        return $this->personne;
    }

    public function setPersonne(?personne $personne): self
    {
        $this->personne = $personne;

        return $this;
    }

    public function getAnimals(): ?animal
    {
        return $this->animals;
    }

    public function setAnimals(?animal $animals): self
    {
        $this->animals = $animals;

        return $this;
    }

    public function getNombres(): ?int
    {
        return $this->nombres;
    }

    public function setNombres(int $nombres): self
    {
        $this->nombres = $nombres;

        return $this;
    }
}
