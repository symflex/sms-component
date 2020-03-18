<?php

namespace Symflex\Component\Sms\Message;

use Symflex\Component\Sms\Implement\Message\Recipient;
use Symflex\Component\Sms\Implement\Message\Recipients as RecipientsInterface;

/**
 * Class Recipients
 * @package Symflex\Component\Sms\Message
 */
final class Recipients implements RecipientsInterface
{
    /**
     * @var array|Recipient[]
     */
    private array $recipients;

    /**
     * SmsRecipients constructor.
     * @param Recipient ...$recipients
     */
    public function __construct(Recipient ...$recipients)
    {
        $this->recipients = $recipients;
    }

    /**
     * @return array
     */
    public function value(): array
    {
        return $this->recipients;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->recipients);
    }
}
