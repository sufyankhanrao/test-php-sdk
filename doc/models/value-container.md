
# Value Container

## Structure

`ValueContainer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `id` | `string` | Required | - | getId(): string | setId(string id): void |
| `value` | `mixed` | Required | - | getValue(): | setValue( value): void |
| `valueArray` | `array` | Optional | - | getValueArray(): array | setValueArray(array valueArray): void |
| `valueMap` | `array` | Optional | - | getValueMap(): array | setValueMap(array valueMap): void |

## Example (as JSON)

```json
{
  "name": "a name",
  "id": "definition-123",
  "value": {
    "key1": "val1",
    "key2": "val2"
  },
  "valueArray": [
    {
      "key1": "val1",
      "key2": "val2"
    },
    {
      "key1": "val1",
      "key2": "val2"
    }
  ],
  "valueMap": {
    "key0": {
      "key1": "val1",
      "key2": "val2"
    }
  }
}
```

