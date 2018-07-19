<?php
/**
 * Created by PhpStorm.
 * User: administrador
 * Date: 16/07/18
 * Time: 08:18
 */

namespace MProd\LicenciaCyPBundle\Controller;

use MProd\LicenciaCyPBundle\Entity\Tecnico;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MProd\LicenciaCyPBundle\Form\TecnicoType;

class TecnicoController extends Controller {


    public function viewAction($id)
    {

        $em = $this->container->get('doctrine')->getManager();
        $tecnico = $em->getRepository('MProdLicenciaCyPBundle:Tecnico')->find($id);
        $deleteForm = $this->createDeleteForm($tecnico->getId());

        return $this->render('MProdLicenciaCyPBundle:Tecnico:view.html.twig', array('tecnico' => $tecnico,
            'delete_form' => $deleteForm->createView()));

    }

    public function listAction(Request $request) {
        $em = $this->container->get('doctrine')->getManager();
        $tecnico= $em
            ->getRepository('MProdLicenciaCyPBundle:Tecnico')
            ->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($tecnico, $request->query->get('page', 1), 5
        );


        return $this->render('MProdLicenciaCyPBundle:Tecnico:list.html.twig',
            array('pagination' => $pagination));
    }

    public function addAction(Request $request) {
        $em = $this->container->get('doctrine')->getManager();
        $tecnico = new Tecnico();
        $form = $this
            ->container
            ->get('form.factory')
            ->create(new TecnicoType(), $tecnico);
        $tecnico->setRole("ROLE_TECNICO");

        $form->handleRequest($request);

        if ($form->isValid() and $form->isSubmitted()) {

            $passwordplano = 'TEcnico1';
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($tecnico, $passwordplano);
            $tecnico->setPassword($encoded);
           // $tecnico->setFechaAlta(new \DateTime());
            $tecnico->setIsActive(true);

            try {
                $em->persist($tecnico);
                $em->flush();
                $this->addFlash('tecnico_list_mensaje', 'El tecnico ' . $tecnico . ' ha sido creado correctamente.');
            } catch (\Doctrine\DBAL\DBALException $e) {
                $exception_number = $e->getPrevious()->getCode();
                $exception_message = $e->getMessage();

                return $this->render('MProdLicenciaCyPBundle:Exception:errorDB.html.twig', array('errorCode' => $exception_number, 'errorMessage' => $exception_message));
            }
            return $this->redirect($this->generateUrl("tecnico_list"));
        }

        return $this->render('MProdLicenciaCyPBundle:Tecnico:add.html.twig', array('form' => $form->createView()));
    }
}