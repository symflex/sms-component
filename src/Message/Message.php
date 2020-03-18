<?php

namespace Symflex\Component\Sms\Message;

use Symflex\Component\Sms\Implement\Message as MessageInterface;
use Symflex\Component\Sms\Implement\Message\Content;
use Symflex\Component\Sms\Implement\Message\Recipients;
use Symflex\Component\Sms\Implement\Message\Sender;

/**
 * Class Message
 * @package Symflex\Component\Sms\Message
 */
final class Message implements MessageInterface
{
    /**
     * @var Sender
     */
    private Sender $sender;

    /**
     * @var Recipients
     */
    private Recipients $recipients;

    /**
     * @var Content
     */
    private Content $content;

    /**
     * SmsMessage constructor.
     * @param Sender $sender
     * @param Recipients $recipients
     * @param Content $content
     */
    public function __construct(Sender $sender, Recipients $recipients, Content $content)
    {
        $this->sender     = $sender;
        $this->content    = $content;
        $this->recipients = $recipients;
    }

    /**
     * @return Sender
     */
    public function sender(): Sender
    {
        return $this->sender;
    }

    /**
     * @return Recipients
     */
    public function recipients(): Recipients
    {
        return $this->recipients;
    }

    /**
     * @return Content
     */
    public function content(): Content
    {
        return $this->content;
    }
}
