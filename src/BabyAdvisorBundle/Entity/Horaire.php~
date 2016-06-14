<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Horaire")
 */
class Horaire
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $Jour;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $HeureDeb;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $HeureFin;

    /**
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="idArticle", cascade={"remove"})
     * @ORM\JoinColumn(name="idArticle", referencedColumnName="id")
     */ 
    protected $Article;

    /**
     * Set jour
     *
     * @param string $jour
     *
     * @return Horaire
     */
    public function setJour($jour)
    {
        $this->Jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return string
     */
    public function getJour()
    {
        return $this->Jour;
    }

    /**
     * Set heureDeb
     *
     * @param \DateTime $heureDeb
     *
     * @return Horaire
     */
    public function setHeureDeb($heureDeb)
    {
        $this->HeureDeb = $heureDeb;

        return $this;
    }

    /**
     * Get heureDeb
     *
     * @return \DateTime
     */
    public function getHeureDeb()
    {
        return $this->HeureDeb;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     *
     * @return Horaire
     */
    public function setHeureFin($heureFin)
    {
        $this->HeureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime
     */
    public function getHeureFin()
    {
        return $this->HeureFin;
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
