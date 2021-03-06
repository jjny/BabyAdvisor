<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Photo")
 */
class Photo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $NomPhoto;

    /**
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="Photos")
     */ 
    protected $Article;

    /**
     * Set nomPhoto
     *
     * @param string $nomPhoto
     *
     * @return Photo
     */
    public function setNomPhoto($nomPhoto)
    {
        $this->NomPhoto = $nomPhoto;

        return $this;
    }

    /**
     * Get nomPhoto
     *
     * @return string
     */
    public function getNomPhoto()
    {
        return $this->NomPhoto;
    }

    /**
     * Set photocol
     *
     * @param string $photocol
     *
     * @return Photo
     */
    public function setPhotocol($photocol)
    {
        $this->Photocol = $photocol;

        return $this;
    }

    /**
     * Get photocol
     *
     * @return string
     */
    public function getPhotocol()
    {
        return $this->Photocol;
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
     * Set article
     *
     * @param \BabyAdvisorBundle\Entity\Article $article
     *
     * @return Photo
     */
    public function setArticle(\BabyAdvisorBundle\Entity\Article $article = null)
    {
        $this->Article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \BabyAdvisorBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->Article;
    }
}
