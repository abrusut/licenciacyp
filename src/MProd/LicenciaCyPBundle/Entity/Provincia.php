<?php

namespace MProd\LicenciaCyPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Provincia
 * @ORM\Entity(repositoryClass="MProd\LicenciaCyPBundle\Repository\ProvinciaRepository")
 * @ORM\Table(name="provincia")
 * @ORM\HasLifecycleCallbacks()
 */
class Provincia
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \MProd\LicenciaCyPBundle\Entity\Localidad
     *     
     * @ORM\OneToMany(targetEntity="MProd\LicenciaCyPBundle\Entity\Localidad", mappedBy="provincia")
     */
    private $localidades;

    /**
     *@var string
     *
     *@ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;



    function __construct()
    {
        $this->localidades = new ArrayCollection();
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
     *  Retorna el nombre de la provincia
     *
     * @return string
     *
     */
    public function __toString() {
        return $this->getNombre();
    }




    /**
     * Add localidades
     *
     * @param \MProd\LicenciaCyPBundle\Entity\Localidad $localidades
     * @return Provincia
     */
    public function addLocalidade(\MProd\LicenciaCyPBundle\Entity\Localidad $localidades)
    {
        $this->localidades[] = $localidades;

        return $this;
    }

    /**
     * Remove localidades
     *
     * @param \MProd\LicenciaCyPBundle\Entity\Localidad $localidades
     */
    public function removeLocalidade(\MProd\LicenciaCyPBundle\Entity\Localidad $localidades)
    {
        $this->localidades->removeElement($localidades);
    }

    /**
     * Get localidades
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLocalidades()
    {
        return $this->localidades;
    }

    public function isSantaFe(){
        return $this->nombre === 'Santa Fe' ? true : false;
    }

    public function copyValues($objectForCopy)
    {           
        $vars=is_object($objectForCopy)?get_object_vars($objectForCopy):$objectForCopy;
        if(!is_array($vars)) throw Exception('Sin propiedades para el objeto Provincia!');
        foreach ($vars as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }
}
