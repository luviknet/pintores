<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;


use AppBundle\Entity\Trabajo;
use AppBundle\Form\TrabajoType;



class UserController extends Controller
{
    /**
     * @Route("/profile", name="profile")
     */
    public function profileAction(Request $request)
    {
      //Gestor Repos
      $em = $this->getDoctrine()->getManager();
      //Id usuario
      $user = $this->getUser()->getId();
      //usuario
      $user_repo = $em->getRepository('AppBundle:User');
      $user_profile = $user_repo->findById($user);
      
      $query = $em->createQuery("SELECT u FROM AppBundle:Trabajo u WHERE u.idusuario = '$user' AND u.estado = '0'");
      $trabajo_activo = $query->getResult();
      
      $query2 = $em->createQuery("SELECT u FROM AppBundle:Trabajo u WHERE u.idusuario = '$user' AND u.estado = '1'");
      $trabajo_cerrado = $query2->getResult();
      
         $trabajo = new Trabajo();
            $form = $this->createForm('AppBundle\Form\TrabajoType', $trabajo);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $trabajo->setIdusuario($user);
                $trabajo->setEstado('0'); 
                $em->persist($trabajo);
                $em->flush();
                return $this->redirectToRoute('profile');
           }
    return $this->render(
            'auth/profile.html.twig',
            array(
              'profile' => $user_profile,
              'trabajo_activo' => $trabajo_activo,
                'trabajo_cerrado' => $trabajo_cerrado,
              'form' => $form->createView(),
              
            )
        );
    }
}