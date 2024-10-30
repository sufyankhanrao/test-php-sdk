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
use JsonValueTesterLib\Exceptions\ApiException;
use JsonValueTesterLib\Models\ContentType;
use JsonValueTesterLib\Models\ServerResponse;
use JsonValueTesterLib\Models\ValueContainer;

class JsonValController extends BaseController
{
    /**
     * Send Value in Model
     *
     * @param ValueContainer $body
     *
     * @return ServerResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function sendValueinModel(ValueContainer $body): ?ServerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/body/sendValueInModel')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body)->required());

        $_resHandler = $this->responseHandler()->type(ServerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Send Value as Body
     *
     * @param mixed $body
     *
     * @return ServerResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function sendValueasBody($body): ?ServerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/body/sendValue')
            ->parameters(HeaderParam::init('Content-Type', 'text/plain'), BodyParam::init($body)->required());

        $_resHandler = $this->responseHandler()->type(ServerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Send Value as Form
     *
     * @param array $options Array with all options for search
     *
     * @return ServerResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function sendValueasForm(array $options): ?ServerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/form/sendValue')
            ->parameters(
                HeaderParam::init('Content-Type', $options)
                    ->extract('contentType')
                    ->required()
                    ->serializeBy([ContentType::class, 'checkValue']),
                FormParam::init('id', $options)->extract('id')->required(),
                FormParam::init('model', $options)->extract('model')->required(),
                FormParam::init('modelArray', $options)->extract('modelArray'),
                FormParam::init('modelMap', $options)->extract('modelMap')
            );

        $_resHandler = $this->responseHandler()->type(ServerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Send Value as Query
     *
     * @param array $options Array with all options for search
     *
     * @return ServerResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function sendValueasQuery(array $options): ?ServerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/query/sendValue')
            ->parameters(
                QueryParam::init('id', $options)->extract('id')->required(),
                QueryParam::init('model', $options)->extract('model')->required(),
                QueryParam::init('modelArray', $options)->extract('modelArray'),
                QueryParam::init('modelMap', $options)->extract('modelMap')
            );

        $_resHandler = $this->responseHandler()->type(ServerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get Value
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getValue()
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/response/getValue');

        return $this->execute($_reqBuilder);
    }

    /**
     * Get Value Array
     *
     * @return array|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getValueArray(): ?array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/response/getValueArray');

        return $this->execute($_reqBuilder);
    }

    /**
     * Get Value Map
     *
     * @return array|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getValueMap(): ?array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/response/getValueMap');

        return $this->execute($_reqBuilder);
    }

    /**
     * Get Value in Model
     *
     * @return ValueContainer|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getValueinModel(): ?ValueContainer
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/response/getValueInModel');

        $_resHandler = $this->responseHandler()->type(ValueContainer::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
