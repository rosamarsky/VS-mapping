<?php

namespace Vs\Specifications\Salon;

use Doctrine\ORM\Query\Expr;
use Nexode\Specification\Specification;

class SalonSpecificationFactory
{
    /**
     * @var Expr
     */
    private $expressionBuilder;

    /**
     * @var int
     */
    private $specificationIndexCounter;

    /**
     * SalonSpecificationFactory constructor.
     *
     * @param Expr $expressionBuilder
     */
    public function __construct(Expr $expressionBuilder)
    {
        $this->expressionBuilder = $expressionBuilder;
        $this->specificationIndexCounter = 0;
    }

    /**
     * @return Specification
     */
    public function isPublished()
    {
        return new StatusSalonSpecification(
            $this->expressionBuilder,
            ++$this->specificationIndexCounter
        );
    }

    public function isNew($status, $isPublished)
    {

    }

}