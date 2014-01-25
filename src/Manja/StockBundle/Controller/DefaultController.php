<?php

namespace Manja\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Manja\SourcingBundle\Entity\Items;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository('ManjaSourcingBundle:Items')->findAll();

        $item = new Items();
        $itemsResult = array();

        foreach($items as $item) 
        {
            if($item->getCategoryId()->getId() == 1)
            {
                $q = $em->createQuery("select m.basicName from Manja\SourcingBundle\Entity\SrcAccLength m where m.itemId=".$item->getId());
                $itemName = $q->getResult();
                $itemToPush = array('id'       => $item->getId(), 
                                    'category' => $item->getCategoryId()->getCategory(), 
                                    'itemName' => $itemName[0]['basicName'], 
                                    'number'   => $item->getNumber());
                array_push($itemsResult, $itemToPush);
            }
            if($item->getCategoryId()->getId() == 2)
            {
                $q = $em->createQuery("select m.name from Manja\SourcingBundle\Entity\SrcAccPiece m where m.itemId=".$item->getId());
                $itemName = $q->getResult();
                $itemToPush = array('id'       => $item->getId(), 
                                    'category' => $item->getCategoryId()->getCategory(), 
                                    'itemName' => $itemName[0]['name'], 
                                    'number'   => $item->getNumber());
                array_push($itemsResult, $itemToPush);
            }
            if($item->getCategoryId()->getId() == 3)
            {
                $q = $em->createQuery("select m.name from Manja\SourcingBundle\Entity\SrcChains m where m.itemId=".$item->getId());
                $itemName = $q->getResult();
                $itemToPush = array('id'       => $item->getId(), 
                                    'category' => $item->getCategoryId()->getCategory(), 
                                    'itemName' => $itemName[0]['name'], 
                                    'number'   => $item->getNumber());
                array_push($itemsResult, $itemToPush);
            }
            if($item->getCategoryId()->getId() == 4)
            {
                $q = $em->createQuery("select m.type from Manja\SourcingBundle\Entity\SrcDiams m where m.itemId=".$item->getId());
                $itemName = $q->getResult();
                $itemToPush = array('id'       => $item->getId(), 
                                    'category' => $item->getCategoryId()->getCategory(), 
                                    'itemName' => $itemName[0]['type'], 
                                    'number'   => $item->getNumber());
                array_push($itemsResult, $itemToPush);
            }
            if($item->getCategoryId()->getId() == 5)
            {
                $q = $em->createQuery("select m.baseMetal from Manja\SourcingBundle\Entity\SrcFinding m where m.itemId=".$item->getId());
                $itemName = $q->getResult();
                $itemToPush = array('id'       => $item->getId(), 
                                    'category' => $item->getCategoryId()->getCategory(), 
                                    'itemName' => $itemName[0]['baseMetal'], 
                                    'number'   => $item->getNumber());
                array_push($itemsResult, $itemToPush);
            }
        	if($item->getCategoryId()->getId() == 6)
        	{
                $q = $em->createQuery("select m.metal from Manja\SourcingBundle\Entity\SrcMetal m where m.itemId=".$item->getId());
                $itemName = $q->getResult();
                $itemToPush = array('id'       => $item->getId(), 
                                    'category' => $item->getCategoryId()->getCategory(), 
                                    'itemName' => $itemName[0]['metal'], 
                                    'number'   => $item->getNumber());
                array_push($itemsResult, $itemToPush);
        	}
            if($item->getCategoryId()->getId() == 7)
            {
                $q = $em->createQuery("select p.variety from Manja\SourcingBundle\Entity\SrcPearls p where p.itemId=".$item->getId());
                $itemName = $q->getResult();
                $itemToPush = array('id'       => $item->getId(), 
                                    'category' => $item->getCategoryId()->getCategory(), 
                                    'itemName' => $itemName[0]['variety'], 
                                    'number'   => $item->getNumber());
                array_push($itemsResult, $itemToPush);
            }
            if($item->getCategoryId()->getId() == 8)
            {
                $q = $em->createQuery("select p.type from Manja\SourcingBundle\Entity\SrcStone p where p.itemId=".$item->getId());
                $itemName = $q->getResult();
                $itemToPush = array('id'       => $item->getId(), 
                                    'category' => $item->getCategoryId()->getCategory(), 
                                    'itemName' => $itemName[0]['type'], 
                                    'number'   => $item->getNumber());
                array_push($itemsResult, $itemToPush);
            }
        }

        return $this->render('ManjaStockBundle:Default:index.html.twig', array('items' => $itemsResult));
    }
}
