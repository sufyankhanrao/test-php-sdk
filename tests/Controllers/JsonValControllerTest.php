<?php

declare(strict_types=1);

/*
 * JsonValueTesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace JsonValueTesterLib\Tests\Controllers;

use Core\TestCase\BodyMatchers\KeysAndValuesBodyMatcher;
use Core\TestCase\BodyMatchers\RawBodyMatcher;
use Core\TestCase\TestParam;
use JsonValueTesterLib\Controllers\JsonValController;
use JsonValueTesterLib\Exceptions;
use JsonValueTesterLib\Models;

class JsonValControllerTest extends BaseTestController
{
    /**
     * @var JsonValController JsonValController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getJsonValController();
    }

    public function testSendValueInModel()
    {
        // Parameters for the API call
        $body = TestParam::object(
            '{"name":"a name","id":"definition-123","valueMap":{"key1":"some string","key2":tru' .
            'e,"key3":123},"valueArray":["some string",true,123],"value":"some string value in m' .
            'odel"}',
            Models\ValueContainer::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->sendValueinModel($body);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(KeysAndValuesBodyMatcher::init(TestParam::object('{"passed":true}')))
            ->assert();
    }

    public function testSendValueAsBody()
    {
        // Parameters for the API call
        $body = TestParam::object('false');

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->sendValueasBody($body);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(KeysAndValuesBodyMatcher::init(TestParam::object('{"passed":true}')))
            ->assert();
    }

    public function testSendValueAsForm()
    {
        // Parameters for the API call
        $input = [];
        $input['contentType'] =
            Models\ContentType::ENUM_APPLICATIONXWWWFORMURLENCODED;
        $input['id'] = 54;
        $input['model'] = TestParam::object('true');
        $input['modelArray'] = TestParam::object('[true,"some string",123]');
        $input['modelMap'] = TestParam::object('{"key1":true,"key2":"some string","key3":123}');

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->sendValueasForm($input);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(KeysAndValuesBodyMatcher::init(TestParam::object('{"passed":true}')))
            ->assert();
    }

    public function testSendValueAsQuery()
    {
        // Parameters for the API call
        $input = [];
        $input['id'] = 54;
        $input['model'] = TestParam::object('true');
        $input['modelArray'] = TestParam::object('[true,"some string",123]');
        $input['modelMap'] = TestParam::object('{"key1":true,"key2":"some string","key3":123}');

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->sendValueasQuery($input);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(KeysAndValuesBodyMatcher::init(TestParam::object('{"passed":true}')))
            ->assert();
    }

    public function testGetValue()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getValue();
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->bodyMatcher(RawBodyMatcher::init('978'))->assert();
    }

    public function testGetValueArray()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getValueArray();
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(RawBodyMatcher::init('[978,"some string",false]'))
            ->assert();
    }

    public function testGetValueMap()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getValueMap();
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(
                KeysAndValuesBodyMatcher::init(TestParam::object('{"key1":978,"key2":"some string","key3":false}'))
            )
            ->assert();
    }

    public function testGetValueInModel()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getValueinModel();
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(KeysAndValuesBodyMatcher::init(TestParam::object(
                '{"name":"a name","id":"definition-123","valueMap":{"key1":"some string","key2"' .
                ':true,"key3":123},"valueArray":["some string",true,123],"value":"some string va' .
                'lue in model"}'
            )))
            ->assert();
    }
}
