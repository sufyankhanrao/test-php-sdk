<?php

declare(strict_types=1);

/*
 * JsonValueTesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace JsonValueTesterLib;

use CoreInterfaces\Http\HttpConfigurations;

/**
 * An interface for all configuration parameters required by the SDK.
 */
interface ConfigurationInterface extends HttpConfigurations
{
    /**
     * Get current API environment
     */
    public function getEnvironment(): string;

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string;
}
