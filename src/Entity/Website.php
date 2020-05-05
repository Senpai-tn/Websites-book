<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WebsiteRepository")
 */
class Website
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
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $URL;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="websites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\Column(type="bigint")
     */
    private $nb_visites;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="websites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUser;

    /**
     * @ORM\Column(type="smallint")
     */
    private $state;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getURL(): ?string
    {
        return $this->URL;
    }

    public function setURL(string $URL): self
    {
        $this->URL = $URL;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

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

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getNbVisites(): ?string
    {
        return $this->nb_visites;
    }

    public function setNbVisites(string $nb_visites): self
    {
        $this->nb_visites = $nb_visites;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getState(): ?int
    {
        return $this->state;
    }

    public function setState(int $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeInterface $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
