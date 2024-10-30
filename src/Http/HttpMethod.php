<?php

declare(strict_types=1);

/*
 * JsonValueTesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace JsonValueTesterLib\Http;

use CoreInterfaces\Core\Request\RequestMethod;

/**
 * HTTP Methods Enumeration
 */
class HttpMethod
{
    public const GET = RequestMethod::GET;
    public const POST = RequestMethod::POST;
    public const PUT = RequestMethod::PUT;
    public const PATCH = RequestMethod::PATCH;
    public const DELETE = RequestMethod::DELETE;
    public const HEAD = RequestMethod::HEAD;
}
