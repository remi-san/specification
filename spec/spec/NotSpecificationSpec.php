<?php

namespace spec\RemiSan\Specification;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use RemiSan\Specification\Specification;

class NotSpecificationSpec extends ObjectBehavior
{
    function let(Specification $spec)
    {
        $this->beConstructedWith($spec);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('RemiSan\Specification\NotSpecification');
    }

    function it_inverts_the_inner_specification(Specification $spec)
    {
        $spec->isSatisfiedBy(true)->willReturn(true);
        $this->isSatisfiedBy(true)->shouldReturn(false);
    }
}
