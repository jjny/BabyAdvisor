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
    private $id;

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
     * @ORM\ManyToMany(targetEntity="Tranche_age", inversedBy="Articles")
     * @ORM\JoinTable(name="article_age")
     */
    private $TrancheAge;

    /**
     * @ORM\ManyToMany(targetEntity="Categorie", inversedBy="Articles")
     * @ORM\JoinTable(name="article_categorie")
     */
    protected $Categories;

    /**
     * @ORM\OneToMany(targetEntity="Horaire", mappedBy="id", cascade={"remove", "persist"})
     */
    protected $Horaire;

    /**
     * @ORM\OneToMany(targetEntity="Activite", mappedBy="id", cascade={"remove", "persist"})
     */
    protected $Activite;

    /**
     * @ORM\OneToMany(targetEntity="Photo", mappedBy="id", cascade={"remove", "persist"})
     */
    protected $Photo;

    /**
     * @ORM\OneToMany(targetEntity="Note", mappedBy="id", cascade={"remove", "persist"})
     */
    protected $Note;

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

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
