<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Article")
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idArticle;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $Titre;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateMaJ;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Signale;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateCrea;

    /**
     * Get idArticle
     *
     * @return integer
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->Titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Article
     */
    public function setAdresse($adresse)
    {
        $this->Adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Article
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set dateMaJ
     *
     * @param \DateTime $dateMaJ
     *
     * @return Article
     */
    public function setDateMaJ($dateMaJ)
    {
        $this->DateMaJ = $dateMaJ;

        return $this;
    }

    /**
     * Get dateMaJ
     *
     * @return \DateTime
     */
    public function getDateMaJ()
    {
        return $this->DateMaJ;
    }

    /**
     * Set signale
     *
     * @param boolean $signale
     *
     * @return Article
     */
    public function setSignale($signale)
    {
        $this->Signale = $signale;

        return $this;
    }

    /**
     * Get signale
     *
     * @return boolean
     */
    public function getSignale()
    {
        return $this->Signale;
    }

    /**
     * Set dateCrea
     *
     * @param \DateTime $dateCrea
     *
     * @return Article
     */
    public function setDateCrea($dateCrea)
    {
        $this->DateCrea = $dateCrea;

        return $this;
    }

    /**
     * Get dateCrea
     *
     * @return \DateTime
     */
    public function getDateCrea()
    {
        return $this->DateCrea;
    }
}
