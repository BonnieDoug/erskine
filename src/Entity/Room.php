<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
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
     * @ORM\Column(type="integer", nullable=true)
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
     * @ORM\Column(type="integer", nullable=true)
     * @var integer
     */
    private $sleepsMin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @var integer
     */
    private $sleepsMax;

    /**
     * @ORM\OneToOne(targetEntity="Image")
     * @var \App\Entity\Image
     */
    private $defaultImage;

    /**
     * @ORM\OneToMany(targetEntity="Image", mappedBy="room")
     * @var \App\Entity\Image
     */
    private $images;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var null
     */
    private $updatedAt = null;

    /**
     * @ORM\Column(name="price_from", type="decimal", scale=2, precision=6)
     */
    private $priceFrom;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $isActive = false;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $isBookable = true;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="rooms")
     */
    private $createdBy;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $updatedBy = null;

    /**
     * Room constructor.
     * @param Image $images
     */
    public function __construct(Image $images)
    {
        $this->images = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return Room
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Room
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Room
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * @param string $html
     * @return Room
     */
    public function setHtml($html)
    {
        $this->html = $html;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultImage()
    {
        return $this->defaultImage;
    }

    /**
     * @param mixed $defaultImage
     * @return Room
     */
    public function setDefaultImage($defaultImage)
    {
        $this->defaultImage = $defaultImage;
        return $this;
    }

    /**
     * @return Image
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param Image $images
     * @return Room
     */
    public function setImages($images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Room
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @return null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param null $updatedAt
     * @return Room
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updatedAt = new \DateTime();
        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param boolean $isActive
     * @return Room
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return int
     */
    public function getSleepsMin()
    {
        return $this->sleepsMin;
    }

    /**
     * @param int $sleepsMin
     * @return Room
     */
    public function setSleepsMin($sleepsMin)
    {
        $this->sleepsMin = $sleepsMin;
        return $this;
    }

    /**
     * @return int
     */
    public function getSleepsMax()
    {
        return $this->sleepsMax;
    }

    /**
     * @param int $sleepsMax
     * @return Room
     */
    public function setSleepsMax($sleepsMax)
    {
        $this->sleepsMax = $sleepsMax;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsBookable()
    {
        return $this->isBookable;
    }

    /**
     * @param boolean $isBookable
     * @return Room
     */
    public function setIsBookable($isBookable)
    {
        $this->isBookable = $isBookable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $createdBy
     * @return Room
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param boolean $updatedBy
     * @return Room
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceFrom()
    {
        return $this->priceFrom;
    }

    /**
     * @param mixed $priceFrom
     * @return Room
     */
    public function setPriceFrom($priceFrom)
    {
        $this->priceFrom = $priceFrom;
        return $this;
    }

}
