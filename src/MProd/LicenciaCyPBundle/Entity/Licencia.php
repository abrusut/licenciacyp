<?php

namespace MProd\LicenciaCyPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\PrePersist;
/**
 * Licencia
 *
 * @ORM\Entity(repositoryClass="MProd\LicenciaCyPBundle\Repository\LicenciaRepository")
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

    
     /**     
     * @var \MProd\LicenciaCyPBundle\Entity\Comprobante
     * @ORM\OneToOne(targetEntity="MProd\LicenciaCyPBundle\Entity\Comprobante",cascade={"persist"})
     * @ORM\JoinColumn(name="comprobante_id", referencedColumnName="id")
     */
    private $comprobante;

    public function __construct()
    {        
        $this->setFechaVencimiento(new \DateTime('last day of December this year'));        
        $this->setFechaEmitida(new \DateTime());        
    }

    public function __toString()
    {
        return 'Licencia Numero '.$this->getId();
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
     * Set persona
     *
     * @param \MProd\LicenciaCyPBundle\Entity\Persona $persona
     * @return Licencia
     */
    public function setPersona(Persona $persona)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
    * @ORM\PrePersist
    */
    public function setFechaEmitidaValue()
    {
        $this->fechaEmitida = new \DateTime();
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

    /**
     * Set comprobante
     *
     * @param \MProd\LicenciaCyPBundle\Entity\Comprobante $comprobante
     * @return Licencia
     */
    public function setComprobante(\MProd\LicenciaCyPBundle\Entity\Comprobante $comprobante = null)
    {
        $this->comprobante = $comprobante;

        return $this;
    }

    /**
     * Get comprobante
     *
     * @return \MProd\LicenciaCyPBundle\Entity\Comprobante 
     */
    public function getComprobante()
    {
        return $this->comprobante;
    }


    public function configurarVigencia(){
         // Vencimiento
         $fechaVencimiento = new \DateTime();
         $fechaVencimiento->add(new \DateInterval('P'.$this->tipoLicencia->getDiasVigencia().'D'));

         if($this->tipoLicencia->getDiasVigencia() == 365){
            $fechaVencimiento = new \DateTime('last day of December this year');
         }

        $this->setFechaVencimiento($fechaVencimiento);
    }
}
