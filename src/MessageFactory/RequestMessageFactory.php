<?php

namespace Mdb\PayPal\Ipn\MessageFactory;

use Mdb\PayPal\Ipn\Message;
use Mdb\PayPal\Ipn\MessageFactory;
use Symfony\Component\HttpFoundation\Request;

class RequestMessageFactory implements MessageFactory
{
    /**
     * @var Request
     */
    private $request;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * {@inheritdoc}
     */
    public function createMessage()
    {
        return new Message($this->request->request->all());
    }
}
