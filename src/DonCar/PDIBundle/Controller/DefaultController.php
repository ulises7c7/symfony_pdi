<?php

namespace DonCar\PDIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DonCarPDIBundle:Default:index.html.twig', array('name' => $name));
    }
}
