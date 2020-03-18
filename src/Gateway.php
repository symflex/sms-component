<?php

namespace Symflex\Component\Sms;

use Symflex\Component\Sms\Implement\Gateway as GatewayInterface;
use Symflex\Component\Sms\Implement\Message;
use Symflex\Component\Sms\Implement\Provider;
use Symflex\Component\Sms\Implement\Response;

/**
 * Class Gateway
 * @package Symflex\Component\Sms
 */
class Gateway implements GatewayInterface
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var Provider
     */
    private Provider $provider;

    /**
     * GatewayProvider constructor.
     * @param string $name
     * @param Provider $provider
     */
    public function __construct(string $name, Provider $provider)
    {
        $this->name     = $name;
        $this->provider = $provider;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return Provider
     */
    public function provider(): Provider
    {
        return $this->provider;
    }

    /**
     * @param Message $message
     * @return Response
     */
    public function send(Message $message): Response
    {
        return $this->provider->send($message);
    }
}
