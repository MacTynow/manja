<?php

namespace Manja\SourcingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ManjaSourcingBundle:Default:index.html.twig');
    }
}
