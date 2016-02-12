<?php

namespace Vs\Repository;

use Vs\Entity\Salon;
use Doctrine\ORM\EntityRepository;

/**
 * FeedbackRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FeedbackRepository extends EntityRepository
{
    /**
     * @param Salon $salon
     * @return array
     */
    public function findBySalon(Salon $salon)
    {
        return $this->findBy(['salon' => $salon]);
    }
}
