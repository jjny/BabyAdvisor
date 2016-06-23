<?php

namespace BabyAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BabyAdvisorBundle\Entity\Article;
use BabyAdvisorBundle\Entity\Horaire;
use BabyAdvisorBundle\Entity\Commentaire;
use BabyAdvisorBundle\Entity\EstSignale;
use BabyAdvisorBundle\Entity\Activite;
use BabyAdvisorBundle\Entity\Photo;


class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getManager();
        $topArticle = $em->getRepository('BabyAdvisorBundle:Article')->findTopArticle();

        $lastArticle = $em->getRepository('BabyAdvisorBundle:Article')->findlastArticles();

        $session = $request->getSession();
        $session->start();

    	if ($session->get('userRole')=='ROLE_ADMIN'){

            $em = $this->container->get('doctrine')->getManager();
            $postsSignale= $em->getRepository('BabyAdvisorBundle:EstSignale')->findAll();

    		return $this->render(
                'BabyAdvisorBundle:BabyAdvisor:admin.html.twig', 
                array(
                    'posts' => $postsSignale
                    )
                );
    	}
    	elseif ($session->get('userRole')=='ROLE_USER'){
        
    		return $this->render('BabyAdvisorBundle:BabyAdvisor:homeMembre.html.twig');
    	}
    	else{
    		return $this->render(
                'BabyAdvisorBundle:BabyAdvisor:home.html.twig',
                array(
                    'topArticle' => $topArticle,
                    'lastArticle' => $lastArticle
                    )
                );
    	}
        
    }
    public function rechercheAction()
    {
        return $this->render(
            'BabyAdvisorBundle:BabyAdvisor:recherche.html.twig'
            );
    }


    public function signalerArticleAction(Request $request, $idArticle)
    {
        $session = $request->getSession();
         $em = $this->container->get('doctrine')->getManager();
         $form = $this->createForm('BabyAdvisorBundle\Form\Type\signalerType');
         $userId=$session->get('userId');

         if($session->get('userRole')=='ROLE_ADMIN' || $session->get('userRole')=='ROLE_USER'){
             if ($request->isMethod('POST')){
                $form->handleRequest($request);
                if ($form->isValid()){  
                        if($_POST["signaler"]["signaler"]==1){
                            
                            $em2 = $this->container->get('doctrine')->getManager();
                            $articleSignale= $em2->getRepository('BabyAdvisorBundle:Article')->findOneBy(array('id'=>$idArticle));
                            $tabSignale=$em2->getRepository('BabyAdvisorBundle:EstSignale')->findAll();
                            $test=false;

                            if($tabSignale!=null){
                                foreach ($tabSignale as $s) {
                                    if($s->getUser()->getId()==$userId && $s->getIdObject()==$idArticle){
                                        $test=true;
                                        break;
                                    }
                                }
                            }

                            if($test==false){
                                $articleSignale->setSignale(1);
                                $em = $this->getDoctrine()->getManager();
                                $em->persist($articleSignale);
                                $em->flush();
                                $session->getFlashBag()->add('info', 'L\'article a été signalé');
                            }
                            else{
                                $session->getFlashBag()->add('info', 'Vous avez déjà signalé cet article');
                            }   
                            return $this->redirectToRoute('view_article',array(
                                                        'id' => $idArticle ));        
                         }
                         else{
                            $session->getFlashBag()->add('info', 'L\'article n\'a pas été signalé'); 
                            return $this->redirectToRoute('view_article',array(
                                                                 'id' => $idArticle));

                             }

                    }
                }
        }
        else{
             $session->getFlashBag()->add('info', 'Vous devez vous connecter afin de pouvoir signaler un article');return $this->redirectToRoute('login');
        }    

        return $this->render(
            'BabyAdvisorBundle:BabyAdvisor:confirmationSignalement.html.twig',
                array(
                    'form' => $form->createView()
                ));
    }





 public function signalerCommentaireAction(Request $request, $idCommentaire)
    {
        $session = $request->getSession();
         $em = $this->container->get('doctrine')->getManager();
         $form = $this->createForm('BabyAdvisorBundle\Form\Type\signalerType');
         $userId=$session->get('userId');

         if($session->get('userRole')=='ROLE_ADMIN' || $session->get('userRole')=='ROLE_USER'){
             if ($request->isMethod('POST')){
                $form->handleRequest($request);
                if ($form->isValid()){  
                        if($_POST["signaler"]["signaler"]==1){
                            
                            $em2 = $this->container->get('doctrine')->getManager();
                            $commentaireSignale= $em2->getRepository('BabyAdvisorBundle:Commentaire')->findOneBy(array('id'=>$idCommentaire));
                            $tabSignale=$em2->getRepository('BabyAdvisorBundle:EstSignale')->findAll();
                            $test=false;

                            if($tabSignale!=null){
                                foreach ($tabSignale as $s) {
                                    if($s->getUser()->getId()==$userId && $s->getIdObject()==$idCommentaire){
                                        $test=true;
                                        break;
                                    }
                                }
                            }
                    


                            if($test==false){
                                $commentaireSignale->setSignale(1);
                                $em = $this->getDoctrine()->getManager();
                                $em->persist($commentaireSignale);
                                $em->flush();
                                $session->getFlashBag()->add('info', 'Le commentaire a été signalé');
                            }
                            else{
                                $session->getFlashBag()->add('info', 'Vous avez déjà signalé ce commentaire');
                            }   
                            return $this->redirectToRoute('view_article',array(
                                                        'id' => $commentaireSignale->getArticle()->getId()));
       
                         }
                         else{
                            $session->getFlashBag()->add('info', 'Le commentaire n\'a pas été signalé'); 
                            return $this->redirectToRoute('view_article',array(
                                                                 'id' => $commentaireSignale->getArticle()->getId()));

                             }

                    }
                }
        }
        else{
             $session->getFlashBag()->add('info', 'Vous devez vous connecter afin de pouvoir signaler un article');return $this->redirectToRoute('login');
        }    

        return $this->render(
            'BabyAdvisorBundle:BabyAdvisor:confirmationSignalement.html.twig',
                array(
                    'form' => $form->createView()
                ));
    }






    public function viewArticlesAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $articleView = $em->getRepository('BabyAdvisorBundle:Article')->findOneBy(array('id' => $id));
        //exit(dump($articleView));
        return $this->render(
            'BabyAdvisorBundle:BabyAdvisor:viewArticle.html.twig',
            array(
                'article' => $articleView 
                )
            );
    }


    public function ajouterArticleAction(Request $request){
        $session = $request->getSession();

        if($session->get('userRole')=='ROLE_ADMIN' || $session->get('userRole')=='ROLE_USER'){


                        $form = $this->createForm('BabyAdvisorBundle\Form\Type\ajouterArticleType');

                          if ($request->isMethod('POST'))
                        {

                            $form->handleRequest($request);

                            if ($form->isValid())
                            {  

                                if (strlen($_POST['ajouter_article']['cp']) >5 || strlen($_POST['ajouter_article']['cp'])<5) {   
                                        $session->getFlashBag()->add('info', 'le code postal doit contenir 5 chiffres'); 
                                }else{


                                    $em2 = $this->container->get('doctrine')->getManager();
                                    $article = new Article();

                                    $interet = $_POST['ajouter_article']['categories'];
                                    $age = $_POST['ajouter_article']['tranchesAge'];
                                   // $horaires = $_POST['ajouter_article']['horaires'];
                                   // $activites = $_POST['ajouter_article']['activites'];
                                    $listHoraire=array();
                                    $listActivite=array();
                                    $userId=$session->get('userId');
                                    $user= $em2->getRepository('BabyAdvisorBundle:User')->findOneBy(array('id'=>$userId));

                                    if(isset($_POST['ajouter_article']['activites'])){
                                        $activites = $_POST['ajouter_article']['activites'];

                                        foreach($activites as $a)
                                            {                                           
                                                $activite = new Activite();
                                                $activite->setLibelle($a['libelle']);
                                                $activite->setTarif($a['tarif']);
                                                $activite->setArticle($article);
                                                array_push($listActivite, $activite);    
                                                
                                            }

                                            foreach ($listActivite as  $l) {
                                              $article ->addActivite($l);
                                            } 

                                    }    


                                    /*foreach($horaires as $key)
                                        {                 
                                            foreach($key['Jour'] as $jour)
                                            {                                 
                                                    $horaire = new Horaire();
                                                    $horaire->setJour($jour);
                                                    $horaire->setHeureDeb($key['HeureDeb']);
                                                    $horaire->setHeureFin($key['HeureFin']);

                                                    array_push($listHoraire, $horaire);    
                                          }       
                                        }
                                       */ 



                                   // foreach ($listHoraire as  $l) {
                                     //  $article ->addHoraire($l);
                                    //}    

                                               

                                            $where = null;
                                             
                                            if($age!=null){
                                                foreach($age as $id)
                                                {
                                                    if(is_null($where))
                                                    {
                                                        $where = $id;
                                                    }
                                                    else
                                                    {
                                                        $where .= ',' . $id;
                                                    }
                                                }
                                               
                                               
                                                 $age2 = $em2->getRepository('BabyAdvisorBundle:Tranche_age')->findTrancheAgebyId($where);
                                               
                                                foreach ($age2 as  $a) {
                                                    $article ->addTranchesAge($a);
                                                }


                                                 $where = null;
                                            foreach($interet as $id)
                                            {
                                                if(is_null($where))
                                                {
                                                    $where = $id;
                                                }
                                                else
                                                {
                                                    $where .= ',' . $id;
                                                }
                                            }
                                            
                                             $interet2 = $em2->getRepository('BabyAdvisorBundle:Centre_interet')->findCentreInteretbyId($where);

                                             foreach ($interet2 as  $in) {
                                                $article ->addCategory($in);
                                            }

                                         //   $dateCurrent=date("YYYY-MM-DD H:i:s"); 
                                           //$dateCurrent2 = \DateTime::createFromFormat('YYYY-MM-DD', $dateCurrent);

                                            $photo= new Photo();
                                            $photo->setArticle($article);
                                         

                                            $article->setTitre($_POST['ajouter_article']['titre']);
                                            $article->setAdresse($_POST['ajouter_article']['adresse']);
                                            $article->setDescription($_POST['ajouter_article']['description']);
                                            $article->setVille($_POST['ajouter_article']['ville']);
                                            $article->setCP($_POST['ajouter_article']['cp']);
                                            $article->setSignale(false);
                                            $article->setUser($user);
                                            $article->addPhoto($photo);

                                            $em = $this->getDoctrine()->getManager();
                                            $em->persist($article);
                                            $em->flush();

                                             $session->getFlashBag()->add('info', 'Votre nouvel article a bien été rajouté'); 
                                            return $this->redirectToRoute('homepage');


                                        }

                                    }
                            }
                        }        


                        return $this->render(
                            'BabyAdvisorBundle:BabyAdvisor:ajouterArticle.html.twig',
                                array(
                                    'form' => $form->createView()
                                ));


                    }//fin if role
                    else{
                        $session->getFlashBag()->add('info', 'Vous devez vous connecter afin d\'ajouter un nouvel article'); 
                        return $this->redirectToRoute('login');
                    }

    }


         public function noterArticleAction(Request $request, $idArticle){
        $session = $request->getSession();
        if($session->get('userRole')=='ROLE_ADMIN' || $session->get('userRole')=='ROLE_USER'){
                        $form = $this->createForm('BabyAdvisorBundle\Form\Type\noterArticleType');
                          if ($request->isMethod('POST'))
                        {
                            $form->handleRequest($request);
                            if ($form->isValid())
                            {  
                                if ($_POST['noter_article']['proprete']<0 && $_POST['noter_article']['proprete']>5 && $_POST['noter_article']['accessibilite']<0 && $_POST['noter_article']['accessibilite']>5 && $_POST['noter_article']['encadrement']<0 && $_POST['noter_article']['encadrement']>5 && $_POST['noter_article']['ambiance']<0 && $_POST['noter_article']['ambiance']>5 && $_POST['noter_article']['equipement']<0 && $_POST['noter_article']['equipement']>5) {   
                                        $session->getFlashBag()->add('info', 'Les notes doivent être comprises entre 0 et 5'); 
                                }else{
                                    $em2 = $this->container->get('doctrine')->getManager();
                                    $note = new Notation();
                                    $userId=$session->get('userId');
                                    $user= $em2->getRepository('BabyAdvisorBundle:User')->findOneBy(array('id'=>$userId));
                                    $article= $em2->getRepository('BabyAdvisorBundle:Article')->findOneBy(array('id'=>$idArticle));
                                    $tabNotation=$em2->getRepository('BabyAdvisorBundle:Notation')->findAll();
                                   // dump($tabNotation);
                                    
                                    $test=false;

                                     if($tabCommentaire!=null){
                                        foreach ($tabNotation as $n) {
                                            if($n->getUser()->getId()==$userId && $n->getArticle()->getId()==$idArticle){
                                                $test=true;
                                                break;
                                            }
                                            
                                        }
                                    }
                                   // die();
                                    if($test==false){
                                    
                                    $note->setProprete($_POST['noter_article']['proprete']);
                                    $note->setAccessibilite($_POST['noter_article']['accessibilite']);
                                    $note->setEncadrement($_POST['noter_article']['encadrement']);
                                    $note->setAmbiance($_POST['noter_article']['ambiance']);
                                    $note->setEquipement($_POST['noter_article']['equipement']);
                                    $note->setUser($user);
                                    $note->setArticle($article);
                                    $em = $this->getDoctrine()->getManager();
                                    $em->persist($note);
                                    $em->flush();
                                     $session->getFlashBag()->add('info', 'Vos notes ont bien été prises en compte'); 
                                     //return $this->redirectToRoute('view_article', array('id' => $idArticle));
                                     
                                        
                                      }
                                      else{
                                         $session->getFlashBag()->add('info', 'Vous avez déjà voté pour cet article'); 
                                      }
                                            return $this->redirectToRoute('view_article',
                                                    array(
                                                        'id' => $idArticle
                                                    ));
                                        }
 
                                }
                            }
                                
                        return $this->render(
                            'BabyAdvisorBundle:BabyAdvisor:noterArticle.html.twig',
                                array(
                                    'form' => $form->createView()
                                ));
        }//fin if role
        else{
            $session->getFlashBag()->add('info', 'Vous devez vous connecter afin de noter un article'); 
            return $this->redirectToRoute('login');
        }
    }


 public function commenterArticleAction(Request $request, $idArticle){

        $session = $request->getSession();

        if($session->get('userRole')=='ROLE_ADMIN' || $session->get('userRole')=='ROLE_USER'){


                        $form = $this->createForm('BabyAdvisorBundle\Form\Type\commenterArticleType');

                          if ($request->isMethod('POST'))
                        {

                            $form->handleRequest($request);

                            if ($form->isValid())
                            {  

                                    $em2 = $this->container->get('doctrine')->getManager();
                                    $commentaire = new Commentaire();
                                    $userId=$session->get('userId');
                                    $user= $em2->getRepository('BabyAdvisorBundle:User')->findOneBy(array('id'=>$userId));

                                    $article= $em2->getRepository('BabyAdvisorBundle:Article')->findOneBy(array('id'=>$idArticle));

                                    $tabCommentaire=$em2->getRepository('BabyAdvisorBundle:Commentaire')->findAll();
                                    

                                    $test=false;

                                    if($tabCommentaire!=null){

                                        foreach ($tabCommentaire as $c) {
                                            if($c->getUser()->getId()==$userId && $c->getArticle()->getId()==$idArticle){
                                                $test=true;
                                                break;

                                            }
                                            
                                        }

                                    }

                                    if($test==false){

                                    
                                    $commentaire->setTexte($_POST['commenter_article']['texte']);
                                    $commentaire->setSignale(false);
                                    $commentaire->setUser($user);
                                    $commentaire->setArticle($article);

                                    $em = $this->getDoctrine()->getManager();
                                    $em->persist($commentaire);
                                    $em->flush();

                                     $session->getFlashBag()->add('info', 'Votre commentaire a bien été pris en compte'); 


                                     //return $this->redirectToRoute('view_article', array('id' => $idArticle));
                                     
                                        
                                      }
                                      else{
                                         $session->getFlashBag()->add('info', 'Vous avez déjà commenté cet article'); 

                                      }

                                            return $this->redirectToRoute('view_article',
                                                    array(
                                                        'id' => $idArticle
                                                    ));
                                        }
 
                                
                            }
                                


                        return $this->render(
                            'BabyAdvisorBundle:BabyAdvisor:commenterArticle.html.twig',
                                array(
                                    'form' => $form->createView()
                                ));


        }//fin if role
        else{
            $session->getFlashBag()->add('info', 'Vous devez vous connecter afin de noter un article'); 
            return $this->redirectToRoute('login');
        }

    }




    public function viewActivitiesAction()
    {
        $em = $this->container->get('doctrine')->getManager();
        $allArticle = $em->getRepository('BabyAdvisorBundle:Article')->findAll();
        $allActivite = $em->getRepository('BabyAdvisorBundle:Activite')->findBy(array(), array('Article' => 'ASC', 'Libelle' => 'ASC'));
        //exit(dump($allActivite));
        return $this->render(
            'BabyAdvisorBundle:BabyAdvisor:viewActivities.html.twig',
            array(
                'activite' => $allActivite,
                'article' => $allArticle
                )
            );
    }


    public function modifierCommentaireAction(Request $request,$idArticle, $idCommentaire){

        $session = $request->getSession();
        
        $em2 = $this->container->get('doctrine')->getManager();
        $commentaire= $em2->getRepository('BabyAdvisorBundle:Commentaire')->findOneBy(array('id'=>$idCommentaire));

        $form = $this->createForm('BabyAdvisorBundle\Form\Type\commenterArticleType', $commentaire);
        
        if ($request->isMethod('POST'))
        {
                $form->handleRequest($request);
                if ($form->isValid())
                {  
                    $commentaire->setTexte($_POST['commenter_article']['texte']);
                    $em2->persist($commentaire);
                    $em2->flush();

                    $session->getFlashBag()->add('info', 'Votre commentaire a bien été modifié');

                    return $this->redirectToRoute('view_article', array(
                                                                'id' => $idArticle )); 
                }
        }

        return $this->render('BabyAdvisorBundle:BabyAdvisor:commenterArticle.html.twig',
                                array(
                                    'form' => $form->createView()
                                ));
    }

    public function modifierArticleAction(Request $request,$idArticle){

        $session = $request->getSession();
        
        $em2 = $this->container->get('doctrine')->getManager();
        $article= $em2->getRepository('BabyAdvisorBundle:Article')->findOneBy(array('id'=>$idArticle));

        $form = $this->createForm('BabyAdvisorBundle\Form\Type\ajouterArticleType', $article);

        if ($request->isMethod('POST'))
                        {

                            $form->handleRequest($request);

                            if ($form->isValid())
                            {  

                                if (strlen($_POST['ajouter_article']['cp']) >5 || strlen($_POST['ajouter_article']['cp'])<5) {   
                                        $session->getFlashBag()->add('info', 'le code postal doit contenir 5 chiffres'); 
                                }else{


                                    $em2 = $this->container->get('doctrine')->getManager();

                                    $interet = $_POST['ajouter_article']['categories'];
                                    $age = $_POST['ajouter_article']['tranchesAge'];
                                   // $activites = $_POST['ajouter_article']['activites'];
                                    $listHoraire=array();
                                    $listActivite=array();
                                    $userId=$session->get('userId');
                                    $user= $em2->getRepository('BabyAdvisorBundle:User')->findOneBy(array('id'=>$userId));
                                    $articleModifie=new Article();

                                     if(isset($_POST['ajouter_article']['activites'])){
                                        $activites = $_POST['ajouter_article']['activites'];

                                        foreach($activites as $a)
                                            {                                           
                                                $activite = new Activite();
                                                $activite->setLibelle($a['libelle']);
                                                $activite->setTarif($a['tarif']);
                                                $activite->setArticle($article);
                                                array_push($listActivite, $activite);    
                                                
                                            }

                                            foreach ($listActivite as  $l) {
                                              $articleModifie->addActivite($l);
                                            }    
                                    }    


                                            $where = null;
                                             
                                            if($age!=null){
                                                foreach($age as $id)
                                                {
                                                    if(is_null($where))
                                                    {
                                                        $where = $id;
                                                    }
                                                    else
                                                    {
                                                        $where .= ',' . $id;
                                                    }
                                                }
                                               
                                               
                                                 $age2 = $em2->getRepository('BabyAdvisorBundle:Tranche_age')->findTrancheAgebyId($where);
                                               
                                                foreach ($age2 as  $a) {
                                                    $articleModifie->addTranchesAge($a);
                                                }


                                                 $where = null;
                                            foreach($interet as $id)
                                            {
                                                if(is_null($where))
                                                {
                                                    $where = $id;
                                                }
                                                else
                                                {
                                                    $where .= ',' . $id;
                                                }
                                            }
                                            
                                             $interet2 = $em2->getRepository('BabyAdvisorBundle:Centre_interet')->findCentreInteretbyId($where);

                                             foreach ($interet2 as  $in) {
                                                $articleModifie->addCategory($in);
                                            }
                                         

                                            $articleModifie->setTitre($_POST['ajouter_article']['titre']);
                                            $articleModifie->setAdresse($_POST['ajouter_article']['adresse']);
                                            $articleModifie->setDescription($_POST['ajouter_article']['description']);
                                            $articleModifie->setVille($_POST['ajouter_article']['ville']);
                                            $articleModifie->setCP($_POST['ajouter_article']['cp']);
                                            $articleModifie->setSignale($article->getSignale());
                                            $articleModifie->setUser($user);


                                            $activiteSupp=$article->getActivites();


                                            $em = $this->getDoctrine()->getManager();
                                            $em3 = $this->container->get('doctrine')->getManager();

                                            if(isset($activiteSupp)){
                                                 $em3->remove($activiteSupp);
                                            }

                                            $em->remove($article);
                                            $em->persist($articleModifie);
                                            $em->flush();

                                             $session->getFlashBag()->add('info', 'Votre article a bien été modifié'); 
                                            return $this->redirectToRoute('view_article', array(
                                                                'id' => $articleModifie->getId())); 


                                        }

                                    }
                            }
                        }  

         return $this->render('BabyAdvisorBundle:BabyAdvisor:ajouterArticle.html.twig',
                                array(
                                    'form' => $form->createView()
                                ));
    }     

}
