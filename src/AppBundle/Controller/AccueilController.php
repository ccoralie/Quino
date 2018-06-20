<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Diapo_Accueil;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccueilController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function AccueilAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $diapos = $em->getRepository(Diapo_Accueil::class)->findAll();
        return $this->render('Accueil/Accueil.html.twig', array(
            'diapos' => $diapos
        ));
    }
}
