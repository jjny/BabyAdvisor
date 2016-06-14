<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Tranche_age")
 */
class Tranche_age
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
    private $Libelle;

    /**
     * @ORM\ManyToMany(targetEntity="Article", mappedBy="TrancheAge")
     */
    private $Articles;

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Tranche_age
     */
    public function setLibelle($libelle)
    {
        $this->Libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->Libelle;
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
     * @return Tranche_age
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