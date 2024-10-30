
# Server Response

## Structure

`ServerResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `passed` | `bool` | Required | - | getPassed(): bool | setPassed(bool passed): void |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |
| `input` | `mixed` | Optional | - | getInput(): | setInput( input): void |
| `nullableNumberMap` | `?array<string,?float>` | Optional | - | getNullableNumberMap(): ?array | setNullableNumberMap(?array nullableNumberMap): void |
| `nullableNumberArray` | `?(array<?float>)` | Optional | - | getNullableNumberArray(): ?array | setNullableNumberArray(?array nullableNumberArray): void |

## Example (as JSON)

```json
{
  "passed": false,
  "Message": "Message6",
  "input": {
    "key0": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "nullableNumberMap": {
    "key0": 117.45,
    "key1": 117.46
  },
  "nullableNumberArray": [
    216.38,
    216.39,
    216.4
  ]
}
```

