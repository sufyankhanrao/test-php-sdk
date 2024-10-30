<?php

declare(strict_types=1);

/*
 * JsonValueTesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace JsonValueTesterLib;

use Core\ClientBuilder;
use Core\Utils\CoreHelper;
use JsonValueTesterLib\Controllers\JsonObjController;
use JsonValueTesterLib\Controllers\JsonValController;
use JsonValueTesterLib\Utils\CompatibilityConverter;
use Unirest\Configuration;
use Unirest\HttpClient;

class JsonValueTesterClient implements ConfigurationInterface
{
    private $jsonObj;

    private $jsonVal;

    private $config;

    private $client;

    /**
     * @see JsonValueTesterClientBuilder::init()
     * @see JsonValueTesterClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $this->client = ClientBuilder::init(new HttpClient(Configuration::init($this)))
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::DEFAULT_)
            ->build();
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return JsonValueTesterClientBuilder JsonValueTesterClientBuilder instance
     */
    public function toBuilder(): JsonValueTesterClientBuilder
    {
        return JsonValueTesterClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->environment($this->getEnvironment())
            ->httpCallback($this->config['httpCallback'] ?? null);
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see JsonValueTesterClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see JsonValueTesterClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns Json Obj Controller
     */
    public function getJsonObjController(): JsonObjController
    {
        if ($this->jsonObj == null) {
            $this->jsonObj = new JsonObjController($this->client);
        }
        return $this->jsonObj;
    }

    /**
     * Returns Json Val Controller
     */
    public function getJsonValController(): JsonValController
    {
        if ($this->jsonVal == null) {
            $this->jsonVal = new JsonValController($this->client);
        }
        return $this->jsonVal;
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [
        Environment::PRODUCTION => [
            Server::DEFAULT_ => 'http://apimatic.hopto.org',
            Server::AUTH_SERVER => 'http://apimaticauth.hopto.org:3000'
        ],
        Environment::TESTING => [
            Server::DEFAULT_ => 'http://localhost:3000',
            Server::AUTH_SERVER => 'http://apimaticauth.xhopto.org:3000'
        ]
    ];
}
