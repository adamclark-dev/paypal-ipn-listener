<?php

namespace spec\Mdb\PayPal\Ipn\MessageFactory;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ParameterBag;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RequestMessageFactorySpec extends ObjectBehavior
{
    function let(Request $request)
    {
        $this->beConstructedWith($request);
    }

    function it_should_be_a_message_factory()
    {
        $this->shouldHaveType('Mdb\PayPal\Ipn\MessageFactory');
    }

    function it_should_create_a_message_from_the_request_parameters(Request $request, ParameterBag $parameterBag)
    {
        $request->request = $parameterBag;

        $parameterBag->all()->willReturn([]);

        $message = $this->createMessage()->shouldHaveType('Mdb\PayPal\Ipn\Message');
    }
}
