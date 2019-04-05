<?php

namespace MProd\LicenciaCyPBundle\Tests\Service;




class BoletaServiceTest extends TestCase
{

    protected $licenciaService;
    

    public function testGenerarBoleta(){                
        $kernel = static::createKernel();
        $kernel->boot();
        $em = $kernel->getContainer()->get('doctrine.orm.entity_manager');
       /* 
        $licencia= $this->licenciaService->findById(1);
        $value = false;
        if(is_object($licencia)){
            $value = true;
        }
        */
        $this->assertEquals(true, $value);
    }
}