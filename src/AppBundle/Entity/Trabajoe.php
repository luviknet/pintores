<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
 

/**
 * @ORM\Entity
 * @ORM\Table(name="trabajoe")
 */
class Trabajoe
{
        /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idtrabajo;
  
    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $email;
  
    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $tipo;
     
     /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $ambientes;
  
     /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $superficie;
  
     /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $nota;
  
       /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $estado;

        public function getId()
    {
        return $this->id;
    }
  
   public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }
  
     public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
  
       public function setAmbientes($ambientes)
    {
        $this->ambientes = $ambientes;
    }

    public function getAmbientes()
    {
        return $this->ambientes;
    }
  
   public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;
    }

    public function getSuperficie()
    {
        return $this->superficie;
    }
  
     public function setNota($nota)
    {
        $this->nota = $nota;
    }

    public function getNota()
    {
        return $this->nota;
    }
  
     public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getEstado()
    {
        return $this->estado;
    }
    
}