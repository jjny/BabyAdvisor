<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Notation")
 */
class Notation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idNotation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Proprete;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Accessibilite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Encadrement;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Ambiance;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Equipement;

    /**
     * Get idNotation
     *
     * @return integer
     */
    public function getIdNotation()
    {
        return $this->idNotation;
    }

    /**
     * Set proprete
     *
     * @param integer $proprete
     *
     * @return Notation
     */
    public function setProprete($proprete)
    {
        $this->Proprete = $proprete;

        return $this;
    }

    /**
     * Get proprete
     *
     * @return integer
     */
    public function getProprete()
    {
        return $this->Proprete;
    }

    /**
     * Set accessibilite
     *
     * @param integer $accessibilite
     *
     * @return Notation
     */
    public function setAccessibilite($accessibilite)
    {
        $this->Accessibilite = $accessibilite;

        return $this;
    }

    /**
     * Get accessibilite
     *
     * @return integer
     */
    public function getAccessibilite()
    {
        return $this->Accessibilite;
    }

    /**
     * Set encadrement
     *
     * @param integer $encadrement
     *
     * @return Notation
     */
    public function setEncadrement($encadrement)
    {
        $this->Encadrement = $encadrement;

        return $this;
    }

    /**
     * Get encadrement
     *
     * @return integer
     */
    public function getEncadrement()
    {
        return $this->Encadrement;
    }

    /**
     * Set ambiance
     *
     * @param integer $ambiance
     *
     * @return Notation
     */
    public function setAmbiance($ambiance)
    {
        $this->Ambiance = $ambiance;

        return $this;
    }

    /**
     * Get ambiance
     *
     * @return integer
     */
    public function getAmbiance()
    {
        return $this->Ambiance;
    }

    /**
     * Set equipement
     *
     * @param integer $equipement
     *
     * @return Notation
     */
    public function setEquipement($equipement)
    {
        $this->Equipement = $equipement;

        return $this;
    }

    /**
     * Get equipement
     *
     * @return integer
     */
    public function getEquipement()
    {
        return $this->Equipement;
    }
}
