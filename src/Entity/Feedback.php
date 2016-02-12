<?php

namespace Vs\Entity;

use DateTime;

/**
 * Feedback
 */
class Feedback
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
    private $mark;

    /**
     * @var string
     */
    private $message;

    /**
     * @var bool
     */
    private $isRemoved;

    /**
     * @var int
     */
    private $likes;

    /**
     * @var int
     */
    private $dislikes;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var Comment[]
     */
    private $comments;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * @var Vote
     */
    private $votes;

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
     * @return Feedback
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
     * Set mark
     *
     * @param integer $mark
     *
     * @return Feedback
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return int
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Feedback
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set isRemoved
     *
     * @param boolean $isRemoved
     *
     * @return Feedback
     */
    public function setIsRemoved($isRemoved)
    {
        $this->isRemoved = $isRemoved;

        return $this;
    }

    /**
     * Get isRemoved
     *
     * @return bool
     */
    public function getIsRemoved()
    {
        return $this->isRemoved;
    }

    /**
     * Set likes
     *
     * @param integer $likes
     *
     * @return Feedback
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get likes
     *
     * @return int
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set dislikes
     *
     * @param integer $dislikes
     *
     * @return Feedback
     */
    public function setDislikes($dislikes)
    {
        $this->dislikes = $dislikes;

        return $this;
    }

    /**
     * Get dislikes
     *
     * @return int
     */
    public function getDislikes()
    {
        return $this->dislikes;
    }

    /**
     * Set createdAt
     *
     * @param DateTime $date
     *
     * @return Feedback
     */
    public function setCreatedDate($date)
    {
        $this->createdAt = $date;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdAt;
    }

    /**
     * @return Comment[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param Comment[] $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return Vote
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * @param Vote $vote
     */
    public function addVotes(Vote $vote)
    {
        $this->votes[] = $vote;
    }
}

