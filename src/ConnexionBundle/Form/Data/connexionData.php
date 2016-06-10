<?php
/**
 * Created by PhpStorm.
 * User: fr120940
 * Date: 24/05/2016
 * Time: 13:41
 */

namespace ConnexionBundle\Form\Data;

use Symfony\Component\Validator\Constraints as Assert;

class connexionData {

    protected $name;

    protected $premon;

    protected $pseudo;

    protected $email;

    protected $motDePasse;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPremon()
    {
        return $this->premon;
    }

    /**
     * @param mixed $premon
     */
    public function setPremon($premon)
    {
        $this->premon = $premon;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $fonction
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }


    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

}