<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $Pseudo;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $AdresseMail;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $Password;

    /**
     * @ORM\Column(type="string", length=70, nullable=true)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=70, nullable=true)
     */
    private $Prenom;

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
     *@ORM\Column(type="string", length=12) 
     */
    private $Role;

    /**
     * @ORM\OneToMany(targetEntity="Enfant", mappedBy="Parent", cascade={"remove", "persist"})
     */
    protected $Enfants;

    /**
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="User", cascade={"remove", "persist"})
     */
    protected $Commentaires;

    /**
     * @ORM\OneToMany(targetEntity="Notation", mappedBy="User", cascade={"remove", "persist"})
     */
    protected $Notations;

    /**
     * @ORM\OneToMany(targetEntity="Article", mappedBy="User", cascade={"remove", "persist"})
     */
    protected $Articles;

    /**
     * @ORM\ManyToMany(targetEntity="Centre_interet", inversedBy="Users")
     * @ORM\JoinTable(name="users_interet",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="interet_id", referencedColumnName="id")}
     *      )
     */
    protected $CentreInterets;

    /**
     * @ORM\OneToMany(targetEntity="EstSignale", mappedBy="User", cascade={"remove", "persist"})
     */
    protected $Signale;

    /**
     * @ORM\ManyToMany(targetEntity="Tranche_age", inversedBy="Users")
     * @ORM\JoinTable(name="user_age")
     */
    private $TranchesAge;

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->Pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->Pseudo;
    }

    /**
     * Set adresseMail
     *
     * @param string $adresseMail
     *
     * @return User
     */
    public function setAdresseMail($adresseMail)
    {
        $this->AdresseMail = $adresseMail;

        return $this;
    }

    /**
     * Get adresseMail
     *
     * @return string
     */
    public function getAdresseMail()
    {
        return $this->AdresseMail;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->Password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->Nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->Prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return User
     */
    public function setCodePostal($codePostal)
    {
        $this->CodePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->CodePostal;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Enfant = new \Doctrine\Common\Collections\ArrayCollection();
        $this->CentreInterets = new \Doctrine\Common\Collections\ArrayCollection();
        $this->TranchesAge = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add enfant
     *
     * @param \BabyAdvisorBundle\Entity\Enfant $enfant
     *
     * @return User
     */
    public function addEnfant(\BabyAdvisorBundle\Entity\Enfant $enfant)
    {
        $this->Enfant[] = $enfant;

        return $this;
    }

    /**
     * Remove enfant
     *
     * @param \BabyAdvisorBundle\Entity\Enfant $enfant
     */
    public function removeEnfant(\BabyAdvisorBundle\Entity\Enfant $enfant)
    {
        $this->Enfant->removeElement($enfant);
    }

    /**
     * Get enfant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnfant()
    {
        return $this->Enfant;
    }

    /**
     * Add centreInterets
     *
     * @param \BabyAdvisorBundle\Entity\Centre_interet $centreInteret
     *
     * @return User
     */
    public function addCentreInterets(\BabyAdvisorBundle\Entity\Centre_interet $centreInteret)
    {
        $this->CentreInterets->add($centreInteret);

        return $this;
    }

    /**
     * Remove centreInterets
     *
     * @param \BabyAdvisorBundle\Entity\Centre_interet $centreInteret
     */
    public function removeCentreInterets(\BabyAdvisorBundle\Entity\Centre_interet $centreInteret)
    {
        $this->CentreInterets->removeElement($centreInteret);
    }


    /**
     * Get centreInterets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCentreInterets()
    {
        return $this->CentreInterets;
    }

    /**
     * Get enfants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnfants()
    {
        return $this->Enfants;
    }

    /**
     * Add commentaire
     *
     * @param \BabyAdvisorBundle\Entity\Commentaire $commentaire
     *
     * @return User
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
     * Add notation
     *
     * @param \BabyAdvisorBundle\Entity\Notation $notation
     *
     * @return User
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
     * Add article
     *
     * @param \BabyAdvisorBundle\Entity\Article $article
     *
     * @return User
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

    

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->Role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * Add signale
     *
     * @param \BabyAdvisorBundle\Entity\EstSignale $signale
     *
     * @return User
     */
    public function addSignale(\BabyAdvisorBundle\Entity\EstSignale $signale)
    {
        $this->Signale[] = $signale;

        return $this;
    }

    /**
     * Remove signale
     *
     * @param \BabyAdvisorBundle\Entity\EstSignale $signale
     */
    public function removeSignale(\BabyAdvisorBundle\Entity\EstSignale $signale)
    {
        $this->Signale->removeElement($signale);
    }

    /**
     * Get signale
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSignale()
    {
        return $this->Signale;
    }

    /**
     * Add tranchesAge
     *
     * @param \BabyAdvisorBundle\Entity\Tranche_age $tranchesAge
     *
     */
    public function addTranchesAge(\BabyAdvisorBundle\Entity\Tranche_age $tranchesAge)
    {
        $this->TranchesAge->add($tranchesAge);
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
     * Add centreInteret
     *
     * @param \BabyAdvisorBundle\Entity\Centre_interet $centreInteret
     *
     * @return User
     */
    public function addCentreInteret(\BabyAdvisorBundle\Entity\Centre_interet $centreInteret)
    {
        $this->CentreInterets[] = $centreInteret;
    
        return $this;
    }

    /**
     * Remove centreInteret
     *
     * @param \BabyAdvisorBundle\Entity\Centre_interet $centreInteret
     */
    public function removeCentreInteret(\BabyAdvisorBundle\Entity\Centre_interet $centreInteret)
    {
        $this->CentreInterets->removeElement($centreInteret);
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
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
     * Set cP
     *
     * @param string $cP
     *
     * @return User
     */
    public function setCP($cP)
    {
        $this->CP = $cP;
        return $this;
    }

    /**
     * Get cP
     *
     * @return string
     */
    public function getCP()
    {
        return $this->CP;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return User
     */
    public function setVille($ville)
    {
        $this->Ville = $ville;
        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->Ville;
    }
}
