<?php

namespace Symflex\Component\Sms\Message;

use Symflex\Component\Sms\Implement\Message\Recipient as RecipientInterface;

/**
 * Class Recipient
 * @package Symflex\Component\Sms\Message
 */
final class Recipient implements RecipientInterface
{
    /**
     * @var int
     */
    private int $value;

    /**
     * SmsRecipient constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->value;
    }
}
