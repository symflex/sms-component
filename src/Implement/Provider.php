<?php

namespace Symflex\Component\Sms\Implement;

/**
 * Interface Provider
 * @package Symflex\Component\Sms\Implement
 */
interface Provider
{
    /**
     * @param Message $message
     * @return Response
     */
    public function send(Message $message): Response;

    /**
     * @param Message $message
     * @return Response
     */
    public function status(Message $message): Response;
}
