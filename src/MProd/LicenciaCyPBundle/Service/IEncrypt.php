<?php
namespace MProd\LicenciaCyPBundle\Service;

interface IEncrypt{
    public function encrypt($param);
    public function decrypt($param);
}


?>