<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conges
 *
 * @ORM\Table(name="conges")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CongesRepository")
 */
class Conges
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
     * @var string|null
     *
     * @ORM\Column(name="texte", type="text", nullable=true)
     */
    private $texte;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="actif", type="boolean", nullable=true)
     */
    private $actif;


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
     * Set texte.
     *
     * @param string|null $texte
     *
     * @return Conges
     */
    public function setTexte($texte = null)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte.
     *
     * @return string|null
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set actif.
     *
     * @param bool|null $actif
     *
     * @return Conges
     */
    public function setActif($actif = null)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif.
     *
     * @return bool|null
     */
    public function getActif()
    {
        return $this->actif;
    }
}
