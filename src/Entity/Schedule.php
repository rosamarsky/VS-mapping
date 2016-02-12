<?php

namespace Vs\Entity;

/**
 * Schedule
 */
class Schedule
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
     * @var int
     */
    private $dayId;

    /**
     * @var \DateTime
     */
    private $workFrom;

    /**
     * @var \DateTime
     */
    private $workTo;

    /**
     * @var \DateTime
     */
    private $breakFrom;

    /**
     * @var \DateTime
     */
    private $breakTo;

    /**
     * @var int
     */
    private $isDayOff;


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
     * Set salon
     *
     * @param integer $salon
     *
     * @return Schedule
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
     * Set dayId
     *
     * @param integer $dayId
     *
     * @return Schedule
     */
    public function setDayId($dayId)
    {
        $this->dayId = $dayId;

        return $this;
    }

    /**
     * Get dayId
     *
     * @return int
     */
    public function getDayId()
    {
        return $this->dayId;
    }

    /**
     * Set workFrom
     *
     * @param \DateTime $workFrom
     *
     * @return Schedule
     */
    public function setWorkFrom($workFrom)
    {
        $this->workFrom = $workFrom;

        return $this;
    }

    /**
     * Get workFrom
     *
     * @return \DateTime
     */
    public function getWorkFrom()
    {
        return $this->workFrom;
    }

    /**
     * Set workTo
     *
     * @param \DateTime $workTo
     *
     * @return Schedule
     */
    public function setWorkTo($workTo)
    {
        $this->workTo = $workTo;

        return $this;
    }

    /**
     * Get workTo
     *
     * @return \DateTime
     */
    public function getWorkTo()
    {
        return $this->workTo;
    }

    /**
     * Set breakFrom
     *
     * @param \DateTime $breakFrom
     *
     * @return Schedule
     */
    public function setBreakFrom($breakFrom)
    {
        $this->breakFrom = $breakFrom;

        return $this;
    }

    /**
     * Get breakFrom
     *
     * @return \DateTime
     */
    public function getBreakFrom()
    {
        return $this->breakFrom;
    }

    /**
     * Set breakTo
     *
     * @param \DateTime $breakTo
     *
     * @return Schedule
     */
    public function setBreakTo($breakTo)
    {
        $this->breakTo = $breakTo;

        return $this;
    }

    /**
     * Get breakTo
     *
     * @return \DateTime
     */
    public function getBreakTo()
    {
        return $this->breakTo;
    }

    /**
     * Set isDayOff
     *
     * @param integer $isDayOff
     *
     * @return Schedule
     */
    public function setIsDayOff($isDayOff)
    {
        $this->isDayOff = $isDayOff;

        return $this;
    }

    /**
     * Get isDayOff
     *
     * @return int
     */
    public function getIsDayOff()
    {
        return $this->isDayOff;
    }
}

