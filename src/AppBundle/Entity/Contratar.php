<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
 

/**
 * @ORM\Entity
 * @ORM\Table(name="contratar")
 */
class Contratar
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
    private $icono;
  
    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $texto;
    
        public function getId()
    {
        return $this->id;
    }
  
   public function setIcono($icono)
    {
        $this->icono = $icono;
    }

    public function getIcono()
    {
        return $this->icono;
    }
  
     public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    public function getTexto()
    {
        return $this->texto;
    }
  
}