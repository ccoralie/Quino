<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleUE
 *
 * @ORM\Table(name="articles_u_e")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticlesRepository")
 */
class ArticleUE
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Langue", inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $langue;



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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;


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
     * Set titre.
     *
     * @param string $titre
     *
     * @return ArticleUE
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre.
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu.
     *
     * @param string $contenu
     *
     * @return ArticleUE
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu.
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set langue.
     *
     * @param \AppBundle\Entity\Langue $langue
     *
     * @return ArticleUE
     */
    public function setLangue(\AppBundle\Entity\Langue $langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue.
     *
     * @return \AppBundle\Entity\Langue
     */
    public function getLangue()
    {
        return $this->langue;
    }
}
