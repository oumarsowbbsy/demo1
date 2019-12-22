<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryaRepository")
 */
class Categorya
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
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Audio", mappedBy="categoriea")
     */
    private $audio;

    public function __construct()
    {
        $this->audio = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Audio[]
     */
    public function getAudio(): Collection
    {
        return $this->audio;
    }

    public function addAudio(Audio $audio): self
    {
        if (!$this->audio->contains($audio)) {
            $this->audio[] = $audio;
            $audio->setCategoriea($this);
        }

        return $this;
    }

    public function removeAudio(Audio $audio): self
    {
        if ($this->audio->contains($audio)) {
            $this->audio->removeElement($audio);
            // set the owning side to null (unless already changed)
            if ($audio->getCategoriea() === $this) {
                $audio->setCategoriea(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->name;
    }
}
