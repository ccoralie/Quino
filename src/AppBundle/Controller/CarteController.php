<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Carte;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CarteController extends Controller
{
    /**
     * @Route("/carte", name="carte")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $categories =$em->getRepository('AppBundle:Categorie')->findAll();

        $diapos = $em->getRepository('AppBundle:DiapoCarte')->findAll();


        // replace this example code with whatever you need
        return $this->render('Carte/Carte.html.twig', [
            'categories' => $categories,
            'diapos' => $diapos,
        ]);
    }


}


