<?php

namespace David\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * David\BlogBundle\Entity\Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="David\BlogBundle\Entity\ArticleRepository")
 */
class Article
{

    /**
     * @ORM\OneToMany(targetEntity="David\BlogBundle\Entity\Commentaire", mappedBy="article")
     */
    private $commentaires;

    /**
     * @ORM\ManyToMany(targetEntity="David\BlogBundle\Entity\Categorie", cascade={"persist"})
     */
    private $categories;

    /**
     * @ORM\ManyToMany(targetEntity="David\BlogBundle\Entity\Tag", cascade={"persist"})
     */
    private $tags;


    /**
     * @ORM\OneToOne(targetEntity="David\BlogBundle\Entity\Image", cascade={"persist"})
     */
    private $image;

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     * @Assert\DateTime()
     */
    private $date;

    /**
     * @var string $titre
     *
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\MinLength(10)
     */
    private $titre;

    /**
     * @var string $auteur
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     * @Assert\MinLength(2)
     */
    private $auteur;

    /**
     * @var text $contenu
     *
     * @ORM\Column(name="contenu", type="text")
     * @Assert\NotBlank()
     */
    private $contenu;

    /**
     * @var boolean $publication
     *
     * @ORM\Column(name="publication", type="boolean")
     */
    private $publication;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateEdition;
    


    //Constructeur
    public function __construct()
    {
        $this->date = new \DateTime();
        $this->publication = true;
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param datetime $date
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param text $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * Get contenu
     *
     * @return text 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set publication
     *
     * @param boolean $publication
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
    }

    /**
     * Get publication
     *
     * @return boolean 
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set image
     *
     * @param David\BlogBundle\Entity\Image $image
     */
    public function setImage(\David\BlogBundle\Entity\Image $image)
    {
        $this->image = $image;
    }

    /**
     * Get image
     *
     * @return David\BlogBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add categories
     *
     * @param David\BlogBundle\Entity\Categorie $categories
     */
    public function addCategorie(\David\BlogBundle\Entity\Categorie $categories)
    {
        $this->categories[] = $categories;
    }

    /**
     * Get categories
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }


    /**
     * Remove categorue
     * 
     */
    public function removeCategorie(\David\BlogBundle\Entity\Categorie $categorie) // removeCategorie sans « s » !
    {
        // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
        $this->categories->removeElement($categorie);
    }




    /**
     * Add commentaires
     *
     * @param \David\BlogBundle\Entity\Commentaire $commentaires
     * @return Article
     */
    public function addCommentaire(\David\BlogBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires[] = $commentaires;
        $commentaires->setArticle();
    
        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \David\BlogBundle\Entity\Commentaire $commentaires
     */
    public function removeCommentaire(\David\BlogBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Add tags
     *
     * @param \David\BlogBundle\Entity\Tag $tags
     * @return Article
     */
    public function addTag(\David\BlogBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;
    
        return $this;
    }

    /**
     * Remove tags
     *
     * @param \David\BlogBundle\Entity\Tag $tags
     */
    public function removeTag(\David\BlogBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }
}