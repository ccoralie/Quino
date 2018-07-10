<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 20/06/18
 * Time: 21:45
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Articles;
use AppBundle\Entity\Carte;
use AppBundle\Entity\Conges;
use AppBundle\Entity\Diapo_Accueil;
use AppBundle\Entity\DiapoCarte;
use AppBundle\Form\CongesType;
use AppBundle\Form\Diapo_AccueilType;
use AppBundle\Form\DiapoCarteType;
use AppBundle\Form\ArticleType;
use AppBundle\Form\CarteType;
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
    public function adminAction(Request $request)
    {
        return $this->render('Administration/AdminLayout.html.twig', array(
            'user'=>$this->getUser()
        ));
    }

    /** ADMINISTRTION METHODES PAGE ACCUEIL */


    /**
     * @route("/accueil/article/new", name="admin_accueil_article_new")
     */

    public function adminAccueilArticleNewAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $article = New Articles();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
            $em->persist($article);
            $em->flush();
            return $this->redirectToRoute('admin_accueil_article_list');
        }

        return $this->render('Administration/ArticlesAccueil/new.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    /**
     * @route("/accueil/article/list", name="admin_accueil_article_list")
     */

    public function adminAccueilArticleListAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository(Articles::class)->findAll();

        return $this->render('Administration/ArticlesAccueil/show.html.twig', array(
            'articles'=>$articles
        ));
    }

    /**
     * @route("/accueil/article/edit/{id}", name="admin_accueil_article_edit")
     */

    public function adminAccueilArticleEditAction(Request $request, Articles $article){
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
            $em->persist($article);
            $em->flush();
        }

        return $this->render('Administration/ArticlesAccueil/edit.html.twig', array(
            'form'=>$form->createView(),
            'article'=>$article
        ));
    }

    /**
     * @route("/accueil/article/delete/{id}", name="admin_accueil_article_delete")
     */
    public function adminAccueilArticleDeleteAction(Request $request, Articles $article){
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();

        return $this->redirectToRoute('admin_accueil_article_list');
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

    /** ADMINISTRTION METHODES PAGE CARTE */


    /**
     * @route("/carte/plat/new", name="admin_carte_plat_new")
     */

    public function adminCartePlatNewAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $plat = New Carte();
        $form = $this->createForm(CarteType::class, $plat);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
            $em->persist($plat);
            $em->flush();
            return $this->redirectToRoute('admin_carte_plats_list');
        }

        return $this->render('Administration/PlatsCarte/new.html.twig', array(
            'form'=>$form->createView()
        ));
    }



    /**
     * @route("/carte/plats/list", name="admin_carte_plats_list")
     */

    public function listPlatsCarteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $plats = $em->getRepository(Carte::class)->findAll();

        return $this->render('Administration/PlatsCarte/show.html.twig', array(
            'plats'=>$plats
        ));
    }

    /**
     * @route("/carte/plat/edit/{id}", name="admin_carte_plat_edit")
     */

    public function adminCartePlatsEditAction(Request $request, Carte $plats){
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(CarteType::class, $plats);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
            $em->persist($plats);
            $em->flush();
        }

        return $this->render('Administration/PlatsCarte/edit.html.twig', array(
            'form'=>$form->createView(),
            'article'=>$plats
        ));
    }

    /**
     * @route("/carte/plat/delete/{id}", name="admin_carte_plat_delete")
     */
    public function adminCartePlatDeleteAction(Request $request, Carte $plat){
        $em = $this->getDoctrine()->getManager();
        $em->remove($plat);
        $em->flush();

        return $this->redirectToRoute('admin_carte_plats_list');
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
     * @route("Acceuil/Articles", name="acceuil_articles")
     */

    public function articleAcceuilAction(Request $request)
    {

    }

    /** GESTION DES CONGES
     * @route("/conges", name="conges")
     */

    public function CongesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $conges = $em->getRepository(Conges::class)->findAll()[0];
        $form = $this->createForm(CongesType::class,$conges);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
            $em->persist($conges);
            $em->flush();
            $this->addFlash('success', 'Modifications prises en compte.');
        }
        return $this->render('Administration/Conges/conges.html.twig', array(
            'form'=>$form->createView()
        ));
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