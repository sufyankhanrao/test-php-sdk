<?php

declare(strict_types=1);

/*
 * JsonValueTesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace JsonValueTesterLib\Models\Builders;

use Core\Utils\CoreHelper;
use JsonValueTesterLib\Models\ValueContainer;

/**
 * Builder for model ValueContainer
 *
 * @see ValueContainer
 */
class ValueContainerBuilder
{
    /**
     * @var ValueContainer
     */
    private $instance;

    private function __construct(ValueContainer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new value container Builder object.
     */
    public static function init(string $name, string $id, $value): self
    {
        return new self(new ValueContainer($name, $id, $value));
    }

    /**
     * Sets value array field.
     */
    public function valueArray(array $value): self
    {
        $this->instance->setValueArray($value);
        return $this;
    }

    /**
     * Sets value map field.
     */
    public function valueMap(array $value): self
    {
        $this->instance->setValueMap($value);
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
     * Initializes a new value container object.
     */
    public function build(): ValueContainer
    {
        return CoreHelper::clone($this->instance);
    }
}
