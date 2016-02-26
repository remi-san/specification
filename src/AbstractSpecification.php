<?php

namespace RemiSan\Specification;

abstract class AbstractSpecification implements Specification
{
    /**
     * @param $candidate
     *
     * @return bool
     */
    abstract public function isSatisfiedBy($candidate);

    /**
     * @param Specification $other
     *
     * @return AndSpecification
     */
    public function andSatisfies(Specification $other)
    {
        return new AndSpecification($this, $other);
    }

    /**
     * @param Specification $other
     *
     * @return OrSpecification
     */
    public function orSatisfies(Specification $other)
    {
        return new OrSpecification($this, $other);
    }

    /**
     * @return NotSpecification
     */
    public function not()
    {
        return new NotSpecification($this);
    }
}
