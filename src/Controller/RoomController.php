<?php
/**
 * User: doug
 * Date: 20/01/18
 * Time: 21:47
 */

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Room;

class RoomController extends Controller
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/rooms", name="rooms_index")
     */
    public function indexAction()
    {
        return $this->render("rooms/index.html.twig", [
            "rooms" => $this->em->getRepository(Room::class)->findBy([
                "isActive" => true
            ])
        ]);
    }

    /**
     * @Route("/rooms/{name}", name="rooms_view")
     */
    public function viewAction($name)
    {
        return $this->render("rooms/view.html.twig", [
            "room" => $this->em->getRepository(Room::class)->findOneBy([
                "name" => $name
            ])
        ]);
    }
}