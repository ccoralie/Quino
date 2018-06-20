<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Carte", mappedBy="categorie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cartes;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Categorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set carte.
     *
     * @param \AppBundle\Entity\Carte $carte
     *
     * @return Categorie
     */
    public function setCarte(\AppBundle\Entity\Carte $carte)
    {
        $this->carte = $carte;

        return $this;
    }

    /**
     * Get carte.
     *
     * @return \AppBundle\Entity\Carte
     */
    public function getCarte()
    {
        return $this->carte;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cartes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add carte.
     *
     * @param \AppBundle\Entity\Carte $carte
     *
     * @return Categorie
     */
    public function addCarte(\AppBundle\Entity\Carte $carte)
    {
        $this->cartes[] = $carte;

        return $this;
    }

    /**
     * Remove carte.
     *
     * @param \AppBundle\Entity\Carte $carte
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCarte(\AppBundle\Entity\Carte $carte)
    {
        return $this->cartes->removeElement($carte);
    }

    /**
     * Get cartes.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCartes()
    {
        return $this->cartes;
    }
}
