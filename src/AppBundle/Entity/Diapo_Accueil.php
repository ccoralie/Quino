<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Diapo_Accueil
 *
 * @ORM\Table(name="diapo__accueil")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Diapo_AccueilRepository")
 * @Vich\Uploadable
 */
class Diapo_Accueil
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    protected $image;

    /**
     * @Vich\UploadableField(mapping="accueil_images", fileNameProperty="image")
     *
     * @var File
     * @Assert\File(
     *     maxSize = "5M",
     *     maxSizeMessage="Votre fichier est trop volumineux, veuillez choisir un fichier plus petit",
     *     mimeTypes={"image/jpg", "image/jpeg", "image/png"},
     *     mimeTypesMessage = "Veuillez télécharger un fichier au format .jpg ou .png"
     * )
     *
     */
    protected $imageFile;

    public function __toString()
    {
        return $this->getImage();
    }


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }
}
