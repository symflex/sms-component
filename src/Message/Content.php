<?php

namespace Symflex\Component\Sms\Message;

use Symflex\Component\Sms\Implement\Message\Content as ContentInterface;

/**
 * Class Content
 * @package Symflex\Component\Sms\Message
 */
final class Content implements ContentInterface
{
    /**
     * @var string
     */
    private string $value;

    /**
     * SmsContent constructor.
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
    public function length(): int
    {
        return strlen($this->value);
    }
}
