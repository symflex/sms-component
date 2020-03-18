<?php

namespace Symflex\Component\Sms\Message;

use Symflex\Component\Sms\Implement\Message\Sender as SenderInterface;

/**
 * Class Sender
 * @package Symflex\Component\Sms\Message
 */
final class Sender implements SenderInterface
{
    /**
     * @var string
     */
    private string $value;

    /**
     * SmsSender constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function type(): int
    {
        return is_numeric($this->value) === true ? self::NUMERIC : self::ALPHABET;
    }
}
