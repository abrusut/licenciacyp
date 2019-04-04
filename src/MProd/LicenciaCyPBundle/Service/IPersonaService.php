<?php
namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\Persona;


interface IPersonaService{
    /**
     * @param MProd\LicenciaCyPBundle\Entity\Persona     
     * @return void
     */  
    public function save(Persona $persona);

    public function findById($id);

    public function findBySexoAndTipoDocumentoAndNumeroDocumento($sexo,$tipoDocumento,
        $numeroDocumento);
}

?>