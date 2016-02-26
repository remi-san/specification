<?php

namespace RemiSan\Specification;

class NotSpecification extends AbstractSpecification implements Specification
{
    /** @var Specification */
    private $specification;

    /**
     * Constructor.
     *
     * @param Specification $specification
     */
    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    /**
     * @param $candidate
     *
     * @return bool
     */
    public function isSatisfiedBy($candidate)
    {
        return !$this->specification->isSatisfiedBy($candidate);
    }
}
