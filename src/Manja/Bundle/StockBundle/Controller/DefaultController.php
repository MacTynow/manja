<?php

namespace Manja\Bundle\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ManjaStockBundle:Default:index.html.twig', array('name' => $name));
    }
}
