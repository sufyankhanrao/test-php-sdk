<?php

declare(strict_types=1);

/*
 * JsonValueTesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace JsonValueTesterLib\Tests\Controllers;

use Core\TestCase\CoreTestCase;
use Core\Types\CallbackCatcher;
use JsonValueTesterLib\JsonValueTesterClient;
use JsonValueTesterLib\Tests\ClientFactory;
use PHPUnit\Framework\TestCase;

class BaseTestController extends TestCase
{
    /**
     * @var CallbackCatcher Callback
     */
    protected static $callbackCatcher;

    protected function newTestCase($result): CoreTestCase
    {
        return new CoreTestCase($this, self::$callbackCatcher, $result);
    }

    protected static function getClient(): JsonValueTesterClient
    {
        self::$callbackCatcher = new CallbackCatcher();
        return ClientFactory::create(self::$callbackCatcher);
    }
}
