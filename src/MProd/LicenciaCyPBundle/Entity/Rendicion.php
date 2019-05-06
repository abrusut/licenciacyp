<?php

namespace MProd\LicenciaCyPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\PrePersist;
/**
 * Rendicion
 *
 * @ORM\Entity(repositoryClass="MProd\LicenciaCyPBundle\Repository\RendicionRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Rendicion
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
      
    /**
     * @var string
     *
     * @ORM\Column(name="numero_rendicion", type="string", nullable=false)
     * @Assert\NotNull()
     */
    private $numeroRendicion;

     /**
     * @var string
     *
     * @ORM\Column(name="nis", type="string", nullable=true)      
     */
    private $nis;

    /**
     * Many rendiciones tienen 1 liquidacion
     * @ORM\ManyToOne(targetEntity="MProd\LicenciaCyPBundle\Entity\Liquidacion", inversedBy="rendiciones")
     * @ORM\JoinColumn(name="liquidacion_id", referencedColumnName="id")
     */
    private $liquidacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_cobro", type="datetime",nullable=false)
     * @Assert\NotNull()
     */
    private $fechaCobro;

     /**
     * @var string
     *
     * @ORM\Column(name="codigo_barra_cliente", type="string", nullable=false)
     * @Assert\NotNull()
     */
    private $codigoBarraCliente;
   

    /**
     * @var float
     *
     * @ORM\Column(name="importe_cobrado", type="float", nullable=false)
     * @Assert\NotNull()
     * )
     */
    private $importeCobrado;


     /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_lectura_archivo", type="datetime",nullable=true)     
     */
    private $fechaLecturaArchivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion_archivo", type="datetime",nullable=true)     
     */
    private $fechaCreacionArchivo;

     /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"comment"="Tabla liquidacion"})
     * @Assert\NotNull()
     */
    private $createdAt;
   

     /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)     
     */
    private $updatedAt;

     /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_baja", type="datetime", nullable=true)     
     */
    private $fechaBaja;


    public function __construct()
    {       
    }


     /**
    * @ORM\PrePersist
    */
    public function setCreatedAtValue()
    {
        $this->createdAt = new \DateTime();
    }

     /** @ORM\PreUpdate */
     public function setUpdatedAtValue()
     {
         $this->updatedAt = new \DateTime();
     }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Persona
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
     * Set numeroRendicion
     *
     * @param string $numeroRendicion
     * @return Rendicion
     */
    public function setNumeroRendicion($numeroRendicion)
    {
        $this->numeroRendicion = $numeroRendicion;

        return $this;
    }

    /**
     * Get numeroRendicion
     *
     * @return string 
     */
    public function getNumeroRendicion()
    {
        return $this->numeroRendicion;
    }

    /**
     * Set nis
     *
     * @param string $nis
     * @return Rendicion
     */
    public function setNis($nis)
    {
        $this->nis = $nis;

        return $this;
    }

    /**
     * Get nis
     *
     * @return string 
     */
    public function getNis()
    {
        return $this->nis;
    }

    /**
     * Set fechaCobro
     *
     * @param \DateTime $fechaCobro
     * @return Rendicion
     */
    public function setFechaCobro($fechaCobro)
    {
        $this->fechaCobro = $fechaCobro;

        return $this;
    }

    /**
     * Get fechaCobro
     *
     * @return \DateTime 
     */
    public function getFechaCobro()
    {
        return $this->fechaCobro;
    }

    /**
     * Set codigoBarraCliente
     *
     * @param string $codigoBarraCliente
     * @return Rendicion
     */
    public function setCodigoBarraCliente($codigoBarraCliente)
    {
        $this->codigoBarraCliente = $codigoBarraCliente;

        return $this;
    }

    /**
     * Get codigoBarraCliente
     *
     * @return string 
     */
    public function getCodigoBarraCliente()
    {
        return $this->codigoBarraCliente;
    }

    /**
     * Set importeCobrado
     *
     * @param float $importeCobrado
     * @return Rendicion
     */
    public function setImporteCobrado($importeCobrado)
    {
        $this->importeCobrado = $importeCobrado;

        return $this;
    }

    /**
     * Get importeCobrado
     *
     * @return float 
     */
    public function getImporteCobrado()
    {
        return $this->importeCobrado;
    }

    /**
     * Set fechaLecturaArchivo
     *
     * @param \DateTime $fechaLecturaArchivo
     * @return Rendicion
     */
    public function setFechaLecturaArchivo($fechaLecturaArchivo)
    {
        $this->fechaLecturaArchivo = $fechaLecturaArchivo;

        return $this;
    }

    /**
     * Get fechaLecturaArchivo
     *
     * @return \DateTime 
     */
    public function getFechaLecturaArchivo()
    {
        return $this->fechaLecturaArchivo;
    }

    /**
     * Set fechaCreacionArchivo
     *
     * @param \DateTime $fechaCreacionArchivo
     * @return Rendicion
     */
    public function setFechaCreacionArchivo($fechaCreacionArchivo)
    {
        $this->fechaCreacionArchivo = $fechaCreacionArchivo;

        return $this;
    }

    /**
     * Get fechaCreacionArchivo
     *
     * @return \DateTime 
     */
    public function getFechaCreacionArchivo()
    {
        return $this->fechaCreacionArchivo;
    }

    /**
     * Set liquidacion
     *
     * @param \MProd\LicenciaCyPBundle\Entity\Liquidacion $liquidacion
     * @return Rendicion
     */
    public function setLiquidacion(\MProd\LicenciaCyPBundle\Entity\Liquidacion $liquidacion = null)
    {
        $this->liquidacion = $liquidacion;

        return $this;
    }

    /**
     * Get liquidacion
     *
     * @return \MProd\LicenciaCyPBundle\Entity\Liquidacion 
     */
    public function getLiquidacion()
    {
        return $this->liquidacion;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Rendicion
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     * @return Rendicion
     */
    public function setFechaBaja($fechaBaja)
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime 
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }
}
