<?php

namespace Vs\Entity;

/**
 * Customer
 */
class Customer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $avatar;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $socialType;

    /**
     * @var string
     */
    private $socialId;

    /**
     * @var string
     */
    private $smallAvatar;

    /**
     * @var Feedback[]
     */
    private $feedbacks;

    /**
     * @var Comment[]
     */
    private $comments;

    /**
     * @var Salon[]
     */
    private $salons;

    /**
     * @var CustomerPhoto[]
     */
    private $photos;

    /**
     * @var Salon[]
     */
    private $bookmarks;

    /**
     * @var Customer[]
     */
    private $subscriptions;

    /**
     * @var Customer[]
     */
    private $subscribers;

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
     * Set name
     *
     * @param string $name
     *
     * @return Customer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return Customer
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Customer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set socialType
     *
     * @param string $socialType
     *
     * @return Customer
     */
    public function setSocialType($socialType)
    {
        $this->socialType = $socialType;

        return $this;
    }

    /**
     * Get socialType
     *
     * @return string
     */
    public function getSocialType()
    {
        return $this->socialType;
    }

    /**
     * Set socialId
     *
     * @param string $socialId
     *
     * @return Customer
     */
    public function setSocialId($socialId)
    {
        $this->socialId = $socialId;

        return $this;
    }

    /**
     * Get socialId
     *
     * @return string
     */
    public function getSocialId()
    {
        return $this->socialId;
    }

    /**
     * Set smallAvatar
     *
     * @param string $smallAvatar
     *
     * @return Customer
     */
    public function setSmallAvatar($smallAvatar)
    {
        $this->smallAvatar = $smallAvatar;

        return $this;
    }

    /**
     * Get smallAvatar
     *
     * @return string
     */
    public function getSmallAvatar()
    {
        return $this->smallAvatar;
    }

    /**
     * @return Feedback[]
     */
    public function getFeedbacks()
    {
        return $this->feedbacks;
    }

    /**
     * @param Feedback $feedback
     */
    public function addFeedback($feedback)
    {
        $this->feedbacks[] = $feedback;
    }

    /**
     * @return Comment[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param Comment $comment
     */
    public function addComment($comment)
    {
        $this->comments[] = $comment;
    }

    /**
     * @return CustomerPhoto
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param CustomerPhoto $photo
     */
    public function addPhoto($photo)
    {
        $this->photos[] = $photo;
    }

    /**
     * @return Salon[]
     */
    public function getBookmarks()
    {
        return $this->bookmarks;
    }

    /**
     * @param Salon $bookmark
     */
    public function addBookmark($bookmark)
    {
        $this->bookmarks[] = $bookmark;
    }

    /**
     * @return Salon[]
     */
    public function getSalons()
    {
        return $this->salons;
    }

    /**
     * @param Salon $salon
     */
    public function addSalon($salon)
    {
        $this->salons[] = $salon;
    }

    /**
     * @return Customer[]
     */
    public function getSubscribers()
    {
        return $this->subscribers;
    }

    /**
     * @param Customer[] $subscriber
     */
    public function addSubscriber($subscriber)
    {
        $this->subscribers[] = $subscriber;
    }

    /**
     * @return Customer[]
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * @param Customer[] $subscription
     */
    public function addSubscription($subscription)
    {
        $this->subscriptions[] = $subscription;
    }

}

