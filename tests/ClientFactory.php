<?php

declare(strict_types=1);

/*
 * JsonValueTesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace JsonValueTesterLib\Tests;

use Core\Types\CallbackCatcher;
use JsonValueTesterLib\JsonValueTesterClient;
use JsonValueTesterLib\JsonValueTesterClientBuilder;

class ClientFactory
{
    public static function create(CallbackCatcher $httpCallback): JsonValueTesterClient
    {
        $clientBuilder = JsonValueTesterClientBuilder::init();
        $clientBuilder = self::addConfigurationFromEnvironment($clientBuilder);
        $clientBuilder = self::addTestConfiguration($clientBuilder);
        return $clientBuilder->httpCallback($httpCallback)->build();
    }

    public static function addTestConfiguration(JsonValueTesterClientBuilder $builder): JsonValueTesterClientBuilder
    {
        return $builder;
    }

    public static function addConfigurationFromEnvironment(
        JsonValueTesterClientBuilder $builder
    ): JsonValueTesterClientBuilder {
        $timeout = getenv('JSON_VALUE_TESTER_LIB_TIMEOUT');
        $numberOfRetries = getenv('JSON_VALUE_TESTER_LIB_NUMBER_OF_RETRIES');
        $maximumRetryWaitTime = getenv('JSON_VALUE_TESTER_LIB_MAXIMUM_RETRY_WAIT_TIME');
        $environment = getenv('JSON_VALUE_TESTER_LIB_ENVIRONMENT');

        if (!empty($timeout) && \is_numeric($timeout)) {
            $builder->timeout(intval($timeout));
        }

        if (!empty($numberOfRetries) && \is_numeric($numberOfRetries)) {
            $builder->numberOfRetries(intval($numberOfRetries));
        }

        if (!empty($maximumRetryWaitTime) && \is_numeric($maximumRetryWaitTime)) {
            $builder->maximumRetryWaitTime(intval($maximumRetryWaitTime));
        }

        if (!empty($environment)) {
            $builder->environment($environment);
        }

        return $builder;
    }
}
