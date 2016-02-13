<?php

namespace Vs\Specifications\Salon;

use Doctrine\ORM\Query\Expr;
use Nexode\Specification\AbstractSpecification;

class StatusSalonSpecification extends AbstractSpecification
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
     */
    public function __construct(Expr $expr, $specificationIndex)
    {
        parent::__construct($expr, $specificationIndex);

        $this->status = false;
    }

    public function expr()
    {
        return $this->expr->eq('salon.published', ":{$this->parameter('published')}");
    }

    public function parameters()
    {
        return [
            $this->parameter('published') => $this->status
        ];
    }
}