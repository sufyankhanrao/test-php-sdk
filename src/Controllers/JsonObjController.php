<?php

declare(strict_types=1);

/*
 * JsonValueTesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace JsonValueTesterLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\FormParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use CoreInterfaces\Core\Request\RequestMethod;
use JsonValueTesterLib\ApiHelper;
use JsonValueTesterLib\Exceptions\ApiException;
use JsonValueTesterLib\Models\ContentType;
use JsonValueTesterLib\Models\SchemaContainer;
use JsonValueTesterLib\Models\ServerResponse;

class JsonObjController extends BaseController
{
    /**
     * Send Schema in Model
     *
     * @param SchemaContainer $body
     *
     * @return ServerResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function sendSchemainModel(SchemaContainer $body): ?ServerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/body/sendSchemaInModel')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body)->required());

        $_resHandler = $this->responseHandler()->type(ServerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Send Schema as Body
     *
     * @param mixed $body
     *
     * @return ServerResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function sendSchemaasBody($body): ?ServerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/body/sendSchema')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
                    ->required()
                    ->serializeBy(function ($value) {
                        return ApiHelper::decodeJson($value, 'value');
                    })
            );

        $_resHandler = $this->responseHandler()->type(ServerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Send Schema as Form
     *
     * @param array $options Array with all options for search
     *
     * @return ServerResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function sendSchemaasForm(array $options): ?ServerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/form/sendSchema')
            ->parameters(
                HeaderParam::init('Content-Type', $options)
                    ->extract('contentType')
                    ->required()
                    ->serializeBy([ContentType::class, 'checkValue']),
                FormParam::init('id', $options)->extract('id')->required(),
                FormParam::init('model', $options)
                    ->extract('model')
                    ->required()
                    ->serializeBy(function ($value) {
                        return ApiHelper::decodeJson($value, 'value');
                    }),
                FormParam::init('modelArray', $options)
                    ->extract('modelArray')
                    ->serializeBy(function ($value) {
                        return ApiHelper::decodeJsonArray($value, 'value');
                    }),
                FormParam::init('modelMap', $options)
                    ->extract('modelMap')
                    ->serializeBy(function ($value) {
                        return ApiHelper::decodeJsonArray($value, 'value', true);
                    })
            );

        $_resHandler = $this->responseHandler()->type(ServerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Send Schema as Query
     *
     * @param array $options Array with all options for search
     *
     * @return ServerResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function sendSchemaasQuery(array $options): ?ServerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/query/sendSchema')
            ->parameters(
                QueryParam::init('id', $options)->extract('id')->required(),
                QueryParam::init('model', $options)
                    ->extract('model')
                    ->required()
                    ->serializeBy(function ($value) {
                        return ApiHelper::decodeJson($value, 'value');
                    }),
                QueryParam::init('modelArray', $options)
                    ->extract('modelArray')
                    ->serializeBy(function ($value) {
                        return ApiHelper::decodeJsonArray($value, 'value');
                    }),
                QueryParam::init('modelMap', $options)
                    ->extract('modelMap')
                    ->serializeBy(function ($value) {
                        return ApiHelper::decodeJsonArray($value, 'value', true);
                    })
            );

        $_resHandler = $this->responseHandler()->type(ServerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get Schema
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getSchema()
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/response/getSchema');

        $_resHandler = $this->responseHandler()
            ->deserializerMethod(function ($value) {
                return ApiHelper::decodeJson($value, 'value');
            });

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get Schema Array
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getSchemaArray()
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/response/getSchemaArray');

        $_resHandler = $this->responseHandler()
            ->deserializerMethod(function ($value) {
                return ApiHelper::decodeJsonArray($value, 'value');
            });

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get Schema Map
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getSchemaMap()
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/response/getSchemaMap');

        $_resHandler = $this->responseHandler()
            ->deserializerMethod(function ($value) {
                return ApiHelper::decodeJsonArray($value, 'value', true);
            });

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get Schema in Model
     *
     * @return SchemaContainer|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getSchemainModel(): ?SchemaContainer
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/response/getSchemaInModel');

        $_resHandler = $this->responseHandler()->type(SchemaContainer::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
