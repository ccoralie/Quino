<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Conges;

class InfosPratiquesController extends Controller
{
    /**
     * @Route("/infos", name="infos_pratiques")
     */
    public function indexAction(Request $request)
    {
        $em= $this->getDoctrine()->getManager();
        $conges = $em->getRepository(Conges::class)->findAll();


        // replace this example code with whatever you need
        return $this->render('InfosPratiques/InfosPratiques.html.twig', [
            'conges' => $conges,
        ]);
    }
}
