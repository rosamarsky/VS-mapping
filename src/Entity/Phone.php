<?php

namespace DashboardBundle\Entity;

/**
 * Phone
 */
class Phone
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Salon
     */
    private $salon;

    /**
     * @var string
     */
    private $phone;


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
     * Set phone
     *
     * @param string $phone
     *
     * @return Phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return Salon
     */
    public function getSalon()
    {
        return $this->salon;
    }

    /**
     * @param int $salon
     */
    public function setSalon($salon)
    {
        $this->salon = $salon;
    }
}
