<?php

namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\FileRendicionLiquidacion;

interface IFileCsvReaderService{ 
    public function readCsvFile($file, FileRendicionLiquidacion $fileRendicionLiquidacion);

}