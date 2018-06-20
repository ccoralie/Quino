<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MultilingueController extends Controller
{
    /**
     * @Route("/multilingue", name="multilingue")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Multilingue/Multilingue.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
