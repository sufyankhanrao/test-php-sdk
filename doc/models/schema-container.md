
# Schema Container

## Structure

`SchemaContainer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `schema` | `mixed` | Required | - | getSchema(): | setSchema( schema): void |
| `schemaArray` | `mixed` | Optional | - | getSchemaArray(): | setSchemaArray( schemaArray): void |
| `schemaMap` | `mixed` | Optional | - | getSchemaMap(): | setSchemaMap( schemaMap): void |

## Example (as JSON)

```json
{
  "name": "a name",
  "id": "definition-123",
  "schema": {
    "key1": "val1",
    "key2": "val2"
  },
  "schemaArray": [
    {
      "key1": "val1",
      "key2": "val2"
    },
    {
      "key1": "val1",
      "key2": "val2"
    },
    {
      "key1": "val1",
      "key2": "val2"
    }
  ],
  "schemaMap": {
    "key0": {
      "key1": "val1",
      "key2": "val2"
    }
  }
}
```

