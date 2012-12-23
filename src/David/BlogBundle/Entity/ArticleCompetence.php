<?php

namespace David\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * David\BlogBundle\Entity\ArticleCompetence
 *
 * @ORM\Entity
 */
class ArticleCompetence
{

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="David\BlogBundle\Entity\Article")
     */
    private $article;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="David\BlogBundle\Entity\Competence")
     */
    private $competence;

    /**
     * @ORM\Column()
     */
    private $niveau;

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return ArticleCompetence
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    
        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set article
     *
     * @param \David\BlogBundle\Entity\Article $article
     * @return ArticleCompetence
     */
    public function setArticle(\David\BlogBundle\Entity\Article $article)
    {
        $this->article = $article;
    
        return $this;
    }

    /**
     * Get article
     *
     * @return \David\BlogBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set competence
     *
     * @param \David\BlogBundle\Entity\Competence $competence
     * @return ArticleCompetence
     */
    public function setCompetence(\David\BlogBundle\Entity\Competence $competence)
    {
        $this->competence = $competence;
    
        return $this;
    }

    /**
     * Get competence
     *
     * @return \David\BlogBundle\Entity\Competence 
     */
    public function getCompetence()
    {
        return $this->competence;
    }
}