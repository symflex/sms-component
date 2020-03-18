<?php

namespace Symflex\Component\Sms\Implement\Message;

/**
 * Interface Content
 * @package Symflex\Component\Sms\Implement\Message
 */
interface Content
{
    /**
     * @return string
     */
    public function value(): string;

    /**
     * @return int
     */
    public function length(): int;
}
