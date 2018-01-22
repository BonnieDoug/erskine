<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Image;

class IndexController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $images = $this->getDoctrine()->getRepository(Image::class)->findBy(["isActive" => true, "isFeatured" => true]);
        return $this->render('index.html.twig', [
            'images' => $images
        ]);
    }
}
