<?php

namespace Symflex\Component\Sms\Implement;

/**
 * Interface Service
 * @package Symflex\Component\Sms\Implement
 */
interface Service
{
    /**
     * @param string $name
     * @return Gateway
     */
    public function gateway(string $name): Gateway;

    /**
     * @param Gateway $gateway
     */
    public function registerGateway(Gateway $gateway): void;

    /**
     * @param string $gateway
     * @param Message $message
     * @return Response
     */
    public function send(string $gateway, Message $message): Response;
}
