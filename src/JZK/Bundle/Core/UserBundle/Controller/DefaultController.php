<?php

namespace JZK\Bundle\Core\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JZKCoreUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
