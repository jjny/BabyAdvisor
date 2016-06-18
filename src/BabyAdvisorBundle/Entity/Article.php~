<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="BabyAdvisorBundle\Repository\ArticleRepository")
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
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $CP;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $Ville;

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
    private $TranchesAge;

    /**
     * @ORM\ManyToMany(targetEntity="Categorie", inversedBy="Articles")
     * @ORM\JoinTable(name="article_categorie")
     */
    protected $Categories;

    /**
     * @ORM\OneToMany(targetEntity="Horaire", mappedBy="Article", cascade={"remove", "persist"})
     */
    protected $Horaires;

    /**
     * @ORM\OneToMany(targetEntity="Activite", mappedBy="Article", cascade={"remove", "persist"})
     */
    protected $Activites;

    /**
     * @ORM\OneToMany(targetEntity="Photo", mappedBy="Article", cascade={"remove", "persist"})
     */
    protected $Photos;

    /**
     * @ORM\OneToMany(targetEntity="Note", mappedBy="Article", cascade={"remove", "persist"})
     */
    protected $Notes;

    /**
     * @ORM\OneToMany(targetEntity="Notation", mappedBy="Article", cascade={"remove", "persist"})
     */
    protected $Notations;

    /**
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="Article", cascade={"remove", "persist"})
     */
    protected $Commentaires;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="Articles", cascade={"remove"})
     */ 
    protected $User;

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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->TranchesAge = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Horaires = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Activites = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Photos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Notes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Notations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Commentaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tranchesAge
     *
     * @param \BabyAdvisorBundle\Entity\Tranche_age $tranchesAge
     *
     * @return Article
     */
    public function addTranchesAge(\BabyAdvisorBundle\Entity\Tranche_age $tranchesAge)
    {
        $this->TranchesAge[] = $tranchesAge;

        return $this;
    }

    /**
     * Remove tranchesAge
     *
     * @param \BabyAdvisorBundle\Entity\Tranche_age $tranchesAge
     */
    public function removeTranchesAge(\BabyAdvisorBundle\Entity\Tranche_age $tranchesAge)
    {
        $this->TranchesAge->removeElement($tranchesAge);
    }

    /**
     * Get tranchesAge
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTranchesAge()
    {
        return $this->TranchesAge;
    }

    /**
     * Add category
     *
     * @param \BabyAdvisorBundle\Entity\Categorie $category
     *
     * @return Article
     */
    public function addCategory(\BabyAdvisorBundle\Entity\Categorie $category)
    {
        $this->Categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \BabyAdvisorBundle\Entity\Categorie $category
     */
    public function removeCategory(\BabyAdvisorBundle\Entity\Categorie $category)
    {
        $this->Categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->Categories;
    }

    /**
     * Add horaire
     *
     * @param \BabyAdvisorBundle\Entity\Horaire $horaire
     *
     * @return Article
     */
    public function addHoraire(\BabyAdvisorBundle\Entity\Horaire $horaire)
    {
        $this->Horaires[] = $horaire;

        return $this;
    }

    /**
     * Remove horaire
     *
     * @param \BabyAdvisorBundle\Entity\Horaire $horaire
     */
    public function removeHoraire(\BabyAdvisorBundle\Entity\Horaire $horaire)
    {
        $this->Horaires->removeElement($horaire);
    }

    /**
     * Get horaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHoraires()
    {
        return $this->Horaires;
    }

    /**
     * Add activite
     *
     * @param \BabyAdvisorBundle\Entity\Activite $activite
     *
     * @return Article
     */
    public function addActivite(\BabyAdvisorBundle\Entity\Activite $activite)
    {
        $this->Activites[] = $activite;

        return $this;
    }

    /**
     * Remove activite
     *
     * @param \BabyAdvisorBundle\Entity\Activite $activite
     */
    public function removeActivite(\BabyAdvisorBundle\Entity\Activite $activite)
    {
        $this->Activites->removeElement($activite);
    }

    /**
     * Get activites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivites()
    {
        return $this->Activites;
    }

    /**
     * Add photo
     *
     * @param \BabyAdvisorBundle\Entity\Photo $photo
     *
     * @return Article
     */
    public function addPhoto(\BabyAdvisorBundle\Entity\Photo $photo)
    {
        $this->Photos[] = $photo;

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \BabyAdvisorBundle\Entity\Photo $photo
     */
    public function removePhoto(\BabyAdvisorBundle\Entity\Photo $photo)
    {
        $this->Photos->removeElement($photo);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhotos()
    {
        return $this->Photos;
    }

    /**
     * Add note
     *
     * @param \BabyAdvisorBundle\Entity\Note $note
     *
     * @return Article
     */
    public function addNote(\BabyAdvisorBundle\Entity\Note $note)
    {
        $this->Notes[] = $note;

        return $this;
    }

    /**
     * Remove note
     *
     * @param \BabyAdvisorBundle\Entity\Note $note
     */
    public function removeNote(\BabyAdvisorBundle\Entity\Note $note)
    {
        $this->Notes->removeElement($note);
    }

    /**
     * Get notes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * Add notation
     *
     * @param \BabyAdvisorBundle\Entity\Notation $notation
     *
     * @return Article
     */
    public function addNotation(\BabyAdvisorBundle\Entity\Notation $notation)
    {
        $this->Notations[] = $notation;

        return $this;
    }

    /**
     * Remove notation
     *
     * @param \BabyAdvisorBundle\Entity\Notation $notation
     */
    public function removeNotation(\BabyAdvisorBundle\Entity\Notation $notation)
    {
        $this->Notations->removeElement($notation);
    }

    /**
     * Get notations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotations()
    {
        return $this->Notations;
    }

    /**
     * Add commentaire
     *
     * @param \BabyAdvisorBundle\Entity\Commentaire $commentaire
     *
     * @return Article
     */
    public function addCommentaire(\BabyAdvisorBundle\Entity\Commentaire $commentaire)
    {
        $this->Commentaires[] = $commentaire;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \BabyAdvisorBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\BabyAdvisorBundle\Entity\Commentaire $commentaire)
    {
        $this->Commentaires->removeElement($commentaire);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->Commentaires;
    }

    /**
     * Set user
     *
     * @param \BabyAdvisorBundle\Entity\User $user
     *
     * @return Article
     */
    public function setUser(\BabyAdvisorBundle\Entity\User $user = null)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BabyAdvisorBundle\Entity\User
     */
    public function getUser()
    {
        return $this->User;
    }
}
