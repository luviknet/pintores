<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Entity\Tipos;
use AppBundle\Entity\Pintureria;

class SecurityController extends Controller
{
    /**
     * @Route("/", name="login")
     */
    public function loginAction(AuthenticationUtils $authenticationUtils)
    {
      
       //Gestor Repos
      $em = $this->getDoctrine()->getManager();
      
       $pintureria = $this->getDoctrine()->getRepository('AppBundle:Pintureria')->findAll();
       $tipos = $this->getDoctrine()->getRepository('AppBundle:Tipos')->findAll();
      
      
       return $this->render(
           'auth/login.html.twig',
           array(
               'last_username' => $authenticationUtils->getLastUsername(),
               'error'         => $authenticationUtils->getLastAuthenticationError(),
               'pintureria' => $pintureria,
               'tipos' => $tipos,
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