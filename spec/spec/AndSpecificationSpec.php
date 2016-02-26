<?php

namespace spec\RemiSan\Specification;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use RemiSan\Specification\Specification;

class AndSpecificationSpec extends ObjectBehavior
{
    function let(Specification $one, Specification $other)
    {
        $this->beConstructedWith($one, $other);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('RemiSan\Specification\AndSpecification');
    }

    function it_is_satisfied_if_both_inner_specifications_are_satisfied(Specification $one, Specification $other)
    {
        $one->isSatisfiedBy(true)->willReturn(true);
        $other->isSatisfiedBy(true)->willReturn(true);
        $this->isSatisfiedBy(true)->shouldReturn(true);
    }

    function it_is_not_satisfied_if_only_first_inner_specifications_is_satisfied(Specification $one, Specification $other)
    {
        $one->isSatisfiedBy(true)->willReturn(true);
        $other->isSatisfiedBy(true)->willReturn(false);
        $this->isSatisfiedBy(true)->shouldReturn(false);
    }

    function it_is_not_satisfied_if_only_second_inner_specifications_is_satisfied(Specification $one, Specification $other)
    {
        $one->isSatisfiedBy(true)->willReturn(false);
        $other->isSatisfiedBy(true)->willReturn(true);
        $this->isSatisfiedBy(true)->shouldReturn(false);
    }

    function it_is_not_satisfied_if_both_inner_specifications_are_not_satisfied(Specification $one, Specification $other)
    {
        $one->isSatisfiedBy(true)->willReturn(false);
        $other->isSatisfiedBy(true)->willReturn(false);
        $this->isSatisfiedBy(true)->shouldReturn(false);
    }
}
