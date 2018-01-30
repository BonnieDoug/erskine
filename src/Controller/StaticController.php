<?php
/**
 * User: doug
 * Date: 23/01/18
 * Time: 23:05
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class StaticController extends Controller
{

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render("contact.html.twig");
    }

    /**
     * @Route("/business-stay", name="business-stay")
     */
    public function businessStayAction()
    {
        return $this->render("business-stay.html.twig");
    }

    /**
     * @Route("/about", name="about")
     */
    public function historyAction()
    {
        return $this->render("about.html.twig");
    }

    /**
     * @Route("/location", name="location")
     */
    public function locationAction()
    {
        return $this->render("location.html.twig");
    }

}