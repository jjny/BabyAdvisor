<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Centre_interet")
 */
class Centre_interet
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCentreInteret;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $Libelle;

    /**
     * Get idCentreInteret
     *
     * @return integer
     */
    public function getIdCentreInteret()
    {
        return $this->idCentreInteret;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Centre_interet
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
}
