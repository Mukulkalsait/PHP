# PHP Predefined Functions

Below is a categorized and alphabetically ordered list of PHP predefined functions with brief explanations.

---

## 1. **Array Functions**

- `array_change_key_case` = Changes the case of all keys in an array.
- `array_chunk` = Split an array into chunks of arrays.
- `array_column` = Return the values from a single column in the input array.
- `array_combine` = Creates an array by using one array for keys and another for values.
- `array_count_values` = Counts all the values of an array.
- `array_diff` = Computes the difference of arrays.
- `array_diff_assoc` = Computes the difference of arrays with additional checks for keys.
- `array_diff_key` = Computes the difference of arrays using keys for comparison.
- `array_fill` = Fills an array with values.
- `array_filter` = Filters elements of an array using a callback function.
- `array_flip` = Exchanges all keys with their associated values in an array.
- `array_intersect` = Computes the intersection of arrays.
- `array_intersect_assoc` = Computes the intersection of arrays with keys checked.
- `array_intersect_key` = Computes the intersection of arrays using keys.
- `array_key_exists` = Checks if the given key or index exists in an array.
- `array_keys` = Returns all the keys of an array.
- `array_map` = Applies a callback to the elements of an array.
- `array_merge` = Merges one or more arrays.
- `array_merge_recursive` = Merges arrays recursively.
- `array_multisort` = Sorts multiple or multi-dimensional arrays.
- `array_pad` = Pads an array to the specified length.
- `array_pop` = Pops the last element off an array.
- `array_push` = Pushes one or more elements onto the end of an array.
- `array_rand` = Picks one or more random keys from an array.
- `array_reduce` = Iteratively reduces an array to a single value using a callback.
- `array_replace` = Replaces elements of an array with elements from another array.
- `array_reverse` = Returns an array with elements in reverse order.
- `array_search` = Searches an array for a given value and returns its key.
- `array_shift` = Shifts an element off the beginning of an array.
- `array_slice` = Extracts a slice of an array.
- `array_splice` = Removes or replaces a portion of an array.
- `array_sum` = Calculates the sum of an array.
- `array_unique` = Removes duplicate values from an array.
- `array_unshift` = Prepend one or more elements to the beginning of an array.
- `array_values` = Returns all the values of an array.

---

## 2. **Date and Time Functions**

- `date` = Formats a local date and time.
- `date_create` = Creates a new DateTime object.
- `date_diff` = Calculates the difference between two DateTime objects.
- `date_format` = Formats a DateTime object.
- `date_interval_create_from_date_string` = Creates a DateInterval object from a date string.
- `date_isodate_set` = Sets the ISO date for a DateTime object.
- `date_modify` = Modifies a DateTime object.
- `date_parse` = Parses a date string into an associative array.
- `date_parse_from_format` = Parses a date according to a specific format.
- `date_sub` = Subtracts an interval from a DateTime object.
- `strtotime` = Parses an English textual datetime description into a Unix timestamp.
- `time` = Returns the current Unix timestamp.
- `mktime` = Gets the Unix timestamp for a date.
- `microtime` = Returns the current Unix timestamp with microseconds.

---

## 3. **Math Functions**

- `abs` = Returns the absolute value of a number.
- `acos` = Returns the arc cosine of a number.
- `asin` = Returns the arc sine of a number.
- `atan` = Returns the arc tangent of a number.
- `atan2` = Returns the arc tangent of the two arguments.
- `base_convert` = Converts a number between different bases.
- `bindec` = Converts a binary number to a decimal.
- `ceil` = Rounds a number up to the nearest integer.
- `cos` = Returns the cosine of an angle.
- `deg2rad` = Converts degrees to radians.
- `exp` = Returns e raised to the power of a number.
- `floor` = Rounds a number down to the nearest integer.
- `fmod` = Returns the remainder of a division.
- `hypot` = Returns the length of the hypotenuse.
- `intval` = Returns the integer value of a variable.
- `log` = Returns the natural logarithm of a number.
- `log10` = Returns the base-10 logarithm of a number.
- `max` = Finds the highest value in an array or among arguments.
- `min` = Finds the lowest value in an array or among arguments.
- `mt_rand` = Generates a better random number using the Mersenne Twister algorithm.
- `pi` = Returns the value of pi.
- `pow` = Returns the result of a number raised to a power.
- `rad2deg` = Converts radians to degrees.
- `rand` = Generates a random integer.
- `round` = Rounds a floating-point number.
- `sin` = Returns the sine of an angle.
- `sqrt` = Returns the square root of a number.
- `tan` = Returns the tangent of an angle.

---

## 4. **String Functions**

- `addslashes` = Adds backslashes before characters that need to be escaped in a string.
- `bin2hex` = Converts a binary string into hexadecimal representation.
- `chdir` = Changes the current working directory.
- `chop` = Removes whitespace or other characters from the end of a string.
- `chr` = Returns a character from a given ASCII value.
- `chunk_split` = Splits a string into smaller chunks.
- `convert_cyr_string` = Converts a Cyrillic string to a different Cyrillic character set.
- `count_chars` = Returns information about characters used in a string.
- `crc32` = Computes the CRC32 checksum of a string.
- `explode` = Splits a string by a delimiter into an array.
- `fprintf` = Writes a formatted string to a file.
- `get_html_translation_table` = Returns the translation table used by htmlspecialchars and htmlentities.
- `hex2bin` = Converts a hexadecimal string to binary data.
- `htmlspecialchars` = Converts special characters to HTML entities.
- `htmlspecialchars_decode` = Converts HTML entities back to their original characters.
- `implode` = Joins array elements into a single string.
- `lcfirst` = Converts the first character of a string to lowercase.
- `levenshtein` = Calculates the Levenshtein distance between two strings.
- `md5` = Calculates the MD5 hash of a string.
- `money_format` = Formats a number as a currency string.
- `nl2br` = Inserts HTML line breaks before all newlines in a string.
- `number_format` = Formats a number with grouped thousands.
- `ord` = Returns the ASCII value of the first character of a string.
- `parse_str` = Parses a query string into variables.
- `print` = Outputs a string.
- `printf` = Outputs a formatted string.
- `quotemeta` = Escapes special characters for use in regular expressions.
- `rtrim` = Strips whitespace (or other characters) from the end of a string.
- `sha1` = Calculates the SHA-1 hash of a string.
- `similar_text` = Calculates the similarity between two strings.
- `soundex` = Returns the soundex key of a string.
- `sprintf` = Returns a formatted string.
- `str_ireplace` = Case-insensitive search and replace in a string.
- `str_pad` = Pads a string to a certain length with another string.
- `str_repeat` = Repeats a string a specified number of times.
- `str_replace` = Replaces all occurrences of a substring in a string.
- `str_rot13` = Encodes a string using the ROT13 cipher.
- `str_shuffle` = Randomly shuffles all characters in a string.
- `str_split` = Splits a string into an array.
- `str_word_count` = Counts the number of words in a string.
- `substr` = Returns part of a string.
- `substr_count` = Counts the number of occurrences of a substring in a string.
- `trim` = Strips whitespace (or other characters) from both ends of a string.
- `ucfirst` = Converts the first character of a string to uppercase.
- `ucwords` = Converts the first character of each word in a string to uppercase.
- `vprintf` = Outputs a formatted string using argument variables.

---

## 5. **Variable and Type Functions**

- `gettype` = Returns the type of a variable.
- `is_array` = Checks if a variable is an array.
- `is_bool` = Checks if a variable is a boolean.
- `is_double` = Checks if a variable is a double (float).
- `is_int` = Checks if a variable is an integer.
- `is_null` = Checks if a variable is null.
- `is_numeric` = Checks if a variable is a number or numeric string.
- `is_object` = Checks if a variable is an object.
- `is_resource` = Checks if a variable is a resource.
- `is_string` = Checks if a variable is a string.
- `isset` = Checks if a variable is set and not null.
- `unset` = Unsets a variable.

---

## 6. **Miscellaneous Functions**

- `call_user_func` = Calls a user-defined function.
- `call_user_func_array` = Calls a user-defined function with an array of parameters.
- `exit` = Terminates the script.
- `flush` = Sends output to the browser.
- `getenv` = Retrieves the value of an environment variable.
- `getcwd` = Gets the current working directory.
- `ini_get` = Retrieves a configuration option from the php.ini file.
- `ini_set` = Sets a configuration option in the php.ini file.
- `phpinfo` = Outputs information about PHP's configuration.
- `set_error_handler` = Sets a user-defined error handler function.
- `set_exception_handler` = Sets a user-defined exception handler function.

---
