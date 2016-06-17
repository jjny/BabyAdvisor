<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="BabyAdvisorBundle\Repository\Centre_interetRepository")
 * @ORM\Table(name="Centre_interet")
 */
class Centre_interet
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
    private $Libelle;

     /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="CentreInterets")
     */
    private $Users;

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
     * Constructor
     */
    public function __construct()
    {
        $this->Users = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Add user
     *
     * @param \BabyAdvisorBundle\Entity\User $user
     *
     * @return Centre_interet
     */
    public function addUser(\BabyAdvisorBundle\Entity\User $user)
    {
        $this->Users->add($user);

        return $this;
    }

    /**
     * Remove user
     *
     * @param \BabyAdvisorBundle\Entity\User $user
     */
    public function removeUser(\BabyAdvisorBundle\Entity\User $user)
    {
        $this->Users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->Users;
    }

}
