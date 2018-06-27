<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 20/06/18
 * Time: 21:45
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * @route("/admin")
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
     * @route("carte/image", name="carte_images")
     */

    public function imagesCarteAction(Request $request)
    {

    }

    /**
     * @route("Acceuil/Diapo", name="acceuil_diapo")
     */

    public function diapoAcceuilAction(Request $request)
    {

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