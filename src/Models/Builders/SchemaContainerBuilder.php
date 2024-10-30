<?php

declare(strict_types=1);

/*
 * JsonValueTesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace JsonValueTesterLib\Models\Builders;

use Core\Utils\CoreHelper;
use JsonValueTesterLib\Models\SchemaContainer;

/**
 * Builder for model SchemaContainer
 *
 * @see SchemaContainer
 */
class SchemaContainerBuilder
{
    /**
     * @var SchemaContainer
     */
    private $instance;

    private function __construct(SchemaContainer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new schema container Builder object.
     */
    public static function init(string $name, string $id, $schema): self
    {
        return new self(new SchemaContainer($name, $id, $schema));
    }

    /**
     * Sets schema array field.
     */
    public function schemaArray($value): self
    {
        $this->instance->setSchemaArray($value);
        return $this;
    }

    /**
     * Sets schema map field.
     */
    public function schemaMap($value): self
    {
        $this->instance->setSchemaMap($value);
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
     * Initializes a new schema container object.
     */
    public function build(): SchemaContainer
    {
        return CoreHelper::clone($this->instance);
    }
}
