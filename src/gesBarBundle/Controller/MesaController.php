<?php

namespace gesBarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use gesBarBundle\Entity\Mesa;
use gesBarBundle\Form\Type\MesaType;

class MesaController extends Controller
{
    /**
     * @Route("/Mesa")
     */
    public function indexAction(Request $request)
    {
    	// create a task and give it some dummy data for this example
    	$formmessage="Guarde la mesa";
		$mesa = new Mesa();
		$mesa->setName('Nombre Mesa');
		$form = $this->createForm(MesaType::class,$mesa,array(
			//'action' => $this->generateUrl('ges_mesa_create')
			));
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
		// ... perform some action, such as saving the task to the database
			$mesa = $form->getData();
			$em = $this->getDoctrine()->getManager();
			$em->persist($mesa);
			$em->flush();
			//$formmessage="Mesa Guardada";
		} 	
    	$repo = $this->getDoctrine()
			->getRepository('gesBarBundle:Mesa');
		$mesas = $repo->findAll();
		if (!$mesas) {
			throw $this->createNotFoundException(
			'No product found for id '.$id
			);
		}
        return $this->render('gesBarBundle:Mesa:mesa.html.twig', array(
        		'form' => $form->createView(),
        		'formmessage' => $formmessage,
        		'mesas' => $mesas
        	));
    }

    public function createAction(Request $request)
	{

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
		// ... perform some action, such as saving the task to the database
			$mesa = $form->getData();
			$em = $this->getDoctrine()->getManager();
			$em->persist($mesa);
			$em->flush();
			$formmessage="Mesa Guardada";
		}
	}
}
