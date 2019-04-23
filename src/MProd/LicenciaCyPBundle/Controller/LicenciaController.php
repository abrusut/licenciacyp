<?php

namespace MProd\LicenciaCyPBundle\Controller;

use MProd\LicenciaCyPBundle\Entity\Licencia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MProd\LicenciaCyPBundle\Form\LicenciaType;
use MProd\LicenciaCyPBundle\Service\LicenciaServiceImpl;
use MProd\LicenciaCyPBundle\Exception\SimpleMessageException;
use MProd\LicenciaCyPBundle\Service\BoletaServiceImpl;
use MProd\LicenciaCyPBundle\Service\ComprobanteServiceImpl;
use MProd\LicenciaCyPBundle\Service\EncryptImpl;
use MProd\LicenciaCyPBundle\Form\LicenciaReadOnlyType;

class LicenciaController extends Controller
{

    public function addAction(Request $request)
    {
        $this->get('logger')->info("LicenciaController, addAction");

        $licencia = new Licencia();
        $form = $this
            ->container
            ->get('form.factory')
            ->create(new LicenciaType(), $licencia);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('logger')->info("LicenciaController, formulario enviado y validado OK..");
            $this->get('logger')->info(
                "LicenciaController, Proceso Licencia para Sexo;"
                    . $licencia->getPersona()->getSexo()
                    . " TipoDocumento: " . $licencia->getPersona()->getTipoDocumento()->getId()
                    . " NumeroDocumento: " . $licencia->getPersona()->getNumeroDocumento()
            );

            /** @var LicenciaServiceImpl $licenciaService */
            $licenciaService = $this->get('licencia_service');
            /** @var BoletaServiceImpl $boletaService */
            $boletaService = $this->get('boleta_service');
            /** @var ComprobanteServiceImpl $comprobanteService */
            $comprobanteService =  $this->get('comprobante_service');

            /** @var EncryptImpl $encryptService */
            $encryptService = $this->get('encrypt_service');

            try {
                $licenciaService->generarLicencia($licencia);
                $licenciaService->save($licencia);
            } catch (\Doctrine\DBAL\DBALException $e) {
                $exceptionNumber = $e->getPrevious()->getCode();
                $exceptionMessage = $e->getMessage();
                $this->get('logger')->error("LicenciaController,ERROR " . $exceptionNumber . " message " . $exceptionMessage);
                return $this->render('MProdLicenciaCyPBundle:Exception:errorDB.html.twig', array('errorCode' => $exceptionNumber, 'errorMessage' => $exceptionMessage));
            } catch (SimpleMessageException $sme) {
                $exceptionNumber = $sme->getCode();
                $exceptionMessage = $sme->getMessage();
                $this->get('logger')->error("LicenciaController,ERROR " . $exceptionNumber . " message " . $exceptionMessage);
                $this->addFlash('licenciaForm_message_error', 'La Licencia no pudo ser generada .' . $sme->getMessage());
                return $this->render(
                    'MProdLicenciaCyPBundle:Licencia:add.html.twig',
                    array(
                        'form' => $form->createView(),
                        'licencia' => $licencia
                    )
                );
            } catch (\RuntimeException $re) {
                $exceptionNumber = $re->getCode();
                $exceptionMessage = $re->getMessage();
                $this->get('logger')->error("LicenciaController,ERROR " . $exceptionNumber . " message " . $exceptionMessage);
                $this->addFlash('licenciaForm_message_error', 'La Licencia no pudo ser generada .' . $re->getMessage());
                return $this->render(
                    'MProdLicenciaCyPBundle:Licencia:add.html.twig',
                    array(
                        'form' => $form->createView(),
                        'licencia' => $licencia
                    )
                );
            }

            try {
                //para generar la boleta tiene que estar persistido el comprobante y la licencia
                $numeroCodigoBarra = $boletaService->generarCodigoBarras($licencia);

                $licencia->getComprobante()->setNumeroCodigoBarra($numeroCodigoBarra);

                // Actualizo el comprobante con el codigo de barras
                $comprobanteService->save($licencia->getComprobante());

                $this->get('logger')->info("LicenciaController, formulario PROCESADO OK.." . 'La Licencia ' . $licencia . ' ha sido creada correctamente.');
                $this->container->get('session')->getFlashBag()->clear();
                $this->addFlash('licenciaForm_message', 'La Licencia ' . $licencia . ' ha sido creada correctamente.');
            } catch (\Doctrine\DBAL\DBALException $e) {
                $exceptionNumber = $e->getPrevious()->getCode();
                $exceptionMessage = $e->getMessage();
                $this->get('logger')->error("LicenciaController,ERROR " . $exceptionNumber . " message " . $exceptionMessage);
                return $this->render('MProdLicenciaCyPBundle:Exception:errorDB.html.twig', array('errorCode' => $exceptionNumber, 'errorMessage' => $exceptionMessage));
            } catch (SimpleMessageException $sme) {
                $exceptionNumber = $sme->getCode();
                $exceptionMessage = $sme->getMessage();
                $this->get('logger')->error("LicenciaController,ERROR " . $exceptionNumber . " message " . $exceptionMessage);
                $this->addFlash('licenciaForm_message_error', 'La Licencia no pudo ser generada .' . $sme->getMessage());
                return $this->render(
                    'MProdLicenciaCyPBundle:Licencia:add.html.twig',
                    array(
                        'form' => $form->createView(),
                        'licencia' => $licencia
                    )
                );
            } catch (\RuntimeException $re) {
                $exceptionNumber = $re->getCode();
                $exceptionMessage = $re->getMessage();
                $this->get('logger')->error("LicenciaController,ERROR " . $exceptionNumber . " message " . $exceptionMessage);
                $this->addFlash('licenciaForm_message_error', 'La Licencia no pudo ser generada .' . $re->getMessage());
                return $this->render(
                    'MProdLicenciaCyPBundle:Licencia:add.html.twig',
                    array(
                        'form' => $form->createView(),
                        'licencia' => $licencia
                    )
                );
            }

            $this->get('logger')->info("LicenciaController, Se Guardan todos los datos OK, redirijo a la impresion de la boleta");

            return $this->redirectToRoute(
                'licencia_generada_detalle',
                array(
                    'licenciaId' => $licencia->getId()                    
                )
            );
        }

        $this->get('logger')->info("LicenciaController, devuelvo formulario a la vista");
        return $this->render(
            'MProdLicenciaCyPBundle:Licencia:add.html.twig',
            array(
                'form' => $form->createView(),
                'licencia' => $licencia                
            )
        );
    }


    public function verLicenciaAction(Request $request, $licenciaId)
    {
        $this->get('logger')->info("BoletaPagoController, imprimirAction, licenciaId " . $licenciaId);

        $idLicencia = urldecode($licenciaId);
        /** @var LicenciaServiceImpl $licenciaService */
        $licenciaService = $this->get('licencia_service');

        $licencia = $licenciaService->findById($idLicencia);
        $persona = $licencia->getPersona();
        

        $this->get('logger')->info("LicenciaController, verLicenciaAction devuelvo formulario READONLY a la vista");
        return $this->render(
            'MProdLicenciaCyPBundle:Licencia:licencia.generada.detail.html.twig',
            array(               
                'licencia' => $licencia,
                'urlBoletaPago' => $this->generateUrl(
                    'boleta_pago_imprimir',
                    array('licenciaId' => $licencia->getId())
                )
            )
        );
    }
}

