<?php
namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\TipoLicencia;
use MProd\LicenciaCyPBundle\Entity\Comprobante;


interface IComprobanteService{
    public function generarComprobante(TipoLicencia $tipoLicencia);

    /**
     * @param MProd\LicenciaCyPBundle\Entity\Comprobante     
     * @return void
     */  
    public function save(Comprobante $comprobante);

    public function findById($id);
}


?>