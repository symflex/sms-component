<?php

namespace Symflex\Component\Sms\Implement;

/**
 * Interface Response
 * @package Symflex\Component\Sms\Implement
 */
interface Response
{
    /**
     * @return string
     */
    public function id(): string;

    /**
     * @return int
     */
    public function code(): int;

    /**
     * @return bool
     */
    public function isError(): bool;

    /**
     * @return string|null
     */
    public function error(): ?string;
}
