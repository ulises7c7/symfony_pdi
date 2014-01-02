<?php

namespace DonCar\PDIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DonCar\PDIBundle\Form\Type\UsuarioType;
use DonCar\PDIBundle\Entity\Usuario;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller{


    //Index
    public function indexAction(){
        return $this->render('DonCarPDIBundle:Default:index.html.twig', array());
    }


    //Alta de Usuario mediante un Form
    public function altaAction(Request $request){
	
        $usuario = new Usuario();

        $form = $this->createFormBuilder($usuario)
            ->add('nombre', 'text')
            ->add('username', 'text')
            ->add('password', 'password')
            ->add('apellido', 'text')
	    ->add('save','submit')
            ->getForm();
 
	 $form->handleRequest($request);

 	 if ($form->isValid()) {
 	    	// guardar la tarea en la base de datos
	    	$em = $this->getDoctrine()->getManager();
 	    	$em->persist($usuario);
	    	$em->flush();

	    	return $this->redirect($this->generateUrl('pdi_index'));
    	  }

          return $this->render('DonCarPDIBundle:Default:new.html.twig', array('form' => $form->createView(),));
    }


    //Ejemplo de alta de Usuario mediante URL
    public function insertarAction($nombre, $apellido, $username, $password){
	$usuario = new Usuario();
	$usuario->setNombre($nombre);
	$usuario->setApellido($apellido);
	$usuario->setUsername($username);
	$usuario->setPassword($password);

	$em = $this->getDoctrine()->getManager();
	$em->persist($usuario);
	$em->flush();
    }

    //Alta de Usuario mediante un Form usando clases Form Type
    public function altafAction(Request $request){
	
        $usuario = new Usuario();

	$form = $this->createForm(new UsuarioType(), $usuario);
        
	$form->handleRequest($request);

 	if ($form->isValid()) {
	    	$em = $this->getDoctrine()->getManager();
 	    	$em->persist($usuario);
	    	$em->flush();

	    	return $this->redirect($this->generateUrl('pdi_index'));
	}

	return $this->render('DonCarPDIBundle:Default:new.html.twig', array('form' => $form->createView(),));
    }

}
