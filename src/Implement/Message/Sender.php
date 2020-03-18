<?php

namespace Symflex\Component\Sms\Implement\Message;

/**
 * Interface Sender
 * @package Symflex\Component\Sms\Implement\Message
 */
interface Sender
{
    public const NUMERIC = 1;
    public const ALPHABET = 2;

    /**
     * @return string
     */
    public function value(): string;

    /**
     * @return int
     */
    public function type(): int;
}
