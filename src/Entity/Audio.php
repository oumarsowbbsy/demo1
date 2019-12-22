<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AudioRepository")
 * @Vich\Uploadable
 */
class Audio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
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

    // *     maxSize = "15M",
    /**
     *
     * @Vich\UploadableField(mapping="audios", fileNameProperty="audioName", size="audioSize")
     *
     * @var File
     */
    private $audioFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $audioName;

    /**
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    private $audioSize;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorya", inversedBy="audio")
     */
    private $categoriea;


    /**
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $audioFile
     */
    public function setAudioFile(?File $audioFile = null): void
    {
        $this->audioFile = $audioFile;

        if (null !== $audioFile) {


        }
    }

    public function getAudioFile(): ?File
    {
        return $this->audioFile;
    }

    public function setAudioName(?string $audioName): void
    {
        $this->audioName = $audioName;
    }

    public function getAudioName(): ?string
    {
        return $this->audioName;
    }

    public function setAudioSize(?int $audioSize): void
    {
        $this->audioSize = $audioSize;
    }

    public function getAudioSize(): ?int
    {
        return $this->audioSize;
    }

    public function getCategoriea(): ?Categorya
    {
        return $this->categoriea;
    }

    public function setCategoriea(?Categorya $categoriea): self
    {
        $this->categoriea = $categoriea;

        return $this;
    }

    public function __toString()
    {
        return $this->audioName;
    }
}
