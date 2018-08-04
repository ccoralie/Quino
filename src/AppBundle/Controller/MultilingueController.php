<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ArticleUE;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MultilingueController extends Controller
{
    /**
     * @Route("/multilingue", name="multilingue")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $multilingue = $em->getRepository(ArticleUE::class)->findAll();
        return $this->render('Multilingue/Multilingue.html.twig', array(
            'multilingue' => $multilingue
        ));
    }
}
