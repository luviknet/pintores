<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
 

/**
 * @ORM\Entity
 * @ORM\Table(name="contacto")
 */
class Contacto
{
        /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
  
      /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $telefono;

          /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $instagram;

              /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $twitter;

                  /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $facebook;

                  /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $email;
  
    
        public function getId()
    {
        return $this->id;
    }
  
   public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    public function getTwitter()
    {
        return $this->twitter;
    }    
  
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;
    }

    public function getInstagram()
    {
        return $this->instagram;
    }    

    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    public function getFacebook()
    {
        return $this->facebook;
    }    
  
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }     
}