<?php
namespace MProd\LicenciaCyPBundle\Repository;

use MProd\LicenciaCyPBundle\Entity\Persona;

interface IPersonaRepository{

    /**
     * @param MProd\LicenciaCyPBundle\Entity\Persona     
     * @return void
     */  
    public function save(Persona $persona);

     /**
     * @param integer $id     
     * @return MProd\LicenciaCyPBundle\Entity\Persona
     */    
    public function findById($id);

    /**
     * @param string $sexo     
     * @param string $tipoDocumento     
     * @param string $numeroDocumento     
     * @return MProd\LicenciaCyPBundle\Entity\Persona
     */   
    public function findBySexoAndTipoDocumentoAndNumeroDocumento($sexo,$tipoDocumento,$numeroDocumento);
}



?>