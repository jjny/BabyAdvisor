<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="Commentaire")
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="Commentaires")
     */ 
    protected $User;

    /**
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="Commentaires")
     */ 
    protected $Article;

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
     * Set user
     *
     * @param \BabyAdvisorBundle\Entity\User $user
     *
     * @return Commentaire
     */
    public function setUser(\BabyAdvisorBundle\Entity\User $user = null)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BabyAdvisorBundle\Entity\User
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * Set article
     *
     * @param \BabyAdvisorBundle\Entity\Article $article
     *
     * @return Commentaire
     */
    public function setArticle(\BabyAdvisorBundle\Entity\Article $article = null)
    {
        $this->Article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \BabyAdvisorBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->Article;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamps()
    {
        if($this->getDateCom() == null)
        {
            $this->setDateCom(new \DateTime(date('Y-m-d H:i:s')));
        }
    }
}
