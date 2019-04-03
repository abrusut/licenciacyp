<?php

namespace MProd\LicenciaCyPBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\PrePersist;
/**
 * Comprobante
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Comprobante
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
   
    
    /**
     * @var float
     *
     * @ORM\Column(name="monto", type="float", nullable=false)
     * @Assert\Range(
     *              min = 0,
     *              minMessage = "El monto no pueden ser menor que cero"
     * )
     */
    private $monto;


    /**
     *@var string
     *
     *@ORM\Column(name="rendicion_numero", type="string", nullable=true)
     */
    private $rendicionNumero; 

     /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_pago", type="datetime", nullable=true)     
     */
    private $fechaPago;

     /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_vencimiento", type="datetime", nullable=true)
     * @Assert\NotNull()
     */
    private $fechaVencimiento;

     /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     * @Assert\NotNull()
     */
    private $createdAt;

    

   

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
     * Set monto
     *
     * @param float $monto
     * @return Comprobante
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return float 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set rendicionNumero
     *
     * @param string $rendicionNumero
     * @return Comprobante
     */
    public function setRendicionNumero($rendicionNumero)
    {
        $this->rendicionNumero = $rendicionNumero;

        return $this;
    }

    /**
     * Get rendicionNumero
     *
     * @return string 
     */
    public function getRendicionNumero()
    {
        return $this->rendicionNumero;
    }

    /**
     * Set fechaPago
     *
     * @param \DateTime $fechaPago
     * @return Comprobante
     */
    public function setFechaPago($fechaPago)
    {
        $this->fechaPago = $fechaPago;

        return $this;
    }

    /**
     * Get fechaPago
     *
     * @return \DateTime 
     */
    public function getFechaPago()
    {
        return $this->fechaPago;
    }

    /**
     * Set fechaVencimiento
     *
     * @param \DateTime $fechaVencimiento
     * @return Comprobante
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;

        return $this;
    }

    /**
     * Get fechaVencimiento
     *
     * @return \DateTime 
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }


    /**
     *
     * @return string
     *
     */
    public function __toString() {
        return " ".$this->getId() ;
    }

    /**
    * @ORM\PrePersist
    */
    public function setCreatedAtValue()
    {
        $this->createdAt = new \DateTime();
    }

    

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Comprobante
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
