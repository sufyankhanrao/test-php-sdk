# Json Obj

```php
$jsonObjController = $client->getJsonObjController();
```

## Class Name

`JsonObjController`

## Methods

* [Send Schemain Model](../../doc/controllers/json-obj.md#send-schemain-model)
* [Send Schemaas Body](../../doc/controllers/json-obj.md#send-schemaas-body)
* [Send Schemaas Form](../../doc/controllers/json-obj.md#send-schemaas-form)
* [Send Schemaas Query](../../doc/controllers/json-obj.md#send-schemaas-query)
* [Get Schema](../../doc/controllers/json-obj.md#get-schema)
* [Get Schema Array](../../doc/controllers/json-obj.md#get-schema-array)
* [Get Schema Map](../../doc/controllers/json-obj.md#get-schema-map)
* [Get Schemain Model](../../doc/controllers/json-obj.md#get-schemain-model)


# Send Schemain Model

Send Schema in Model

```php
function sendSchemainModel(SchemaContainer $body): ?ServerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`SchemaContainer`](../../doc/models/schema-container.md) | Body, Required | - |

## Response Type

[`?ServerResponse`](../../doc/models/server-response.md)

## Example Usage

```php
$body = SchemaContainerBuilder::init(
    'a name',
    'definition-123',
    '{"key1":"val1","key2":"val2"}'
)->build();

$result = $jsonObjController->sendSchemainModel($body);
```


# Send Schemaas Body

Send Schema as Body

```php
function sendSchemaasBody($body): ?ServerResponse
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

$result = $jsonObjController->sendSchemaasBody($body);
```


# Send Schemaas Form

Send Schema as Form

```php
function sendSchemaasForm(array $options): ?ServerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `contentType` | [`string(ContentType)`](../../doc/models/content-type.md) | Header, Required | - |
| `id` | `int` | Form, Required | - |
| `model` | `mixed` | Form, Required | - |
| `modelArray` | `mixed` | Form, Optional | - |
| `modelMap` | `mixed` | Form, Optional | - |

## Response Type

[`?ServerResponse`](../../doc/models/server-response.md)

## Example Usage

```php
$collect = [
    'contentType' => ContentType::ENUM_APPLICATIONXWWWFORMURLENCODED,
    'id' => 112,
    'model' => '{"key1":"val1","key2":"val2"}'
];

$result = $jsonObjController->sendSchemaasForm($collect);
```


# Send Schemaas Query

Send Schema as Query

```php
function sendSchemaasQuery(array $options): ?ServerResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `int` | Query, Required | - |
| `model` | `mixed` | Query, Required | - |
| `modelArray` | `mixed` | Query, Optional | - |
| `modelMap` | `mixed` | Query, Optional | - |

## Response Type

[`?ServerResponse`](../../doc/models/server-response.md)

## Example Usage

```php
$collect = [
    'id' => 112,
    'model' => '{"key1":"val1","key2":"val2"}'
];

$result = $jsonObjController->sendSchemaasQuery($collect);
```


# Get Schema

Get Schema

```php
function getSchema()
```

## Response Type

`mixed`

## Example Usage

```php
$result = $jsonObjController->getSchema();
```


# Get Schema Array

Get Schema Array

```php
function getSchemaArray()
```

## Response Type

`mixed`

## Example Usage

```php
$result = $jsonObjController->getSchemaArray();
```


# Get Schema Map

Get Schema Map

```php
function getSchemaMap()
```

## Response Type

`mixed`

## Example Usage

```php
$result = $jsonObjController->getSchemaMap();
```


# Get Schemain Model

Get Schema in Model

```php
function getSchemainModel(): ?SchemaContainer
```

## Response Type

[`?SchemaContainer`](../../doc/models/schema-container.md)

## Example Usage

```php
$result = $jsonObjController->getSchemainModel();
```

