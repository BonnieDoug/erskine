<?php
/**
 * User: doug
 * Date: 20/01/18
 * Time: 14:24
 */

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Room;

class Navigation
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getRooms(){
        return $this->em->getRepository(Room::class)->findBy(["isActive" => true, "isBookable" => true]);
    }
}