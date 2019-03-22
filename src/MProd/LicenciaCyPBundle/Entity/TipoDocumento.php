<?php

namespace MProd\LicenciaCyPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TipoDocumento
 *
 * @ORM\Entity
 */
class TipoDocumento
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /*============================Variables ===============================*/

    /**
     *@var string
     *
     *@ORM\Column(name="tipo", type="string", length=100)
     */
    private $tipo;



    /*============================Setter y getters ===============================
     *
     */
    /**
     * Set tipo
     *
     * @param string $tipo
     * @return TipoDocumento
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /*============================Constructor   ===============================
     */

    public function __toString() {
        return $this->getTipo();

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
}
