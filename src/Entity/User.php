<?php
// src/Entity/User.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Website", mappedBy="idUser", orphanRemoval=true)
     */
    private $websites;

    public function __construct()
    {
        parent::__construct();
        $this->websites = new ArrayCollection();
        // your own logic
    }

    /**
     * @return Collection|Website[]
     */
    public function getWebsites(): Collection
    {
        return $this->websites;
    }

    public function addWebsite(Website $website): self
    {
        if (!$this->websites->contains($website)) {
            $this->websites[] = $website;
            $website->setIdUser($this);
        }

        return $this;
    }

    public function removeWebsite(Website $website): self
    {
        if ($this->websites->contains($website)) {
            $this->websites->removeElement($website);
            // set the owning side to null (unless already changed)
            if ($website->getIdUser() === $this) {
                $website->setIdUser(null);
            }
        }

        return $this;
    }
}