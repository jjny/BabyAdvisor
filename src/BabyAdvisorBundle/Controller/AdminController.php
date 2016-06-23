<?php

namespace BabyAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BabyAdvisorBundle\Entity\Article;
use BabyAdvisorBundle\Entity\Photo;
use BabyAdvisorBundle\Entity\Commentaire;
use BabyAdvisorBundle\Entity\EstSignale;

class AdminController extends Controller
{
    /**
     * @Route("/")
     */
    public function supprimerAction(Request $request,$type, $id)
    {
        $session = $request->getSession();
        if($session->get('userRole')=='ROLE_ADMIN'){
         $form = $this->createForm('BabyAdvisorBundle\Form\Type\supprimerType');

             if ($request->isMethod('POST')){
                    $form->handleRequest($request);
                    if ($form->isValid()){  
                            if($_POST["supprimer"]["supprimer"]==1){
                                 $em2 = $this->container->get('doctrine')->getManager();
                                 if($type=="Article"){
                                    $article= $em2->getRepository('BabyAdvisorBundle:Article')->findOneBy(array('id'=>$id));
                                    $articlesignale= $em2->getRepository('BabyAdvisorBundle:EstSignale')->findOneBy(array('id'=>$id));

                                    $em2->remove($article);
                                    $em2->flush();
                                    $session->getFlashBag()->add('info', 'L\'article a bien été supprimé');


                                 }
                                 elseif ($type=="commentaire") {
                                    $commentaire= $em2->getRepository('BabyAdvisorBundle:Commentaire')->findOneBy(array('id'=>$id));

                                    $em2->remove($commentaire);
                                    $em2->flush();
                                    $session->getFlashBag()->add('info', 'Le commentaire a bien été supprimé');
                                   
                                 }
                                 elseif ($type=="Photo") {
                                    $photo= $em2->getRepository('BabyAdvisorBundle:Photo')->findOneBy(array('id'=>$id));

                                    $em2->remove($photo);
                                    $em2->flush();
                                    $session->getFlashBag()->add('info', 'La photo a bien été supprimé');
                                    
                                 }
                                 else{
                                    return $this->redirectToRoute('homepage');
                                 }      

                            }
                            else{

                                return $this->redirectToRoute('homepage');
                            }

                            return $this->redirectToRoute('homepage');
                     }
              }              



        return $this->render('BabyAdvisorBundle:BabyAdvisor:adminSuppresion.html.twig', array(
            'form' => $form->createView()));
        }
        else{
            $session->getFlashBag()->add('info', 'Vous avez pas les droits admin'); 
            return $this->redirectToRoute('homepage');

        }
        
    }

     public function annulerAction(Request $request,$type, $id)
    {
     $session = $request->getSession();
        if($session->get('userRole')=='ROLE_ADMIN'){
         $form = $this->createForm('BabyAdvisorBundle\Form\Type\annulerType');

             if ($request->isMethod('POST')){
                    $form->handleRequest($request);
                    if ($form->isValid()){  
                            if($_POST["annuler"]["annuler"]==1){
                                 $em2 = $this->container->get('doctrine')->getManager();
                                 if($type=="Article"){
                                    $article= $em2->getRepository('BabyAdvisorBundle:Article')->findOneBy(array('id'=>$id));
                                    $articlesignale= $em2->getRepository('BabyAdvisorBundle:EstSignale')->findOneBy(array('id'=>$id));

                                    $article->setSignale(false);
                                    //$em = $this->getDoctrine()->getManager();
                                     $em2->persist($article);
                                    $em2->flush();
                                    $session->getFlashBag()->add('info', 'Le signalement de l\'article a bien été annulé');
                                    return $this->redirectToRoute('homepage');


                                 }
                                 elseif ($type=="Commentaire") {
                                    $commentaire= $em2->getRepository('BabyAdvisorBundle:Commentaire')->findOneBy(array('id'=>$id));

                                    $commentaire->setSignale(false);
                                    //$em = $this->getDoctrine()->getManager();
                                     $em2->persist($commentaire);
                                    $em2->flush();
                                    $session->getFlashBag()->add('info', 'Le signalement du commentaire a bien été annulé');
                                    return $this->redirectToRoute('homepage');
                                   
                                 }
                                 elseif ($type=="Photo") {
                                    $photo= $em2->getRepository('BabyAdvisorBundle:Photo')->findOneBy(array('id'=>$id));

                                    $photo->setSignale(false);
                                    //$em = $this->getDoctrine()->getManager();
                                     $em2->persist($photo);
                                    $em2->flush();
                                    $session->getFlashBag()->add('info', 'Le signalement de la photo a bien été annulé');
                                    return $this->redirectToRoute('homepage');
                                    
                                 }
                                 else{
                                    return $this->redirectToRoute('homepage');
                                 }      

                            }
                            else{

                                return $this->redirectToRoute('homepage');
                            }

                            
                     }
              }              

            return $this->render('BabyAdvisorBundle:BabyAdvisor:adminAnnuler.html.twig', array(
                                     'form' => $form->createView()));
        }
        else{
            $session->getFlashBag()->add('info', 'Vous avez pas les droits admin'); 
            return $this->redirectToRoute('homepage');

        }
        


        
    }


  




}
