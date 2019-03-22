<?php
namespace MProd\LicenciaCyPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Cuenta
 * @ORM\Entity
 * @ORM\Table(name="persona")
 * @ORM\HasLifecycleCallbacks()
 */
class Persona
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="nombre", type="string", length=50)
     * @Assert\NotBlank()
     * @Assert\Length(min = 3)
     * @Assert\Length( max = 150)
     * @Assert\NotNull()
     */
    private $nombre;

    /**
     * @var string
     * @ORM\Column(name="apellido", type="string", length=50)
     * @Assert\NotBlank()
     * @Assert\Length(min = 3)
     * @Assert\Length( max = 50)
     * @Assert\NotNull()
     */
    private $apellido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date")
     * @Assert\NotNull()
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string")
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string")
     */
    private $numero;

    /**
     * muchos Persona pueden tener una localidad
     * @ORM\ManyToOne(targetEntity="MProd\LicenciaCyPBundle\Entity\Localidad")
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad_otra_provincia", type="string")
     */
    private $localidadOtraProvincia;


   /**
     * 
     * @ORM\ManyToOne(targetEntity="MProd\LicenciaCyPBundle\Entity\TipoDocumento")
     */
    private $tipoDocumento;


    /**
     * @var string
     *
     * @ORM\Column(name="numero_documento", type="string", length=9, unique=true)
     * @Assert\NotBlank()
     * @Assert\Length(min = 8)
     * @Assert\Length( max = 8)
     * @Assert\NotNull()     
     */
    private $numeroDocumento;


    /**
     * @var String
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true,unique=true)
     * @Assert\Length(min = 1)
     *
     */
    private $sexo;

    /**
     * @var Boolean
     *
     * @ORM\Column(name="jubilado", type="boolean", nullable=false)     
     *
     */
    private $jubilado;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false, unique=false)
     * @Assert\NotNull()
     * @Assert\Email()
     */
    private $email;

    /**
     * One Persona has One Provincia.
     * @ORM\OneToOne(targetEntity="MProd\LicenciaCyPBundle\Entity\Provincia")
     * @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     */
    private $provincia;

    /**    
    * @ORM\OneToMany(targetEntity="MProd\LicenciaCyPBundle\Entity\Licencia", mappedBy="persona")
    */
    private $licencias;

    
     /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"comment"="Tabla persona"})
     */
    private $createdAt;

    public function __construct()
    {
        $this->licencias = new ArrayCollection();
    }



    /**
     * @return mixed
     */

    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * @param mixed $provincia
     */
    public function setProvincia(Provincia $provincia)
    {
        $this->provincia = $provincia;
    }


   
    /**
     *  Retorna el nombre y el apellido del Usuario
     *
     * @return string
     *
     */
    public function __toString() {
        return $this->id." ".$this->getNombre() . " " . $this->getApellido();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param DateTime $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * @param string $calle
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;
    }

    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * @param mixed $localidad
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;
    }

    /**
     * @return string
     */
    public function getLocalidadOtraProvincia()
    {
        return $this->localidadOtraProvincia;
    }

    /**
     * @param string $localidadOtraProvincia
     */
    public function setLocalidadOtraProvincia($localidadOtraProvincia)
    {
        $this->localidadOtraProvincia = $localidadOtraProvincia;
    }

    /**
     * @return string
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * @param string $numeroDocumento
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;
    }

    /**
     * @return String
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param String $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    

    /**
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

 /**
     * @return mixed
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * @param mixed $tipoDocumento
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;
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
     * Add licencias
     *
     * @param \MProd\LicenciaCyPBundle\Entity\Licencia $licencias
     * @return Persona
     */
    public function addLicencia(\MProd\LicenciaCyPBundle\Entity\Licencia $licencias)
    {
        $this->licencias[] = $licencias;

        return $this;
    }

    /**
     * Remove licencias
     *
     * @param \MProd\LicenciaCyPBundle\Entity\Licencia $licencias
     */
    public function removeLicencia(\MProd\LicenciaCyPBundle\Entity\Licencia $licencias)
    {
        $this->licencias->removeElement($licencias);
    }

    /**
     * Get licencias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLicencias()
    {
        return $this->licencias;
    }

    /**
     * Set jubilado
     *
     * @param boolean $jubilado
     * @return Persona
     */
    public function setJubilado($jubilado)
    {
        $this->jubilado = $jubilado;

        return $this;
    }

    /**
     * Get jubilado
     *
     * @return boolean 
     */
    public function getJubilado()
    {
        return $this->jubilado;
    }
}
