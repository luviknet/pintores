<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Entity\Tipos;
use AppBundle\Entity\Pintureria;
use AppBundle\Entity\Slide;
use AppBundle\Entity\Texto;

use AppBundle\Entity\Trabajoe;
use AppBundle\Form\TrabajoeType;

class SecurityController extends Controller
{
    /**
     * @Route("/", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils )
    {
        
       //Gestor Repos
      $em = $this->getDoctrine()->getManager();
      
       $pintureria = $this->getDoctrine()->getRepository('AppBundle:Pintureria')->findAll();
       $tipos = $this->getDoctrine()->getRepository('AppBundle:Tipos')->findAll();
       $slide = $this->getDoctrine()->getRepository('AppBundle:Slide')->findAll();
       $text = $this->getDoctrine()->getRepository('AppBundle:Texto')->findAll();
   
       $trabajoe = new Trabajoe();
       $form = $this->createForm('AppBundle\Form\TrabajoeType', $trabajoe);
       $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            var_dump('1'); die;
          
           $trabajo->setEstado('0'); 

           var_dump($trabajoe);die;
           $em->persist($trabajoe);
           $em->flush(); 
           return $this->redirectToRoute('register');
      }

       return $this->render(
           'auth/login.html.twig',
           array(
               'last_username' => $authenticationUtils->getLastUsername(),
               'error'         => $authenticationUtils->getLastAuthenticationError(),
               'pintureria' => $pintureria,
               'tipos' => $tipos,
               'slide' => $slide,
               'texto' => $text,
               'form' => $form->createView(),
           )
       );
    }

   
    /**
     * @Route("/login_check", name="security_login_check")
     */
    public function loginCheckAction()
    {

    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {

    }

 
}