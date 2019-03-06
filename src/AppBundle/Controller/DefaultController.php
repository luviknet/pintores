<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\User;
use AppBundle\Entity\Tipos;
use AppBundle\Entity\Pintureria;
use AppBundle\Entity\Slide;
use AppBundle\Entity\Texto;
use AppBundle\Entity\Trabajoe;
use AppBundle\Entity\Contratar;
use AppBundle\Form\TrabajoeType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
      
        $em = $this->getDoctrine()->getManager();
      
       $pintureria = $this->getDoctrine()->getRepository('AppBundle:Pintureria')->findAll();
       $tipos = $this->getDoctrine()->getRepository('AppBundle:Tipos')->findAll();
       $slide = $this->getDoctrine()->getRepository('AppBundle:Slide')->findAll();
       $text = $this->getDoctrine()->getRepository('AppBundle:Texto')->findAll();
       $contratar = $this->getDoctrine()->getRepository('AppBundle:Contratar')->findAll();
   
       $trabajoe = new Trabajoe();
       $form = $this->createForm('AppBundle\Form\TrabajoeType', $trabajoe);
       $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           $em = $this->getDoctrine()->getManager();
           $trabajo->setEstado('0'); 
           var_dump($trabajoe);die;
           $em->persist($trabajoe);
           $em->flush(); 
           return $this->redirectToRoute('register');
      }

        return $this->render('default/index.html.twig', [
               'pintureria' => $pintureria,
               'tipos' => $tipos,
               'slide' => $slide,
               'texto' => $text,
               'contratar' => $contratar,
               'form' => $form->createView(),
        ]);
    }
}
