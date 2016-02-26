<?php

namespace RemiSan\Specification;

class AndSpecification extends AbstractSpecification implements Specification
{
    /** @var Specification */
    private $one;

    /** @var Specification */
    private $other;

    /**
     * Constructor.
     *
     * @param Specification $one
     * @param Specification $other
     */
    public function __construct(Specification $one, Specification $other)
    {
        $this->one = $one;
        $this->other = $other;
    }

    /**
     * @param $candidate
     *
     * @return bool
     */
    public function isSatisfiedBy($candidate)
    {
        return $this->one->isSatisfiedBy($candidate) && $this->other->isSatisfiedBy($candidate);
    }
}
