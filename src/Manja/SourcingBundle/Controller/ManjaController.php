<?php

namespace Manja\SourcingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Manja\SourcingBundle\Entity\Contact;
use Manja\SourcingBundle\Entity\Supplier;
use Manja\SourcingBundle\Entity\SrcMetal;
use Manja\SourcingBundle\Entity\SrcStone;
use Manja\SourcingBundle\Entity\SrcDiams;
use Manja\SourcingBundle\Entity\SrcPearls;
use Manja\SourcingBundle\Entity\SrcFinding;
use Manja\SourcingBundle\Entity\SrcChains;
use Manja\SourcingBundle\Entity\SrcAccLength;
use Manja\SourcingBundle\Entity\SrcAccPiece;
use Manja\SourcingBundle\Form\ContactType;
use Manja\SourcingBundle\Form\SupplierType;
use Manja\SourcingBundle\Form\SrcMetalType;
use Manja\SourcingBundle\Form\SrcStoneType;
use Manja\SourcingBundle\Form\SrcDiamsType;
use Manja\SourcingBundle\Form\SrcPearlsType;
use Manja\SourcingBundle\Form\SrcFindingType;
use Manja\SourcingBundle\Form\SrcChainsType;
use Manja\SourcingBundle\Form\SrcAccLengthType;
use Manja\SourcingBundle\Form\SrcAccPieceType;

class ManjaController extends Controller
{
    public function indexAction()
    {
        return $this->render('ManjaSourcingBundle:Default:index.html.twig');
    }

    public function listAction($data)
    {
        switch ($data) {
            case "supplier":
                $items = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:Supplier')->findAll();
                break;
            case "contact":
                $items = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:Contact')->findAll();
                break;
            case "diamond":
                $items = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcDiams')->findAll();
                break;
            case "metal":
                $items = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcMetal')->findAll();
                break;
            case "stone":
                $items = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcStone')->findAll();
                break;
            case "pearl":
                $items = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcPearls')->findAll();
                break;
            case "finding":
                $items = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcFinding')->findAll();
                break;
            case "chain":
                $items = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcChains')->findAll();
                break;
            case "accessorie_length":
                $items = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcAccLength')->findAll();
                break;
            case "accessorie_piece":
                $items = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcAccPiece')->findAll();
                break;
            case "stone_variety":
                $items = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:StoneVariety')->findAll();
                break;
        }

        return $this->render('ManjaSourcingBundle:Sourcing:'.$data.'.html.twig', array('items' => $items));
    }

    public function addAction($data)
    {
        switch ($data) {
            case "supplier":
                $item = new Supplier();
                $form = $this->createForm(new SupplierType, $item);
                break;
            case "contact":
                $item = new Contact();
                $form = $this->createForm(new ContactType, $item);
                $data = "supplier";
                break;
            case "diamond":
                $item = new SrcDiams();
                $form = $this->createForm(new SrcDiamsType, $item);
                break;
            case "metal":
                $item = new SrcMetal();
                $form = $this->createForm(new SrcMetalType, $item);
                break;
            case "stone":
                $item = new SrcStone();
                $form = $this->createForm(new SrcStoneType, $item);
                break;
            case "pearl":
                $item = new SrcPearls();
                $form = $this->createForm(new SrcPearlsType, $item);
                break;
            case "finding":
                $item = new SrcFinding();
                $form = $this->createForm(new SrcFindingType, $item);
                break;
            case "chain":
                $item = new SrcChains();
                $form = $this->createForm(new SrcChainsType, $item);
                break;
            case "accessorie_length":
                $item = new SrcAccLength();
                $form = $this->createForm(new SrcAccLengthType, $item);
                break;
            case "accessorie_piece":
                $item = new SrcAccPiece();
                $form = $this->createForm(new SrcAccPieceType, $item);
                break;
        }

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($item);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', $data.' added');

                return $this->redirect($this->generateUrl('manja_sourcing_list', array('data' => $data), true));
            }
        }

        return $this->render('ManjaSourcingBundle:Sourcing:add_'.$data.'.html.twig', array('form' => $form->createView(), ));   
    }

    public function itemSheetAction($category, $id)
    {
        switch ($category) {
            case "supplier":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:Supplier')->find($id);
                break;
            case "contact":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:Contact')->find($id);
                break;
            case "diamond":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcDiams')->find($id);
                break;
            case "metal":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcMetal')->find($id);
                break;
            case "stone":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcStone')->find($id);
                break;
            case "pearl":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcPearls')->find($id);
                break;
            case "finding":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcFinding')->find($id);
                break;
            case "chain":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcChains')->find($id);
                break;
            case "accessorie_length":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcAccLength')->find($id);
                break;
            case "accessorie_piece":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcAccPiece')->find($id);
                break;
        }
        return $this->render('ManjaSourcingBundle:Sourcing:'.$category.'_sheet.html.twig', array('item' => $item));
    }
    
    public function removeAction($category, $id)
    {
        switch ($category) {
            case "supplier":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:Supplier')->find($id);
                break;
            case "contact":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:Contact')->find($id);
                break;
            case "diamond":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcDiams')->find($id);
                break;
            case "metal":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcMetal')->find($id);
                break;
            case "stone":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcStone')->find($id);
                break;
            case "stone_variety":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:StoneVariety')->find($id);
                break;
            case "pearl":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcPearls')->find($id);
                break;
            case "finding":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcFinding')->find($id);
                break;
            case "chain":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcChains')->find($id);
                break;
            case "accessorie_length":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcAccLength')->find($id);
                break;
            case "accessorie_piece":
                $item = $this->getDoctrine()->getManager()->getRepository('ManjaSourcingBundle:SrcAccPiece')->find($id);
                break;
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($item);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', $category.' deleted');

        return $this->redirect($this->generateUrl('manja_sourcing_list', array('data' => $category), true));
    }
}
