<?php

namespace Symflex\Component\Sms;

use Symflex\Component\Sms\Implement\Response as ResponseInterface;

/**
 * Class Response
 * @package Symflex\Component\Sms
 */
class Response implements ResponseInterface
{
    /**
     * @var int
     */
    private int $code;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string|null
     */
    private ?string $error;

    /**
     * ResponseProvider constructor.
     * @param int $code
     * @param string $id
     * @param string|null $error
     */
    public function __construct(int $code, string $id, ?string $error = null)
    {
        $this->id = $id;
        $this->code = $code;
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function id(): string
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function code(): int
    {
        return $this->code;
    }

    /**
     * @return string|null
     */
    public function error(): ?string
    {
        return $this->error;
    }

    /**
     * @return bool
     */
    public function isError(): bool
    {
        return true;
    }
}
