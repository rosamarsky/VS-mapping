<?php

namespace DashboardBundle\Entity;

use DateTime;

/**
 * Change
 */
class Change
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
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $pageName;

    /**
     * @var int
     */
    private $countryId;

    /**
     * @var int
     */
    private $cityId;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $grade;

    /**
     * @var DateTime
     */
    private $created;

    /**
     * @var DateTime
     */
    private $checked;

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
     * @param Salon $salon
     *
     * @return Change
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
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setApproved($status)
    {
        $this->status = $status;
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
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getPageName()
    {
        return $this->pageName;
    }

    /**
     * @param string $pageName
     */
    public function setPageName($pageName)
    {
        $this->pageName = $pageName;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param int $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param string $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    public function decline()
    {
        $this->status = 'declined';
    }

    /**
     * @return Salon
     */
    public function approve()
    {
        if ($this->title) {
            $this->salon->setTitle($this->title);
        }

        if ($this->description) {
            $this->salon->setDescription($this->description);
        }

        if ($this->website) {
            $this->salon->setWebsite($this->website);
        }

        if ($this->logo) {
            $this->salon->setLogo($this->logo);
        }

        if ($this->pageName) {
            $this->salon->setPageName($this->pageName);
        }

        if ($this->grade) {
            $this->salon->setGrade($this->grade);
        }

        $this->salon->publish();
        $this->status = 'approved';

        return $this->salon;
    }

    /**
     * @return DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return DateTime
     */
    public function getChecked()
    {
        return $this->checked;
    }

    /**
     * @param DateTime $checked
     */
    public function setChecked($checked)
    {
        $this->checked = $checked;
    }
}

