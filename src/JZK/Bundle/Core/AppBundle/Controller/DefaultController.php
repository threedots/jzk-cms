<?php

namespace JZK\Bundle\Core\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JZKCoreAppBundle:Default:index.html.twig');
    }
}
