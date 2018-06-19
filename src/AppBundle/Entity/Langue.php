<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langue
 *
 * @ORM\Table(name="langue")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LangueRepository")
 */
class Langue
{
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Flight", mappedBy="langue")
     */
    private $articles;

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
     * @ORM\Column(name="Langue", type="string", length=255, unique=true)
     */
    private $langue;

    /**
     * @var string
     *
     * @ORM\Column(name="drapeaux_path", type="string", length=255)
     */
    private $drapeauxPath;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviation", type="string", length=255)
     */
    private $abreviation;


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
     * Set langue.
     *
     * @param string $langue
     *
     * @return Langue
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue.
     *
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set drapeauxPath.
     *
     * @param string $drapeauxPath
     *
     * @return Langue
     */
    public function setDrapeauxPath($drapeauxPath)
    {
        $this->drapeauxPath = $drapeauxPath;

        return $this;
    }

    /**
     * Get drapeauxPath.
     *
     * @return string
     */
    public function getDrapeauxPath()
    {
        return $this->drapeauxPath;
    }

    /**
     * Set abreviation.
     *
     * @param string $abreviation
     *
     * @return Langue
     */
    public function setAbreviation($abreviation)
    {
        $this->abreviation = $abreviation;

        return $this;
    }

    /**
     * Get abreviation.
     *
     * @return string
     */
    public function getAbreviation()
    {
        return $this->abreviation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add article.
     *
     * @param \AppBundle\Entity\Flight $article
     *
     * @return Langue
     */
    public function addArticle(\AppBundle\Entity\Flight $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article.
     *
     * @param \AppBundle\Entity\Flight $article
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeArticle(\AppBundle\Entity\Flight $article)
    {
        return $this->articles->removeElement($article);
    }

    /**
     * Get articles.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }
}
