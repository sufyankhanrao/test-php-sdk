<?php

declare(strict_types=1);

/*
 * JsonValueTesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace JsonValueTesterLib\Models;

use JsonValueTesterLib\ApiHelper;
use stdClass;

class ServerResponse implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $passed;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var mixed
     */
    private $input;

    /**
     * @var array<string,float|null>|null
     */
    private $nullableNumberMap;

    /**
     * @var array<float|null>|null
     */
    private $nullableNumberArray;

    /**
     * @param bool $passed
     */
    public function __construct(bool $passed)
    {
        $this->passed = $passed;
    }

    /**
     * Returns Passed.
     */
    public function getPassed(): bool
    {
        return $this->passed;
    }

    /**
     * Sets Passed.
     *
     * @required
     * @maps passed
     */
    public function setPassed(bool $passed): void
    {
        $this->passed = $passed;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @maps Message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Input.
     *
     * @return mixed
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Sets Input.
     *
     * @maps input
     *
     * @param mixed $input
     */
    public function setInput($input): void
    {
        $this->input = $input;
    }

    /**
     * Returns Nullable Number Map.
     *
     * @return array<string,float|null>|null
     */
    public function getNullableNumberMap(): ?array
    {
        return $this->nullableNumberMap;
    }

    /**
     * Sets Nullable Number Map.
     *
     * @maps nullableNumberMap
     *
     * @param array<string,float|null>|null $nullableNumberMap
     */
    public function setNullableNumberMap(?array $nullableNumberMap): void
    {
        $this->nullableNumberMap = $nullableNumberMap;
    }

    /**
     * Returns Nullable Number Array.
     *
     * @return array<float|null>|null
     */
    public function getNullableNumberArray(): ?array
    {
        return $this->nullableNumberArray;
    }

    /**
     * Sets Nullable Number Array.
     *
     * @maps nullableNumberArray
     *
     * @param array<float|null>|null $nullableNumberArray
     */
    public function setNullableNumberArray(?array $nullableNumberArray): void
    {
        $this->nullableNumberArray = $nullableNumberArray;
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
        $json['passed']                  = $this->passed;
        if (isset($this->message)) {
            $json['Message']             = $this->message;
        }
        if (isset($this->input)) {
            $json['input']               = ApiHelper::decodeJsonArray($this->input, 'input', true);
        }
        if (isset($this->nullableNumberMap)) {
            $json['nullableNumberMap']   = $this->nullableNumberMap;
        }
        if (isset($this->nullableNumberArray)) {
            $json['nullableNumberArray'] = $this->nullableNumberArray;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
