<?php

namespace Symflex\Component\Sms\Implement;

/**
 * Interface Gateway
 * @package Symflex\Component\Sms\Implement
 */
interface Gateway
{
    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return Provider
     */
    public function provider(): Provider;

    /**
     * @param Message $message
     * @return Response
     */
    public function send(Message $message): Response;
}
