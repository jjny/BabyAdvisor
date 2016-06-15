<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Enfant")
 */
class Enfant
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
    private $AgeEnfant;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateNaiss;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="Enfants", cascade={"remove"})
     */ 
    protected $Parent;

    /**
     * Set ageEnfant
     *
     * @param string $ageEnfant
     *
     * @return Enfant
     */
    public function setAgeEnfant($ageEnfant)
    {
        $this->AgeEnfant = $ageEnfant;

        return $this;
    }

    /**
     * Get ageEnfant
     *
     * @return string
     */
    public function getAgeEnfant()
    {
        return $this->AgeEnfant;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     *
     * @return Enfant
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->DateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime
     */
    public function getDateNaiss()
    {
        return $this->DateNaiss;
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
     * Set parent
     *
     * @param \BabyAdvisorBundle\Entity\User $parent
     *
     * @return Enfant
     */
    public function setParent(\BabyAdvisorBundle\Entity\User $parent = null)
    {
        $this->Parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \BabyAdvisorBundle\Entity\User
     */
    public function getParent()
    {
        return $this->Parent;
    }
}
