# Regular Expressions in PHP

This document contains a list of common regular expressions used in PHP, organized by type.

## 1. Character Classes

- `\d`: Matches any digit (equivalent to `[0-9]`).
- `\D`: Matches any non-digit character (equivalent to `[^0-9]`).
- `\w`: Matches any word character (letters, digits, and underscores, equivalent to `[A-Za-z0-9_]`).
- `\W`: Matches any non-word character (equivalent to `[^A-Za-z0-9_]`).
- `\s`: Matches any whitespace character (spaces, tabs, line breaks, etc.).
- `\S`: Matches any non-whitespace character.
- `\b`: Matches a word boundary.
- `\B`: Matches a non-word boundary.

<!-- Y: In the string "hello world", if you search for \bworld\b, it will match the word "world" because it is at a word boundary (there's a space before it). -->
<!--    In the string "helloworld", \bworld\b would not match because "world" is part of a continuous word and not separated by a non-word character. -->

## 2. Anchors

- `^`: Matches the start of a string.
- `$`: Matches the end of a string.

## 3. Quantifiers

- `*`: Matches 0 or more of the preceding token.
- `+`: Matches 1 or more of the preceding token.
- `?`: Matches 0 or 1 of the preceding token (optional).
- `{n}`: Matches exactly `n` occurrences of the preceding token.
- `{n,}`: Matches `n` or more occurrences of the preceding token.
- `{n,m}`: Matches between `n` and `m` occurrences of the preceding token.

## 4. Grouping and Alternation

- `()`: Groups patterns together.
- `|`: Alternation; matches either the pattern before or after the `|`.

## 5. Escape Sequences

- `\\`: Escapes a backslash.
- `\n`: Matches a newline character.
- `\r`: Matches a carriage return.
- `\t`: Matches a tab character.
- `\f`: Matches a form feed character.
- `\v`: Matches a vertical tab character.

## 6. Lookahead and Lookbehind

- `(?=...)`: Positive lookahead; asserts that what follows is the given pattern.
- `(?!...)`: Negative lookahead; asserts that what follows is not the given pattern.
- `(?<=...)`: Positive lookbehind; asserts that what precedes is the given pattern.
- `(?<!...)`: Negative lookbehind; asserts that what precedes is not the given pattern.

## 7. Unicode and Extended Character Matching

- `\p{L}`: Matches any kind of letter from any language.
- `\P{L}`: Matches anything that is not a letter.
- `\p{N}`: Matches any kind of numeric character.
- `\P{N}`: Matches anything that is not a numeric character.

## 8. Modifiers

- `i`: Case-insensitive matching.
- `m`: Multiline mode; changes the behavior of `^` and `$`.
- `s`: Dot matches newlines (`.` can match line breaks).
- `x`: Allows comments and formatting within regex patterns.
- `u`: Treats the string as UTF-8.

## 9. Other Meta-characters

- `.`: Matches any character except newline.
- `[]`: Defines a character class.
- `[^]`: Defines a negated character class (any character except those inside the brackets).
