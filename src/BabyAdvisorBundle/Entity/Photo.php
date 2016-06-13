<?php
namespace BabyAdvisorBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Photo")
 */
class Photo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPhoto;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $NomPhoto;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $Photocol;

    /**
     * Get idPhoto
     *
     * @return integer
     */
    public function getIdPhoto()
    {
        return $this->idPhoto;
    }

    /**
     * Set nomPhoto
     *
     * @param string $nomPhoto
     *
     * @return Photo
     */
    public function setNomPhoto($nomPhoto)
    {
        $this->NomPhoto = $nomPhoto;

        return $this;
    }

    /**
     * Get nomPhoto
     *
     * @return string
     */
    public function getNomPhoto()
    {
        return $this->NomPhoto;
    }

    /**
     * Set photocol
     *
     * @param string $photocol
     *
     * @return Photo
     */
    public function setPhotocol($photocol)
    {
        $this->Photocol = $photocol;

        return $this;
    }

    /**
     * Get photocol
     *
     * @return string
     */
    public function getPhotocol()
    {
        return $this->Photocol;
    }
}
