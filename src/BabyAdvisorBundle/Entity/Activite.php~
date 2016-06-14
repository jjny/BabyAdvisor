<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Activite")
 */
class Activite
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $Libelle;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Tarif;

    /**
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="idArticle", cascade={"remove"})
     * @ORM\JoinColumn(name="idArticle", referencedColumnName="id")
     */ 
    protected $Article;

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Activite
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

    /**
     * Set tarif
     *
     * @param integer $tarif
     *
     * @return Activite
     */
    public function setTarif($tarif)
    {
        $this->Tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return integer
     */
    public function getTarif()
    {
        return $this->Tarif;
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
