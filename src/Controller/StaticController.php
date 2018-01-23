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
     * @Route("/services", name="services")
     */
    public function servicesAction()
    {
        return $this->render("services.html.twig");
    }

    /**
     * @Route("/history", name="history")
     */
    public function historyAction()
    {
        return $this->render("history.html.twig");
    }

}