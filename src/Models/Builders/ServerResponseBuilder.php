<?php

declare(strict_types=1);

/*
 * JsonValueTesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace JsonValueTesterLib\Models\Builders;

use Core\Utils\CoreHelper;
use JsonValueTesterLib\Models\ServerResponse;

/**
 * Builder for model ServerResponse
 *
 * @see ServerResponse
 */
class ServerResponseBuilder
{
    /**
     * @var ServerResponse
     */
    private $instance;

    private function __construct(ServerResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new server response Builder object.
     */
    public static function init(bool $passed): self
    {
        return new self(new ServerResponse($passed));
    }

    /**
     * Sets message field.
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Sets input field.
     */
    public function input($value): self
    {
        $this->instance->setInput($value);
        return $this;
    }

    /**
     * Sets nullable number map field.
     */
    public function nullableNumberMap(?array $value): self
    {
        $this->instance->setNullableNumberMap($value);
        return $this;
    }

    /**
     * Sets nullable number array field.
     */
    public function nullableNumberArray(?array $value): self
    {
        $this->instance->setNullableNumberArray($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new server response object.
     */
    public function build(): ServerResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
