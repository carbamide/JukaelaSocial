<?php

namespace Jukaela\JukaelaSocialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JukaelaJukaelaSocialBundle:Default:index.html.twig', array('name' => $name));
    }
}
