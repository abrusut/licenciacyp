<?php

namespace MProd\LicenciaCyPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\PrePersist;
/**
 * Licencia
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Licencia
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
   
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_emitida", type="datetime")
     * @Assert\NotNull()
     */
    private $fechaEmitida;

     /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_desde", type="datetime")
     * @Assert\NotNull()
     */
    private $fechaDesde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_vencimiento", type="datetime")
     * @Assert\NotNull()
     */
    private $fechaVencimiento;


    /**
     *@var string
     *
     *@ORM\Column(name="comprobante", type="string")
     */
    private $comprobante;

    /**
     * @var \MProd\LicenciaCyPBundle\Entity\TipoLicencia     
     * @ORM\ManyToOne(targetEntity="MProd\LicenciaCyPBundle\Entity\TipoLicencia")
     */
    private $tipoLicencia;

    /**
     * @var \MProd\LicenciaCyPBundle\Entity\Persona
     *
     * @ORM\ManyToOne(targetEntity="MProd\LicenciaCyPBundle\Entity\Persona", 
     *                  inversedBy="licencias",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     * })
     */
    private $persona;

    
    public function __construct()
    {        
        $this->setFechaVencimiento(new \DateTime('last day of December this year'));        
        $this->setFechaEmitida(new \DateTime());        
    }

    public function __toString()
    {
        return $this->getId(). ' '. $this->getComprobante();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



    /**
     * @return \DateTime
     */
    public function getFechaEmitida()
    {
        return $this->fechaEmitida;
    }

    /**
     * @param \DateTime $fechaEmitida
     */
    public function setFechaEmitida($fechaEmitida)
    {
        $this->fechaEmitida = $fechaEmitida;
    }

    /**
     * @return \DateTime
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * @param \DateTime $fechaVencimiento
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;
    }

    /**
     * @return string
     */
    public function getComprobante()
    {
        return $this->comprobante;
    }

    /**
     * @param string $comprobante
     */
    public function setComprobante($comprobante)
    {
        $this->comprobante = $comprobante;
    }

    /**
     * @return mixed
     */
    public function getTipoLicencia()
    {
        return $this->tipoLicencia;
    }

    /**
     * @param mixed $tipoLicencia
     */
    public function setTipoLicencia(TipoLicencia $tipoLicencia)
    {
        $this->tipoLicencia = $tipoLicencia;
    }

    /**
     * @return mixed
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * @param mixed $persona
     */
    public function setPersona(Persona $persona)
    {
        $this->persona = $persona;
    }

    /**
    * @ORM\PrePersist
    */
    public function setFechaEmitidaValue()
    {
        $this->fechaEmitida = new \DateTime();
    }

    /**
    * @ORM\PrePersist
    */
    public function setComprobanteValue()
    {
        $this->comprobante = $this->getTipoLicencia()->getId().'-'.$this->getPersona()->getTipoDocumento()->getId().'-'.$this->getPersona()->getNumeroDocumento().'-'.$this->getPersona()->getSexo();
    }

    /**
     * Set fechaDesde
     *
     * @param \DateTime $fechaDesde
     * @return Licencia
     */
    public function setFechaDesde($fechaDesde)
    {
        $this->fechaDesde = $fechaDesde;

        return $this;
    }

    /**
     * Get fechaDesde
     *
     * @return \DateTime 
     */
    public function getFechaDesde()
    {
        return $this->fechaDesde;
    }
}
