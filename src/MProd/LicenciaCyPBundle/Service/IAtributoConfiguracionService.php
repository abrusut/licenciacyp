<?php
namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\AtributoConfiguracion;

interface IAtributoConfiguracionService{    

    /**
     * @param MProd\LicenciaCyPBundle\Entity\AtributoConfiguracion     
     * @return void
     */  
    public function save(AtributoConfiguracion $atributoConfiguracion);

    public function findById($id);

    public function getAtributoConfiguracion($clave);
}


?>