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
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $CodePostal;

    /**
     * @ORM\OneToMany(targetEntity="Enfant", mappedBy="id", cascade={"remove", "persist"})
     */
    protected $Enfants;

    /**
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="id", cascade={"remove", "persist"})
     */
    protected $Commentaires;

    /**
     * @ORM\OneToMany(targetEntity="Notation", mappedBy="id", cascade={"remove", "persist"})
     */
    protected $Notations;

    /**
     * @ORM\OneToMany(targetEntity="Article", mappedBy="id", cascade={"remove", "persist"})
     */
    protected $Articles;

    /**
     * @ORM\ManyToMany(targetEntity="Centre_interet")
     * @ORM\JoinTable(name="users_interet",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="interet_id", referencedColumnName="id")}
     *      )
     */
    protected $CentreInterets;

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
        $this->CentreInteret = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add centreInteret
     *
     * @param \BabyAdvisorBundle\Entity\Centre_interet $centreInteret
     *
     * @return User
     */
    public function addCentreInteret(\BabyAdvisorBundle\Entity\Centre_interet $centreInteret)
    {
        $this->CentreInteret[] = $centreInteret;

        return $this;
    }

    /**
     * Remove centreInteret
     *
     * @param \BabyAdvisorBundle\Entity\Centre_interet $centreInteret
     */
    public function removeCentreInteret(\BabyAdvisorBundle\Entity\Centre_interet $centreInteret)
    {
        $this->CentreInteret->removeElement($centreInteret);
    }

    /**
     * Get centreInteret
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCentreInteret()
    {
        return $this->CentreInteret;
    }
}
