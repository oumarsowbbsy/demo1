<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DocumentRepository")
 */
class Document
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CategoryD", inversedBy="documents")
     */
    private $categoryd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryd(): ?CategoryD
    {
        return $this->categoryd;
    }

    public function setCategoryd(?CategoryD $categoryd): self
    {
        $this->categoryd = $categoryd;

        return $this;
    }
}
