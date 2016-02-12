<?php

namespace Vs\Entity;

/**
 * Special
 */
class Special
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
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $fromDate;

    /**
     * @var \DateTime
     */
    private $toDate;

    /**
     * @var string
     */
    private $image;

    /**
     * @var bool
     */
    private $isExpired;


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
     * Set title
     *
     * @param string $title
     *
     * @return Special
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Set description
     *
     * @param string $description
     *
     * @return Special
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set fromDate
     *
     * @param \DateTime $fromDate
     *
     * @return Special
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * Get fromDate
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * Set toDate
     *
     * @param \DateTime $toDate
     *
     * @return Special
     */
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;

        return $this;
    }

    /**
     * Get toDate
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Special
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set isExpired
     *
     * @param boolean $isExpired
     *
     * @return Special
     */
    public function setIsExpired($isExpired)
    {
        $this->isExpired = $isExpired;

        return $this;
    }

    /**
     * Get isExpired
     *
     * @return bool
     */
    public function getIsExpired()
    {
        return $this->isExpired;
    }

    /**
     * @return Salon
     */
    public function getSalon()
    {
        return $this->salon;
    }

    /**
     * @param Salon $salon
     */
    public function setSalon($salon)
    {
        $this->salon = $salon;
    }
}

