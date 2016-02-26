<?php

namespace RemiSan\Specification;

interface Specification
{
    /**
     * @param $candidate
     *
     * @return bool
     */
    public function isSatisfiedBy($candidate);

    /**
     * @param Specification $other
     *
     * @return AndSpecification
     */
    public function andSatisfies(Specification $other);

    /**
     * @param Specification $other
     *
     * @return OrSpecification
     */
    public function orSatisfies(Specification $other);

    /**
     * @return NotSpecification
     */
    public function not();
}
