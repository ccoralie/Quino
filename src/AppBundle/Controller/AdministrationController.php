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


class AdministrationController extends Controller

{
/**
 * @route("/admin", name="admin_home")
 *
 */
    public function adminAccueilAction(Request $request)
    {
        return $this->render('Administration/AdminLayout.html.twig', array(
            'user'=>$this->getUser()
        ));
    }
}