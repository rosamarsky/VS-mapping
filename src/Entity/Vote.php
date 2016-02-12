<?php

namespace Vs\Entity;

/**
 * Vote
 */
class Vote
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Feedback
     */
    private $feedback;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var bool
     */
    private $vote;


    /**
     * Set Feedback
     *
     * @param Feedback $feedback
     *
     * @return Vote
     */
    public function setFeedback(Feedback $feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get Feedback
     *
     * @return Feedback
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set Customer
     *
     * @param Customer $customer
     *
     * @return Vote
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get Customer
     *
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set vote
     *
     * @param boolean $vote
     *
     * @return Vote
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return bool
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

