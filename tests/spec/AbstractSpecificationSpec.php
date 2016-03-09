<?php

namespace spec\RemiSan\Specification;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use RemiSan\Specification\AbstractSpecification;
use RemiSan\Specification\AndSpecification;
use RemiSan\Specification\NotSpecification;
use RemiSan\Specification\OrSpecification;
use RemiSan\Specification\Specification;

class AbstractSpecificationSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('spec\RemiSan\Specification\TestableSpecification');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('RemiSan\Specification\AbstractSpecification');
    }

    function it_should_return_an_AndSpecification(Specification $other)
    {
        $this->andSatisfies($other)->shouldReturnAnInstanceOf(AndSpecification::class);
    }

    function it_should_return_an_OrSpecification(Specification $other)
    {
        $this->orSatisfies($other)->shouldReturnAnInstanceOf(OrSpecification::class);
    }

    function it_should_return_a_NotSpecification()
    {
        $this->not()->shouldReturnAnInstanceOf(NotSpecification::class);
    }
}

class TestableSpecification extends AbstractSpecification
{
    /**
     * @param $candidate
     *
     * @return bool
     */
    public function isSatisfiedBy($candidate) {
        return true;
    }
}
