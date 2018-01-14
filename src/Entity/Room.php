<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoomRepository")
 */
class Room
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $number;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $html;

    /**
     * @ORM\OneToMany(targetEntity="Image")
     * @var \App\Entity\Image
     */
    private $images;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     * @var null
     */
    private $updatedAt = null;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $isRetired = false;

}
