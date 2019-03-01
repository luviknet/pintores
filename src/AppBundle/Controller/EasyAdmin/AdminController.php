<?php
namespace AppBundle\Controller\EasyAdmin;
 
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;

class AdminController extends BaseAdminController
{
    public function exportAction()
    {
        throw new \RuntimeException('Action for exporting an entity not defined');
    }
    /**
     * @Route("/dashboard", name="admin_dashboard")
     */
    public function dashboardAction()
    {
      
       //Gestor Repos
      $em = $this->getDoctrine()->getManager();
      $user_repo = $em->getRepository('AppBundle:User');
      $user = $user_repo->findAll();
 
      
      
      
     
      
      return $this->render('easy_admin/dashboard.html.twig', [
        
        'user' => $user,
        ]);
    }
}