<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 20/06/18
 * Time: 21:45
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Diapo_Accueil;
use AppBundle\Entity\DiapoCarte;
use AppBundle\Form\Diapo_AccueilType;
use AppBundle\Form\DiapoCarteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * @route("admin")
 *
 */

class AdministrationController extends Controller

{
    /**
     * @route("/", name="admin_home")
     *
     */
    public function adminAccueilAction(Request $request)
    {
        return $this->render('Administration/AdminLayout.html.twig', array(
            'user'=>$this->getUser()
        ));
    }

    /**
     * @route("carte/plats", name="carte_plats")
     */

    public function listPlatsCarteAction(Request $request)
    {

    }

    /**
     * @route("/Carte/Diapos", name="carte_diapo")
     */

    public function imagesCarteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $createDiapo = new DiapoCarte();
        $form = $this->createForm(DiapoCarteType::class, $createDiapo);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($createDiapo);
            $em->flush();
        }
        $diapos = $em->getRepository(DiapoCarte::class)->findAll();

        return $this->render('Administration/diapocarteAdmin/index.html.twig', array(
            'diapos' => $diapos,
            'form' => $form->createView(),
        ));
    }

    /**
     * @route("/Accueil/Diapos", name="accueil_diapo")
     */

    public function diapoAccueilAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $createDiapo = new Diapo_Accueil();
        $form = $this->createForm(Diapo_AccueilType::class, $createDiapo);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($createDiapo);
            $em->flush();
        }
        $diapos = $em->getRepository(Diapo_Accueil::class)->findAll();

        return $this->render('Administration/diapoaccueilAdmin/index.html.twig', array(
            'diapos' => $diapos,
            'form' => $form->createView(),
        ));
    }

    /**
     * @route("Acceuil/Articles", name="acceuil_articles")
     */

    public function articleAcceuilAction(Request $request)
    {

    }

    /**
     * @route("Info", name="infos")
     */

    public function InfoAction(Request $request)
    {

    }

    /**
     * @route("multilingue/ajouter", name="carte_images")
     */

    public function ajouterMultilingueAction(Request $request)
    {

    }

    /**
     * @route("multilingue/editer", name="carte_images")
     */

    public function editerMultilingueAction(Request $request)
    {

    }
}