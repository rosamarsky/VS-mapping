<?php

namespace Vs\Specifications\Change;

use Doctrine\ORM\Query\Expr;
use Nexode\Specification\Specification;

class ChangeSpecificationFactory
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
     * ChangeSpecificationFactory constructor.
     *
     * @param Expr $expressionBuilder
     */
    public function __construct(Expr $expressionBuilder)
    {
        $this->expressionBuilder = $expressionBuilder;
        $this->specificationIndexCounter = 0;
    }

    /**
     * @param string $status
     *
     * @return Specification
     */
    public function status($status)
    {
        return new StatusChangeSpecification(
            $this->expressionBuilder,
            ++$this->specificationIndexCounter,
            $status
        );
    }
}