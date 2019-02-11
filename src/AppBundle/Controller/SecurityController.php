<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(AuthenticationUtils $authenticationUtils)
    {
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


        /**
     * @Route("/profile", name="profile")
     */
    public function profileAction(Request $request)
    {
       /* $em = $this->getDoctrine()->getManager();

        //Tipos de Trabajos
          $tipos_repo = $em->getRepository('AppBundle:Tipos');
          $tipos = $tipos_repo->findAll();
       
        // Pinturerias 
          $pintureria_repo = $em->getRepository('AppBundle:Pintureria');
          $pintureria = $pintureria_repo->findAll();
*/
          
        return $this->render(
            'auth/profile.html.twig',
            array(
            )
        );
    }
}