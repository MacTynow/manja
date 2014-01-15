<?php

namespace Manja\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $items = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:Items')->findAll();

        /*$item = new Items();

        foreach($item as &$items) 
        {
        	if($item->getCategoryId() == 6)
        	{
        		$itemName = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcMetal')->findBy(array('itemId' => $item->getId()));
        	}
        }*/

        return $this->render('ManjaStockBundle:Default:index.html.twig', array('items' => $items));
    }
}
