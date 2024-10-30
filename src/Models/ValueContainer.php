<?php

declare(strict_types=1);

/*
 * JsonValueTesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace JsonValueTesterLib\Models;

use stdClass;

class ValueContainer implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $id;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @var array
     */
    private $valueArray;

    /**
     * @var array
     */
    private $valueMap;

    /**
     * @param string $name
     * @param string $id
     * @param mixed $value
     */
    public function __construct(string $name, string $id, $value)
    {
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
    }

    /**
     * Returns Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Id.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Value.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets Value.
     *
     * @required
     * @maps value
     *
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Value Array.
     */
    public function getValueArray(): array
    {
        return $this->valueArray;
    }

    /**
     * Sets Value Array.
     *
     * @maps valueArray
     */
    public function setValueArray(array $valueArray): void
    {
        $this->valueArray = $valueArray;
    }

    /**
     * Returns Value Map.
     */
    public function getValueMap(): array
    {
        return $this->valueMap;
    }

    /**
     * Sets Value Map.
     *
     * @maps valueMap
     */
    public function setValueMap(array $valueMap): void
    {
        $this->valueMap = $valueMap;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['name']           = $this->name;
        $json['id']             = $this->id;
        $json['value']          = $this->value;
        if (isset($this->valueArray)) {
            $json['valueArray'] = $this->valueArray;
        }
        if (isset($this->valueMap)) {
            $json['valueMap']   = $this->valueMap;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
