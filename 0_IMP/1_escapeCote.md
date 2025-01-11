<!--DX: usage  -->
<!-- echo "Hello\nWorld"; // Outputs: -->
<!-- // Hello -->
<!-- // World -->

### How to Use Escape Sequences in PHP

- **In Double-Quoted Strings**:

  - You should use escape sequences inside double quotes for them to be processed correctly.
  - For example, `echo "Hello\nWorld";` will output the text on two lines.

- **In Single-Quoted Strings**:
  - Escape sequences such as `\n`, `\r`, etc., will not work inside single-quoted strings.
  - For a backslash (`\\`) or single quote (`\'`), use them inside single-quoted strings:
    ```php
    echo 'It\'s a test';  // Outputs: It's a test
    ```

#### Example usage:

- **Correct Usage in Double-Quoted String**:
  ```php
  echo "This is a tab:\tAnd this is a new line:\nSecond line";
  // Outputs: This is a tab:    And this is a new line:
  //           Second line
  ```

<!-- Y: VVVIMP -->
<!-- --- -->
<!-- JavaScript/TypeScript and Rust support extended Unicode escapes like \u{XXXX} (for any Unicode character). -->
<!-- Java and C/C++ use \uXXXX for Unicode with four hexadecimal digits. -->
<!-- JavaScript additionally supports \u{XXXX} for longer Unicode sequences. -->
<!-- PHP is more restrictive when it comes to handling complex Unicode sequences compared to some other languages. -->

<!-- G: PHP -->

# PHP Escape Sequences

- **`\n`** - New Line: Inserts a newline character.
- **`\r`** - Carriage Return: Moves the cursor to the beginning of the line.
- **`\t`** - Tab: Inserts a horizontal tab.
- **`\b`** - Backspace: Moves the cursor one character backward.
- **`\f`** - Form Feed: Advances to the next page (less commonly used).
- **`\\`** - Backslash: Inserts an actual backslash (`\`).
- **`\'`** - Single Quote: Allows inclusion of a single quote in single-quoted strings.
- **`\"`** - Double Quote: Allows inclusion of a double quote in double-quoted strings.
- **`\$`** - Dollar Sign: Allows inclusion of a dollar sign in double-quoted strings.
- **`\0`** - Null Byte: Represents the null byte (ASCII 0).
- **`\xXX`** - Hexadecimal: Represents a byte as a hexadecimal value, where `XX` is the hexadecimal value.
- **`\u{XXXX}`** - Unicode Code Point: Represents a Unicode character using the given code point (`XXXX` is a hexadecimal number).
- **`\v`** - Vertical Tab: Inserts a vertical tab (less commonly used).

<!-- G:  JAVA -->

# Java Escape Sequences

- **`\n`** - New Line: Inserts a newline character.
- **`\r`** - Carriage Return: Moves the cursor to the beginning of the line.
- **`\t`** - Tab: Inserts a horizontal tab.
- **`\b`** - Backspace: Moves the cursor one character backward.
- **`\f`** - Form Feed: Advances to the next page.
- **`\\`** - Backslash: Inserts an actual backslash (`\`).
- **`\'`** - Single Quote: Allows inclusion of a single quote in single-quoted strings.
- **`\"`** - Double Quote: Allows inclusion of a double quote in double-quoted strings.
- **`\0`** - Null Byte: Represents the null byte (ASCII 0).
- **`\uXXXX`** - Unicode: Represents a Unicode character using four hex digits.
- **`\M`** - Not a standard escape sequence in Java, though could be used in specific contexts like regex (may be confused with other languages).

<!-- G: JavaScript and Typescript -->

# JavaScript & TypeScript Escape Sequences

- **`\n`** - New Line: Inserts a newline character.
- **`\r`** - Carriage Return: Moves the cursor to the beginning of the line.
- **`\t`** - Tab: Inserts a horizontal tab.
- **`\b`** - Backspace: Moves the cursor one character backward.
- **`\f`** - Form Feed: Advances to the next page.
- **`\\`** - Backslash: Inserts an actual backslash (`\`).
- **`\'`** - Single Quote: Allows inclusion of a single quote in single-quoted strings.
- **`\"`** - Double Quote: Allows inclusion of a double quote in double-quoted strings.
- **`\0`** - Null Byte: Represents the null byte (ASCII 0).
- **`\xXX`** - Hexadecimal: Represents a byte as a hexadecimal value.
- **`\uXXXX`** - Unicode: Represents a Unicode character using four hex digits (e.g., `\u003C` for `<`).
- **`\u{XXXX}`** - Extended Unicode: Represents a Unicode character using curly braces with one or more hex digits (e.g., `\u{1F600}` for 😀).
- **`\v`** - Vertical Tab: Inserts a vertical tab (rarely used).

<!-- G: Rust  -->

# Rust Escape Sequences

- **`\n`** - New Line: Inserts a newline character.
- **`\r`** - Carriage Return: Moves the cursor to the beginning of the line.
- **`\t`** - Tab: Inserts a horizontal tab.
- **`\xXX`** - Hexadecimal: Represents a byte as a hexadecimal value (`XX` is two hexadecimal digits).
- **`\u{XXXX}`** - Unicode: Represents a Unicode character using curly braces (e.g., `\u{1F600}` for 😀).
- **`\\`** - Backslash: Inserts an actual backslash (`\`).
- **`\n`** - Line Feed: Used to indicate a new line (same as `\n` in other languages).
- **`\0`** - Null Byte: Represents the null byte (ASCII 0).
- **`\b`** - Backspace: Moves the cursor one character backward.
- **`\'`** - Single Quote: Allows inclusion of a single quote in single-quoted strings.
- **`\"`** - Double Quote: Allows inclusion of a double quote in double-quoted strings.

 <!-- G:  Python -->

# Python Escape Sequences

- **`\n`** - New Line: Inserts a newline character.
- **`\r`** - Carriage Return: Moves the cursor to the beginning of the line.
- **`\t`** - Tab: Inserts a horizontal tab.
- **`\b`** - Backspace: Moves the cursor one character backward.
- **`\f`** - Form Feed: Advances to the next page.
- **`\\`** - Backslash: Inserts an actual backslash (`\`).
- **`\'`** - Single Quote: Allows inclusion of a single quote in single-quoted strings.
- **`\"`** - Double Quote: Allows inclusion of a double quote in double-quoted strings.
- **`\0`** - Null Byte: Represents the null byte (ASCII 0).
- **`\xXX`** - Hexadecimal: Represents a byte as a hexadecimal value.
- **`\uXXXX`** - Unicode: Represents a Unicode character using four hex digits.
- **`\UXXXXXXXX`** - Unicode: Represents a Unicode character using eight hex digits.

<!-- G: C/C++ -->

# C/C++ Escape Sequences

- **`\n`** - New Line: Inserts a newline character.
- **`\r`** - Carriage Return: Moves the cursor to the beginning of the line.
- **`\t`** - Tab: Inserts a horizontal tab.
- **`\b`** - Backspace: Moves the cursor one character backward.
- **`\f`** - Form Feed: Advances to the next page.
- **`\\`** - Backslash: Inserts an actual backslash (`\`).
- **`\'`** - Single Quote: Allows inclusion of a single quote in single-quoted strings.
- **`\"`** - Double Quote: Allows inclusion of a double quote in double-quoted strings.
- **`\0`** - Null Byte: Represents the null byte (ASCII 0).
- **`\xXX`** - Hexadecimal: Represents a byte as a hexadecimal value.
- **`\uXXXX`** - Unicode: Represents a Unicode character using four hex digits (e.g., `\u263A` for ☺).
