<?php

namespace Symflex\Component\Sms;

use Symflex\Component\Sms\Implement\Message;
use Symflex\Component\Sms\Implement\Provider as ProviderInterface;
use Symflex\Component\Sms\Implement\Response;

/**
 * Class Provider
 * @package Symflex\Component\Sms
 */
abstract class Provider implements ProviderInterface
{
    /**
     * @param Message $message
     * @return Response
     */
    abstract public function send(Message $message): Response;

    /**
     * @param Message $message
     * @return Response
     */
    abstract public function status(Message $message): Response;
}
