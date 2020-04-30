<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GalleryRepository")
 */
class Gallery
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $coordonee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $randonnees;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameImage(): ?string
    {
        return $this->name_image;
    }

    public function setNameImage(string $name_image): self
    {
        $this->name_image = $name_image;

        return $this;
    }

    public function getCoordonee(): ?string
    {
        return $this->coordonee;
    }

    public function setCoordonee(string $coordonee): self
    {
        $this->coordonee = $coordonee;

        return $this;
    }

    public function getRandonnees(): ?string
    {
        return $this->randonnees;
    }

    public function setRandonnees(string $randonnees): self
    {
        $this->randonnees = $randonnees;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
