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
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils )
    {
        
       //Gestor Repos
    
       return $this->render(
           'auth/login.html.twig',
           array(
               'last_username' => $authenticationUtils->getLastUsername(),
               'error'         => $authenticationUtils->getLastAuthenticationError(),
              
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