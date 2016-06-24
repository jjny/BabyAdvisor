<?php

namespace BabyAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BabyAdvisorBundle\Entity\User;
use BabyAdvisorBundle\Entity\Tranche_age;
use BabyAdvisorBundle\Entity\Centre_interet;
use BabyAdvisorBundle\Repository;

class RechercheController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {

        $em = $this->container->get('doctrine')->getManager();   
        $form = $this->createForm('BabyAdvisorBundle\Form\Type\rechercheType');

        $session = $request->getSession();
        $session->start();

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {
                /* ---------------------------- POST ------------------------------------- */
                $em = $this->container->get('doctrine')->getManager();
                $searchArticle = $em->getRepository('BabyAdvisorBundle:Article')->findAll();

                // =====================    Code postal        =================================
                $cp = isset($_POST['recherche']['cp']) ? $_POST['recherche']['cp'] : NULL;
                $cpDepartement = substr($cp, 0, 2);

                // =====================    Tranche d'âge          =================================
                $trancheAge = isset($_POST['recherche']['trancheAge']) ? $_POST['recherche']['trancheAge'] : NULL;
                $trancheAgeArray = '';

                if($trancheAge){
                    foreach ($trancheAge as $key => $value) {
                        $trancheAgeArray .= $value;

                        if($key !== count($trancheAge)-1) {
                            $trancheAgeArray.= ',';
                        }
                    }
                }

                // =====================    Centre d'interêts        =================================
                $centreInteret = isset($_POST['recherche']['centreInterets']) ? $_POST['recherche']['centreInterets'] : NULL;
                $centreInteretArray = '';

                if($centreInteret){
                    foreach ($centreInteret as $key => $value) {
                        $centreInteretArray .= $value;

                        if($key !== count($centreInteret)-1) {
                            $centreInteretArray .= ',';
                        }
                    }
                }

                $filterItems = array();

                /* ---------------------------- FILTERS  ------------------------------------- */
                // ======================== FILTER BY CP ============================== //
                foreach ($searchArticle as $key => $value) {
                    if($searchArticle > 1) {
                        $cpCondition = $value->getCP() === $cp;
                    } else {
                        $cpCondition = preg_match('/'.$cpDepartement.'/', $value->getCP());
                    }

                    if($cpCondition) {
                        array_push($filterItems,$searchArticle[$key]);

                    } elseif(!($cp)) {
                        array_push($filterItems,$searchArticle[$key]);
                    }  
                }

                // ======================== FILTER BY Tranche âge ============================== //
                $filterItemsTrancheAge = array();  
                $idCourant = 0;              
                if($trancheAge) {     
                    $tranchesAges = explode(",", $trancheAgeArray);       
                    foreach ($filterItems as $keyItem => $valueItem) {
                        foreach ($valueItem->getTranchesAge() as $keyTrancheAge => $valueTrancheAge) {
                            foreach ($tranchesAges as $keyTranchesAges => $valueTranchesAges) {               
                                if($valueTrancheAge->getId() == $valueTranchesAges ) {
                                    array_push($filterItemsTrancheAge, $filterItems[$keyItem]);   
                                    $idCourant ++;
                                    break;   
                                }
                            }

                            if(count($filterItemsTrancheAge) == $idCourant) {
                                break;
                            }
                        }
                    } 
                    $filterItems = $filterItemsTrancheAge;
                }

                // ======================== FILTER BY Catégorie ============================== //
                $filterItemsCategorie = array();  
                $idCourantCategorie = 0;              
                if($centreInteret) {
                    $centresInterets = explode(",", $centreInteretArray);      
                    foreach ($filterItems as $keyItem => $valueItem) {
                        foreach ($valueItem->getCategories() as $keyCentreInteret => $valueCentreInteret) {
                            foreach ($centresInterets as $keyCentresInterets => $valueCentresInterets) {
                                if($valueCentreInteret->getId() == $valueCentresInterets ) {
                                    array_push($filterItemsCategorie, $filterItems[$keyItem]);   
                                    $idCourantCategorie ++;
                                    break;   
                                }
                            }

                            if(count($filterItemsCategorie) == $idCourantCategorie) {
                                break;
                            }
                        }
                    } 
                    $filterItems = $filterItemsCategorie;
                }

                $session = $request->getSession();
                $session->start();

                return $this->render(
                    'BabyAdvisorBundle:BabyAdvisor:recherche.html.twig',
                    array(
                        'form' => $form->createView(),
                        'searchArticle' => $filterItems
                    )
                );
            }      
        }

        return $this->render(
            'BabyAdvisorBundle:BabyAdvisor:recherche.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

  
}