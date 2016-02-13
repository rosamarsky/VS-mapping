<?php

namespace Vs\Specifications\Change;

use Doctrine\ORM\Query\Expr;
use Nexode\Specification\AbstractSpecification;

class StatusChangeSpecification extends AbstractSpecification
{
    /**
     * @var string
     */
    private $status;

    /**
     * StatusSpecification constructor.
     *
     * @param Expr   $expr
     * @param int    $specificationIndex
     * @param string $status
     */
    public function __construct(Expr $expr, $specificationIndex, $status)
    {
        parent::__construct($expr, $specificationIndex);

        $this->status = $status;
    }

    public function expr()
    {
        return $this->expr->eq('change.status', ":{$this->parameter('status')}");
    }

    public function parameters()
    {
        return [
            $this->parameter('status') => $this->status
        ];
    }
}