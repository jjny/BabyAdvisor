<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Categorie")
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $NomCat;

    /**
     * @ORM\ManyToMany(targetEntity="Article", mappedBy="Categories")
     */
    private $Articles;

    /**
     * Set nomCat
     *
     * @param string $nomCat
     *
     * @return Categorie
     */
    public function setNomCat($nomCat)
    {
        $this->NomCat = $nomCat;

        return $this;
    }

    /**
     * Get nomCat
     *
     * @return string
     */
    public function getNomCat()
    {
        return $this->NomCat;
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
     * Constructor
     */
    public function __construct()
    {
        $this->Articles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add article
     *
     * @param \BabyAdvisorBundle\Entity\Article $article
     *
     * @return Categorie
     */
    public function addArticle(\BabyAdvisorBundle\Entity\Article $article)
    {
        $this->Articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \BabyAdvisorBundle\Entity\Article $article
     */
    public function removeArticle(\BabyAdvisorBundle\Entity\Article $article)
    {
        $this->Articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->Articles;
    }
}
