<?php

namespace Symflex\Component\Sms\Implement\Message;

/**
 * Interface Recipient
 * @package Symflex\Component\Sms\Implement\Message
 */
interface Recipient
{
    /**
     * @return int
     */
    public function value(): int;
}
