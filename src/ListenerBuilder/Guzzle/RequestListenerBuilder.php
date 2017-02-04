<?php

namespace Mdb\PayPal\Ipn\ListenerBuilder\Guzzle;

use Symfony\Component\HttpFoundation\Request;
use Mdb\PayPal\Ipn\ListenerBuilder\GuzzleListenerBuilder;
use Mdb\PayPal\Ipn\MessageFactory\RequestMessageFactory;

class RequestListenerBuilder extends GuzzleListenerBuilder
{
    /**
     * {@inheritdoc}
     */
    protected function getMessageFactory()
    {
        return new RequestMessageFactory(Request::createFromGlobals());
    }
}
