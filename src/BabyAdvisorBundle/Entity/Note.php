<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Note")
 */
class Note
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idNote;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $MoyGen;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $MoyPropre;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $MoyAcce;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $MoyEncad;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $MoyEquip;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $MoyAmbiance;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NbCom;

    /**
     * Get idNote
     *
     * @return integer
     */
    public function getIdNote()
    {
        return $this->idNote;
    }

    /**
     * Set moyGen
     *
     * @param integer $moyGen
     *
     * @return Note
     */
    public function setMoyGen($moyGen)
    {
        $this->MoyGen = $moyGen;

        return $this;
    }

    /**
     * Get moyGen
     *
     * @return integer
     */
    public function getMoyGen()
    {
        return $this->MoyGen;
    }

    /**
     * Set moyPropre
     *
     * @param integer $moyPropre
     *
     * @return Note
     */
    public function setMoyPropre($moyPropre)
    {
        $this->MoyPropre = $moyPropre;

        return $this;
    }

    /**
     * Get moyPropre
     *
     * @return integer
     */
    public function getMoyPropre()
    {
        return $this->MoyPropre;
    }

    /**
     * Set moyAcce
     *
     * @param integer $moyAcce
     *
     * @return Note
     */
    public function setMoyAcce($moyAcce)
    {
        $this->MoyAcce = $moyAcce;

        return $this;
    }

    /**
     * Get moyAcce
     *
     * @return integer
     */
    public function getMoyAcce()
    {
        return $this->MoyAcce;
    }

    /**
     * Set moyEncad
     *
     * @param integer $moyEncad
     *
     * @return Note
     */
    public function setMoyEncad($moyEncad)
    {
        $this->MoyEncad = $moyEncad;

        return $this;
    }

    /**
     * Get moyEncad
     *
     * @return integer
     */
    public function getMoyEncad()
    {
        return $this->MoyEncad;
    }

    /**
     * Set moyEquip
     *
     * @param integer $moyEquip
     *
     * @return Note
     */
    public function setMoyEquip($moyEquip)
    {
        $this->MoyEquip = $moyEquip;

        return $this;
    }

    /**
     * Get moyEquip
     *
     * @return integer
     */
    public function getMoyEquip()
    {
        return $this->MoyEquip;
    }

    /**
     * Set moyAmbiance
     *
     * @param integer $moyAmbiance
     *
     * @return Note
     */
    public function setMoyAmbiance($moyAmbiance)
    {
        $this->MoyAmbiance = $moyAmbiance;

        return $this;
    }

    /**
     * Get moyAmbiance
     *
     * @return integer
     */
    public function getMoyAmbiance()
    {
        return $this->MoyAmbiance;
    }

    /**
     * Set nbCom
     *
     * @param integer $nbCom
     *
     * @return Note
     */
    public function setNbCom($nbCom)
    {
        $this->NbCom = $nbCom;

        return $this;
    }

    /**
     * Get nbCom
     *
     * @return integer
     */
    public function getNbCom()
    {
        return $this->NbCom;
    }
}
