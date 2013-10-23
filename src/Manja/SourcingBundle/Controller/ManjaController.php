<?php

namespace Manja\SourcingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Manja\SourcingBundle\Entity\Supplier;
use Manja\SourcingBundle\Entity\SrcMetal;
use Manja\SourcingBundle\Entity\SrcStone;
use Manja\SourcingBundle\Entity\SrcDiams;
use Manja\SourcingBundle\Form\SupplierType;
use Manja\SourcingBundle\Form\SrcMetalType;
use Manja\SourcingBundle\Form\SrcStoneType;
use Manja\SourcingBundle\Form\SrcDiamsType;

class ManjaController extends Controller
{
    public function indexAction()
    {
        return $this->render('ManjaSourcingBundle:Default:index.html.twig');
    }

    public function listSuppliersAction()
    {
        $suppliers = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:Supplier')->findAll();

        return $this->render('ManjaSourcingBundle:Sourcing:suppliers.html.twig', array('suppliers' => $suppliers));
    }

    public function addSupplierAction()
    {
        $supplier = new Supplier();

        $form = $this->createForm(new SupplierType, $supplier);

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($supplier);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'Supplier added');

                return $this->redirect($this->generateUrl('manja_sourcing_list_suppliers'));
            }
        }

        return $this->render('ManjaSourcingBundle:Sourcing:add_supplier.html.twig', array('form' => $form->createView(), ));   
    }
    
    public function listMetalsAction()
    {
        $metals = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcMetal')->findAll();

        return $this->render('ManjaSourcingBundle:Sourcing:metals.html.twig', array('metals' => $metals));
    }
    
    public function addMetalAction()
    {
        $metal = new SrcMetal();

        $form = $this->createForm(new SrcMetalType, $metal);

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($metal);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'Metal added');

                return $this->redirect($this->generateUrl('manja_sourcing_list_metals'));
            }
        }

        return $this->render('ManjaSourcingBundle:Sourcing:add_metal.html.twig', array('form' => $form->createView(), ));   
    }
    
    public function listStonesAction()
    {
        $stones = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcStone')->findAll();

        return $this->render('ManjaSourcingBundle:Sourcing:stones.html.twig', array('stones' => $stones));
    }
    
    public function addStoneAction()
    {
        $stone = new SrcStone();

        $form = $this->createForm(new SrcStoneType, $stone);

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($stone);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'Stone added');

                return $this->redirect($this->generateUrl('manja_sourcing_list_stones'));
            }
        }

        return $this->render('ManjaSourcingBundle:Sourcing:add_stone.html.twig', array('form' => $form->createView(), ));   
    }
    
    public function listDiamondsAction()
    {
        $diamonds = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcDiams')->findAll();

        return $this->render('ManjaSourcingBundle:Sourcing:diamonds.html.twig', array('diamonds' => $diamonds));
    }
    
    public function addDiamondAction()
    {
        $diamond = new SrcDiams();

        $form = $this->createForm(new SrcDiamsType, $diamond);

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($diamond);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'Diamond added');

                return $this->redirect($this->generateUrl('manja_sourcing_list_diamond'));
            }
        }

        return $this->render('ManjaSourcingBundle:Sourcing:add_diamond.html.twig', array('form' => $form->createView(), ));   
    }
    
    public function listFindingsAction()
    {
        $findings = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcFindings')->findAll();

        return $this->render('ManjaSourcingBundle:Sourcing:findings.html.twig');
    }
    
    public function listPearlsAction()
    {
        $metals = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcPearls')->findAll();

        return $this->render('ManjaSourcingBundle:Sourcing:pearls.html.twig');
    }
}
