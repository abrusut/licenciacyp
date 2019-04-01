<?php

namespace MProd\LicenciaCyPBundle\Controller;

use MProd\LicenciaCyPBundle\Entity\Persona;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use MProd\LicenciaCyPBundle\Form\PersonaType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use MProd\LicenciaCyPBundle\Entity\Licencia;
class PersonaController extends Controller
{
    public function addAction(Request $request) {
        $em = $this->container->get('doctrine')->getManager();
        $persona = new Persona();
        $form = $this
            ->container
            ->get('form.factory')
            ->create(new PersonaType(), $persona);

        $form->handleRequest($request);

        if ($form->isValid() and $form->isSubmitted()) {                      

            try {
                $em->persist($persona);
                $em->flush();
                $this->addFlash('home_mensaje', 'La Licencia ' . $persona . ' ha sido creado correctamente.');
            } catch (\Doctrine\DBAL\DBALException $e) {
                $exception_number = $e->getPrevious()->getCode();
                $exception_message = $e->getMessage();

                return $this->render('MProdLicenciaCyPBundle:Exception:errorDB.html.twig', array('errorCode' => $exception_number, 'errorMessage' => $exception_message));
            }
            return $this->redirect($this->generateUrl("path_home"));
        }

        return $this->render('MProdLicenciaCyPBundle:Persona:add.html.twig', array('form' => $form->createView()));
    }

    public function findByAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $encoders = new JsonEncoder();
        $normalizer = new GetSetMethodNormalizer();
        
        $callback = function ($dateTime) {
            return $dateTime instanceof \DateTime
                ? $dateTime->format('d/m/Y')
                : '';
        };

        $normalizer->setCallbacks(array('fechaNacimiento' => $callback));
        $normalizer->setIgnoredAttributes(array('licencias'));

        $serializer = new Serializer(array($normalizer), array($encoders));

        $data = json_decode($request->getContent());
        
        $persona = $em
                            ->getRepository('MProdLicenciaCyPBundle:Persona')
                            ->findOneBy(array(
                                'sexo' => $data->sexo,
                                'tipoDocumento' => $data->tipoDocumento,
                                'numeroDocumento' => $data->numeroDocumento,
                            ));

       
        $personaJson = $serializer->serialize($persona, 'json');
        
        return new Response($personaJson,Response::HTTP_OK, array('content-type'=> 'application/json'));
    }
}
