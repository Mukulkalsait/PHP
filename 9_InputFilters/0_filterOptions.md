# PHP `filter_input()` Options

This file provides a list of filter options available in the `filter_input()` function in PHP, categorized by their type (Sanitize, Validate) and sorted alphabetically.

## Sanitize Filters

what i realize is when i use sanitize it sanitize the next term. like in sanitize_email it will make only email remain

- **FILTER_SANITIZE_EMAIL**: Removes all illegal characters from an email address.
- **FILTER_SANITIZE_ENCODED**: URL-encodes a string (like `urlencode()`).
- **FILTER_SANITIZE_FLOAT**: Removes all non-numeric characters (except the decimal point) from a float.
- **FILTER_SANITIZE_INT**: Removes all non-numeric characters (except `+`, `-`, and space) from an integer.
- **FILTER_SANITIZE_MAGIC_QUOTES**: Removes backslashes from the string (same as `stripslashes()`).
- **FILTER_SANITIZE_NUMBER_INT**: Removes all characters except digits, plus, minus, and space.
- **FILTER_SANITIZE_NUMBER_FLOAT**: Removes all characters except digits, decimal point, and signs.
- **FILTER_SANITIZE_SPECIAL_CHARS**: Converts special characters to HTML entities.
- **FILTER_SANITIZE_STRING**: Removes tags and optionally removes or encodes special characters.
- **FILTER_SANITIZE_URL**: Removes all illegal characters from a URL.

## Validate Filters

- **FILTER_VALIDATE_EMAIL**: Validates whether the input is a valid email address.
- **FILTER_VALIDATE_FLOAT**: Validates whether the input is a valid float number.
- **FILTER_VALIDATE_INT**: Validates whether the input is a valid integer.
- **FILTER_VALIDATE_IP**: Validates whether the input is a valid IP address.
- **FILTER_VALIDATE_MAC**: Validates whether the input is a valid MAC address.
- **FILTER_VALIDATE_REGEXP**: Validates the input using a regular expression.
- **FILTER_VALIDATE_URL**: Validates whether the input is a valid URL.

## Flags

- **FILTER_FLAG_ALLOW_ARRAY**: Allows an array as input for the filter. better for something with multyple OP's like checkbox.
- **FILTER_FLAG_ALLOW_HEX**: Allows hexadecimal characters (for integers).
- **FILTER_FLAG_ENCODE_LOW**: Encodes low ASCII characters for certain sanitizers.
- **FILTER_FLAG_HOSTNAME**: Validates a hostname (used with `FILTER_VALIDATE_URL` or `FILTER_VALIDATE_IP`).
- **FILTER_FLAG_IPV4**: Validates whether the IP address is IPv4.
- **FILTER_FLAG_IPV6**: Validates whether the IP address is IPv6.
- **FILTER_FLAG_NO_PRIV_RANGE**: Validates that IP addresses are not from private ranges (e.g., 192.168.x.x).
- **FILTER_FLAG_NO_RES_RANGE**: Validates that IP addresses are not from reserved ranges.
