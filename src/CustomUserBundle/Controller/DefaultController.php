<?php

namespace CustomUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CustomUserBundle:Default:index.html.twig');
    }
}
