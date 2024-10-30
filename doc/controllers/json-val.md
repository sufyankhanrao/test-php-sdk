# Json Val

```php
$jsonValController = $client->getJsonValController();
```

## Class Name

`JsonValController`

## Methods

* [Send Valuein Model](../../doc/controllers/json-val.md#send-valuein-model)
* [Send Valueas Body](../../doc/controllers/json-val.md#send-valueas-body)
* [Send Valueas Form](../../doc/controllers/json-val.md#send-valueas-form)
* [Send Valueas Query](../../doc/controllers/json-val.md#send-valueas-query)
* [Get Value](../../doc/controllers/json-val.md#get-value)
* [Get Value Array](../../doc/controllers/json-val.md#get-value-array)
* [Get Value Map](../../doc/controllers/json-val.md#get-value-map)
* [Get Valuein Model](../../doc/controllers/json-val.md#get-valuein-model)


# Send Valuein Model

Send Value in Model

```php
function sendValueinModel(ValueContainer $body): ?ServerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ValueContainer`](../../doc/models/value-container.md) | Body, Required | - |

## Response Type

[`?ServerResponse`](../../doc/models/server-response.md)

## Example Usage

```php
$body = ValueContainerBuilder::init(
    'a name',
    'definition-123',
    '{"key1":"val1","key2":"val2"}'
)->build();

$result = $jsonValController->sendValueinModel($body);
```


# Send Valueas Body

Send Value as Body

```php
function sendValueasBody($body): ?ServerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | `mixed` | Body, Required | - |

## Response Type

[`?ServerResponse`](../../doc/models/server-response.md)

## Example Usage

```php
$body = '{"key1":"val1","key2":"val2"}';

$result = $jsonValController->sendValueasBody($body);
```


# Send Valueas Form

Send Value as Form

```php
function sendValueasForm(array $options): ?ServerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `contentType` | [`string(ContentType)`](../../doc/models/content-type.md) | Header, Required | - |
| `id` | `int` | Form, Required | - |
| `model` | `mixed` | Form, Required | - |
| `modelArray` | `array` | Form, Optional | - |
| `modelMap` | `array` | Form, Optional | - |

## Response Type

[`?ServerResponse`](../../doc/models/server-response.md)

## Example Usage

```php
$collect = [
    'contentType' => ContentType::ENUM_APPLICATIONXWWWFORMURLENCODED,
    'id' => 112,
    'model' => '{"key1":"val1","key2":"val2"}'
];

$result = $jsonValController->sendValueasForm($collect);
```


# Send Valueas Query

Send Value as Query

```php
function sendValueasQuery(array $options): ?ServerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `int` | Query, Required | - |
| `model` | `mixed` | Query, Required | - |
| `modelArray` | `array` | Query, Optional | - |
| `modelMap` | `array` | Query, Optional | - |

## Response Type

[`?ServerResponse`](../../doc/models/server-response.md)

## Example Usage

```php
$collect = [
    'id' => 112,
    'model' => '{"key1":"val1","key2":"val2"}'
];

$result = $jsonValController->sendValueasQuery($collect);
```


# Get Value

Get Value

```php
function getValue()
```

## Response Type

`mixed`

## Example Usage

```php
$result = $jsonValController->getValue();
```


# Get Value Array

Get Value Array

```php
function getValueArray(): ?array
```

## Response Type

`?array`

## Example Usage

```php
$result = $jsonValController->getValueArray();
```


# Get Value Map

Get Value Map

```php
function getValueMap(): ?array
```

## Response Type

`?array`

## Example Usage

```php
$result = $jsonValController->getValueMap();
```


# Get Valuein Model

Get Value in Model

```php
function getValueinModel(): ?ValueContainer
```

## Response Type

[`?ValueContainer`](../../doc/models/value-container.md)

## Example Usage

```php
$result = $jsonValController->getValueinModel();
```

