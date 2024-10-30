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

class SchemaContainer implements \JsonSerializable
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
    private $schema;

    /**
     * @var mixed
     */
    private $schemaArray;

    /**
     * @var mixed
     */
    private $schemaMap;

    /**
     * @param string $name
     * @param string $id
     * @param mixed $schema
     */
    public function __construct(string $name, string $id, $schema)
    {
        $this->name = $name;
        $this->id = $id;
        $this->schema = $schema;
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
     * Returns Schema.
     *
     * @return mixed
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Sets Schema.
     *
     * @required
     * @maps schema
     *
     * @param mixed $schema
     */
    public function setSchema($schema): void
    {
        $this->schema = $schema;
    }

    /**
     * Returns Schema Array.
     *
     * @return mixed
     */
    public function getSchemaArray()
    {
        return $this->schemaArray;
    }

    /**
     * Sets Schema Array.
     *
     * @maps schemaArray
     *
     * @param mixed $schemaArray
     */
    public function setSchemaArray($schemaArray): void
    {
        $this->schemaArray = $schemaArray;
    }

    /**
     * Returns Schema Map.
     *
     * @return mixed
     */
    public function getSchemaMap()
    {
        return $this->schemaMap;
    }

    /**
     * Sets Schema Map.
     *
     * @maps schemaMap
     *
     * @param mixed $schemaMap
     */
    public function setSchemaMap($schemaMap): void
    {
        $this->schemaMap = $schemaMap;
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
        $json['name']            = $this->name;
        $json['id']              = $this->id;
        $json['schema']          = ApiHelper::decodeJson($this->schema, 'schema');
        if (isset($this->schemaArray)) {
            $json['schemaArray'] = ApiHelper::decodeJsonArray($this->schemaArray, 'schemaArray');
        }
        if (isset($this->schemaMap)) {
            $json['schemaMap']   = ApiHelper::decodeJsonArray($this->schemaMap, 'schemaMap', true);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
