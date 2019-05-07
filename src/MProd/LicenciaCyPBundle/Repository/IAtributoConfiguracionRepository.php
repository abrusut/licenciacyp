<?php
namespace MProd\LicenciaCyPBundle\Repository;

use MProd\LicenciaCyPBundle\Entity\AtributoConfiguracion;

interface IAtributoConfiguracionRepository{

    /**
     * @param MProd\LicenciaCyPBundle\Entity\AtributoConfiguracion     
     * @return void
     */  
    public function save(AtributoConfiguracion $atributoConfiguracion);

     /**
     * @param integer $id     
     * @return MProd\LicenciaCyPBundle\Entity\AtributoConfiguracion
     */    
    public function findById($id);

     /**
     * @param string $clave     
     * @return MProd\LicenciaCyPBundle\Entity\AtributoConfiguracion
     */    
    public function findAtributoConfiguracionByClave($clave);
}

?>