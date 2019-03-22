<?php

namespace MProd\LicenciaCyPBundle\Controller;

use MProd\LicenciaCyPBundle\Entity\Licencia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MProd\LicenciaCyPBundle\Form\LicenciaType;

class LicenciaController extends Controller
{
      public function addAction(Request $request) {
        $em = $this->container->get('doctrine')->getManager();
        $licencia = new Licencia();
        $form = $this
            ->container
            ->get('form.factory')
            ->create(new LicenciaType(), $licencia);

        $form->handleRequest($request);

        // $form->isValid() 
        if ($form->isSubmitted()) {                                    
            $anio = new \DateTime();
            $endOfYear = new \DateTime('last day of December this year');

        	$licencia->setAnio($anio->format('Y'));
        	$licencia->setFechaEmitida(new \DateTime());
            $licencia->setFechaVencimiento($endOfYear);
            $licencia->setComprobante(1);
            
            $dataPersona =  $request->request->getParameters('persona');
            $persona = $em
                            ->getRepository('MProdLicenciaCyPBundle:Persona')
                            ->findOneBy(array(
                                'sexo' => $dataPersona->getSexo(),
                                'tipoDocumento' => $dataPersona->getTipoDocumento(),
                                'numeroDocumento' => $dataPersona->getNumeroDocumento(),
                            ));

            try {
                $em->persist($licencia);
                $em->flush();
                $this->addFlash('home_mensaje', 'La Licencia ' . $licencia . ' ha sido creado correctamente.');
            } catch (\Doctrine\DBAL\DBALException $e) {
                $exception_number = $e->getPrevious()->getCode();
                $exception_message = $e->getMessage();

                return $this->render('MProdLicenciaCyPBundle:Exception:errorDB.html.twig', array('errorCode' => $exception_number, 'errorMessage' => $exception_message));
            }
            return $this->redirect($this->generateUrl("path_home"));
        }

        return $this->render('MProdLicenciaCyPBundle:Licencia:add.html.twig', array('form' => $form->createView()));
    }
}
