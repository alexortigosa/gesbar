<?php

namespace gesBarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use gesBarBundle\Entity\Product;
use gesBarBundle\Form\Type\ProductType;

class ProductController extends Controller
{
    /**
     * @Route("/Mesa")
     */
    public function indexAction(Request $request)
    {
    	// create a task and give it some dummy data for this example
    	$formmessage="Guarde el producto";
		$product = new Product();
		$product->setName('Nombre Producto');
		$form = $this->createForm(ProductType::class,$product,array(
			//'action' => $this->generateUrl('ges_mesa_create')
			));
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
		// ... perform some action, such as saving the task to the database
			$product = $form->getData();
			$em = $this->getDoctrine()->getManager();
			$em->persist($product);
			$em->flush();
			//$formmessage="Mesa Guardada";
		} 	
    	$repo = $this->getDoctrine()
			->getRepository('gesBarBundle:Product');
		$productos = $repo->findAll();
		$repo = $this->getDoctrine()
			->getRepository('gesBarBundle:Category');
		$categorias = $repo->findAll();
		
        return $this->render('gesBarBundle:Product:product.html.twig', array(
        		'form' => $form->createView(),
        		'formmessage' => $formmessage,
        		'products' => $productos,
        		'categoryes' => $categorias
        	));
    }

    public function createAction(Request $request)
	{

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
		// ... perform some action, such as saving the task to the database
			$product = $form->getData();
			$em = $this->getDoctrine()->getManager();
			$em->persist($product);
			$em->flush();
			$formmessage="Mesa Guardada";
		}
	}
}
