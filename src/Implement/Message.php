<?php

namespace Symflex\Component\Sms\Implement;

use Symflex\Component\Sms\Implement\Message\Content;
use Symflex\Component\Sms\Implement\Message\Recipients;
use Symflex\Component\Sms\Implement\Message\Sender;

/**
 * Interface Message
 * @package Symflex\Component\Sms\Implement
 */
interface Message
{
    /**
     * @return Sender
     */
    public function sender(): Sender;

    /**
     * @return Recipients
     */
    public function recipients(): Recipients;

    /**
     * @return Content
     */
    public function content(): Content;
}
