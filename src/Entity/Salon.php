<?php

namespace DashboardBundle\Entity;

/**
 * Salon
 */
class Salon
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var Country
     */
    private $country;

    /**
     * @var City
     */
    private $city;

    /**
     * @var string
     */
    private $pageName;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $website;

    /**
     * @var Customer
     */
    private $delegate;

    /**
     * @var string
     */
    private $otherServices;

    /**
     * @var int
     */
    private $rating;

    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var string
     */
    private $grade;

    /**
     * @var Photo[]
     */
    private $photos;

    /**
     * @var Phone[]
     */
    private $phones;

    /**
     * @var Special[]
     */
    private $specials;

    /**
     * @var Service[]
     */
    private $services;

    /**
     * @var Schedule
     */
    private $schedule;

    /**
     * @var Feedback[]
     */
    private $feedbacks;

    /**
     * @var Customer[]
     */
    private $followers;

    /**
     * @var bool
     */
    private $published;

    /**
     * Salon constructor.
     */
    public function __construct()
    {
        $this->published = 'false';
    }


    /**
     * Set salonId
     *
     * @param int $id
     *
     * @return Salon
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get salonId
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set salonAddress
     *
     * @param string $address
     *
     * @return Salon
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get salonAddress
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Salon
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
     * @return Salon
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
     * Set url
     *
     * @param string $pageName
     *
     * @return Salon
     */
    public function setPageName($pageName)
    {
        $this->pageName = $pageName;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getPageName()
    {
        return $this->pageName;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Salon
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Salon
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set delegate
     *
     * @param integer $delegate
     *
     * @return Salon
     */
    public function setDelegate($delegate)
    {
        $this->delegate = $delegate;

        return $this;
    }

    /**
     * Get delegate
     *
     * @return int
     */
    public function getDelegate()
    {
        return $this->delegate;
    }

    /**
     * @return string
     */
    public function getOtherServices()
    {
        return $this->otherServices;
    }

    /**
     * @param string $otherServices
     */
    public function setOtherServices($otherServices)
    {
        $this->otherServices = $otherServices;
    }

    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
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
     * @return Photo[]
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param Photo[] $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    /**
     * @return Service[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param Service[] $services
     */
    public function setServices($services)
    {
        $this->services = $services;
    }

    /**
     * @return Phone[]
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * @param Phone[] $phones
     */
    public function setPhones($phones)
    {
        $this->phones = $phones;
    }

    /**
     * @return Schedule
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * @param Schedule $schedule
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * @return boolean
     */
    public function isPublished()
    {
        return $this->published;
    }

    /**
     * @return Special[]
     */
    public function getSpecials()
    {
        return $this->specials;
    }

    /**
     * @param Special[] $specials
     */
    public function setSpecials($specials)
    {
        $this->specials = $specials;
    }

    /**
     * @return Feedback[]
     */
    public function getFeedbacks()
    {
        return $this->feedbacks;
    }

    /**
     * @param Feedback[] $feedbacks
     */
    public function setFeedbacks($feedbacks)
    {
        $this->feedbacks = $feedbacks;
    }

    /**
     * @param Service $service
     *
     * @return $this
     */
    public function addService(Service $service)
    {
        $this->services[] = $service;
        $service->addSalon($this);

        return $this;
    }

    /**
     * @return int
     */
    public function feedbacksCount()
    {
        return count($this->feedbacks);
    }

    /**
     * @return int
     */
    public function followersCount()
    {
        return count($this->followers);
    }

    public function publish()
    {
        $this->published = true;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return City
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param City $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return Customer[]
     */
    public function getFollowers()
    {
        return $this->followers;
    }

    /**
     * @param Customer $follower
     */
    public function addFollower($follower)
    {
        $this->followers[] = $follower;
        $follower->addBookmark($this);
    }
}

