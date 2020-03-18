<?php

namespace Symflex\Component\Sms\Implement\Message;

/**
 * Interface Recipients
 * @package Symflex\Component\Sms\Implement\Message
 */
interface Recipients
{
    /**
     * @return array
     */
    public function value(): array;

    /**
     * @return int
     */
    public function count(): int;
}
