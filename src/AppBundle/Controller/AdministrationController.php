<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 20/06/18
 * Time: 21:45
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Articles;
use AppBundle\Entity\Diapo_Accueil;
use AppBundle\Form\ArticleType;
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
     * @route("/Accueil/Diapos", name="accueil_diapo")
     */

    public function diapoAccueilAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $diapos = $em->getRepository(Diapo_Accueil::class)->findAll();
        return $this->render('Administration/diapoaccueilAdmin/index.html.twig', array(
            'diapos' => $diapos
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