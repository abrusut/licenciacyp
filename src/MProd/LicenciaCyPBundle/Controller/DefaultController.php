<?php

namespace MProd\LicenciaCyPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MProdLicenciaCyPBundle:Default:index.html.twig', array('name' => $name));
    }
}
