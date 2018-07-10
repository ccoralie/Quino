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
        $cartes = $em->getRepository('AppBundle:Carte')->findAll();

        // replace this example code with whatever you need
        return $this->render('Carte/Carte.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'cartes' => $cartes,
            'categories' => $categories,
        ]);
    }


}


