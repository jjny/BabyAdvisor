<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="EstSignale")
 */
class EstSignale
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $ObjectName;

    /**
     * @ORM\Column(type="integer")
     */
    private $IdObject;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="Signale", cascade={"remove"})
     */ 
    protected $User;

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
     * Set objectName
     *
     * @param string $objectName
     *
     * @return EstSignale
     */
    public function setObjectName($objectName)
    {
        $this->ObjectName = $objectName;

        return $this;
    }

    /**
     * Get objectName
     *
     * @return string
     */
    public function getObjectName()
    {
        return $this->ObjectName;
    }

    /**
     * Set idObject
     *
     * @param integer $idObject
     *
     * @return EstSignale
     */
    public function setIdObject($idObject)
    {
        $this->IdObject = $idObject;

        return $this;
    }

    /**
     * Get idObject
     *
     * @return integer
     */
    public function getIdObject()
    {
        return $this->IdObject;
    }

    /**
     * Set user
     *
     * @param \BabyAdvisorBundle\Entity\User $user
     *
     * @return EstSignale
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
}
