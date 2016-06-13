<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Categorie")
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCategorie;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $NomCat;

    /**
     * Get idCategorie
     *
     * @return integer
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set nomCat
     *
     * @param string $nomCat
     *
     * @return Categorie
     */
    public function setNomCat($nomCat)
    {
        $this->NomCat = $nomCat;

        return $this;
    }

    /**
     * Get nomCat
     *
     * @return string
     */
    public function getNomCat()
    {
        return $this->NomCat;
    }
}
