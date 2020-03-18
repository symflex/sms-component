<?php

namespace Symflex\Component\Sms;

use Symflex\Component\Sms\Implement\Gateway;
use Symflex\Component\Sms\Implement\Message;
use Symflex\Component\Sms\Implement\Response;
use Symflex\Component\Sms\Implement\Service;
use RuntimeException;

/**
 * Class Messenger
 * @package Symflex\Component\Sms
 */
class Messenger implements Service
{
    /**
     * @var array
     */
    protected array $gateways;

    /**
     * Messenger constructor.
     * @param Gateway ...$gateways
     */
    public function __construct(Gateway ...$gateways)
    {
        $this->gateways = $gateways;
    }

    /**
     * @param string $name
     * @return Gateway
     */
    public function gateway(string $name): Gateway
    {
        $gateway = $this->findGateway($name);

        if (!$gateway) {
            throw new RuntimeException(sprintf('Gateway %s not registered.', $name));
        }

        return $gateway;
    }

    /**
     * @param string $gateway
     * @param Message $message
     * @return Response
     */
    public function send(string $gateway, Message $message): Response
    {
        return  $this->gateway($gateway)->send($message);
    }

    /**
     * @param Gateway $gateway
     */
    public function registerGateway(Gateway $gateway): void
    {
        if ($this->findGateway($gateway->name())) {
            throw new RuntimeException(sprintf('Gateway %s already register.', $gateway->name()));
        }

        $this->gateways[] = $gateway;
    }

    /**
     * @param string $name
     * @return Gateway|null
     */
    protected function findGateway(string $name): ?Gateway
    {
        return
        array_reduce(
            $this->gateways,
            static function (?Gateway $carry, Gateway $item) use (&$name) {
                return $item->name() === $name ? $item : $carry;
            }
        );
    }
}
