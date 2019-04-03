<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * rooms
 *
 * @ORM\Table(name="rooms")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\roomsRepository")
 */
class rooms
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="roomnumber", type="integer")
     */
    private $roomnumber;

    /**
     * @var int
     *
     * @ORM\Column(name="roomprice", type="integer")
     */
    private $roomprice;

    /**
     * @var string
     *
     * @ORM\Column(name="roomstatus", type="string", length=255)
     */
    private $roomstatus;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set roomnumber
     *
     * @param integer $roomnumber
     *
     * @return rooms
     */
    public function setRoomnumber($roomnumber)
    {
        $this->roomnumber = $roomnumber;

        return $this;
    }

    /**
     * Get roomnumber
     *
     * @return int
     */
    public function getRoomnumber()
    {
        return $this->roomnumber;
    }

    /**
     * Set roomprice
     *
     * @param integer $roomprice
     *
     * @return rooms
     */
    public function setRoomprice($roomprice)
    {
        $this->roomprice = $roomprice;

        return $this;
    }

    /**
     * Get roomprice
     *
     * @return int
     */
    public function getRoomprice()
    {
        return $this->roomprice;
    }

    /**
     * Set roomstatus
     *
     * @param string $roomstatus
     *
     * @return rooms
     */
    public function setRoomstatus($roomstatus)
    {
        $this->roomstatus = $roomstatus;

        return $this;
    }

    /**
     * Get roomstatus
     *
     * @return string
     */
    public function getRoomstatus()
    {
        return $this->roomstatus;
    }
}

