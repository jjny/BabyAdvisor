<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Commentaire")
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCommentaires;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $Texte;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateCom;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Signale;

    /**
     * Get idCommentaires
     *
     * @return integer
     */
    public function getIdCommentaires()
    {
        return $this->idCommentaires;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Commentaire
     */
    public function setTexte($texte)
    {
        $this->Texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->Texte;
    }

    /**
     * Set dateCom
     *
     * @param \DateTime $dateCom
     *
     * @return Commentaire
     */
    public function setDateCom($dateCom)
    {
        $this->DateCom = $dateCom;

        return $this;
    }

    /**
     * Get dateCom
     *
     * @return \DateTime
     */
    public function getDateCom()
    {
        return $this->DateCom;
    }

    /**
     * Set signale
     *
     * @param boolean $signale
     *
     * @return Commentaire
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
}
