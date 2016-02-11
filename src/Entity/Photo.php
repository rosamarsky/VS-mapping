<?php

namespace DashboardBundle\Entity;

/**
 * Photo
 */
class Photo
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
    private $url;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set salon
     *
     * @param Salon $salon
     *
     * @return Photo
     */
    public function setSalon($salon)
    {
        $this->salon = $salon;

        return $this;
    }

    /**
     * Get salon
     *
     * @return Salon
     */
    public function getSalon()
    {
        return $this->salon;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Photo
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
    /**
     * Get url
     *
     * @return string
     */
    public function getName()
    {
        return $this->url;
    }
}

