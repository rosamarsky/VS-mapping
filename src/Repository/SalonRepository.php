<?php

namespace DashboardBundle\Repository;

use DashboardBundle\Entity\Change;
use DashboardBundle\Entity\Salon;
use DashboardBundle\Specifications\Change\ChangeSpecificationFactory;
use DashboardBundle\Specifications\Salon\SalonSpecificationFactory;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr;

/**
 * SalonRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SalonRepository extends EntityRepository
{
    public function searchNewSalons()
    {
        $entityManager = $this->getEntityManager();
        $queryBuilder = $entityManager->createQueryBuilder();

        $expression = $queryBuilder->expr();

        $changeSpecificationFactory = new ChangeSpecificationFactory($expression);
        $salonSpecificationFactory = new SalonSpecificationFactory($expression);

        $specification = $changeSpecificationFactory
            ->status('new')
            ->andX(
                $salonSpecificationFactory->isPublished()
            );

        $queryBuilder->select('salon')
            ->from(Salon::class, 'salon')
            ->innerJoin(Change::class, 'change', 'WITH', 'salon.id = change.salon')
            ->where($specification->expr())
            ->orderBy('change.created', 'DESC')
            ->setParameters($specification->parameters());

        $result = $queryBuilder->getQuery()->getResult();

        return $result;
    }
}