<body style="color: white;">
<?php
// Sample text data (at least 200 words)
$text = "The quick brown fox jumps over the lazy dog. This sentence contains every letter of the alphabet. 1234 5678 are numbers, and here's an email: john.doe@example.com. 
The fox and dog have been friends for many years, and their adventures are always fun. By the way, the email address was used for registration. On top of that, there are some special characters here: !@#$%^&*()_+=[]{}|:;,.<>?/`~";

echo "<h3>Sample Text:</h3>";
echo "<p>$text</p>";
echo "<hr>";

// DX:---------------------------
// 1. preg_match() Examples (single match)
// ---------------------------

// Y: Match a word that starts with "fox"
echo "<h4>Example 1 - Match a word starting with 'fox':</h4>";
$pattern = "/\bfox\w*/"; // Matches the word 'fox' and any following characters (if any)
if (preg_match($pattern, $text, $matches)) {
    echo "Match Found: " . $matches[0];
} else {
    echo "No match found.";
}
echo "<hr>";

// Y:Match a 4-digit number (e.g., 1234)
echo "<h4>Example 2 - Match a 4-digit number:</h4>";
$pattern = "/\d{4}/"; // Matches a 4-digit number
if (preg_match($pattern, $text, $matches)) {
    echo "Match Found: " . $matches[0];
} else {
    echo "No match found.";
}
echo "<hr>";

// Y:Match an email address
echo "<h4>Example 3 - Match an email address:</h4>";
$pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/"; // Matches email addresses
if (preg_match($pattern, $text, $matches)) {
    echo "Match Found: " . $matches[0];
} else {
    echo "No match found.";
}
echo "<hr>";

// DX:---------------------------
// 2. preg_match_all() Examples (all matches)
// ---------------------------

// Y:Find all words starting with 'T' or 't'
echo "<h4>Example 4 - Match all words starting with 'T' or 't':</h4>";
$pattern = "/\b[tT]\w*/"; // Matches words starting with 't' or 'T'
preg_match_all($pattern, $text, $matches);
echo "<pre>";
print_r($matches[0]);
echo "</pre>";
echo "<hr>";

// Y:Match all numbers
echo "<h4>Example 5 - Match all numbers:</h4>";
$pattern = "/\d+/"; // Matches any sequence of digits
preg_match_all($pattern, $text, $matches);
echo "<pre>";
print_r($matches[0]);
echo "</pre>";
echo "<hr>";

// DX:---------------------------
// 3. preg_replace() Examples (replace)
// ---------------------------

// Y:Replace all digits with '#'
echo "<h4>Example 6 - Replace all digits with '#':</h4>";
$pattern = "/\d+/"; // Matches digits
$textReplaced = preg_replace($pattern, "#", $text);
echo "<p>$textReplaced</p>";
echo "<hr>";

// Y:Replace all occurrences of 'fox' with 'cat'
echo "<h4>Example 7 - Replace 'fox' with 'cat':</h4>";
$pattern = "/fox/"; // Matches 'fox'
$textReplaced = preg_replace($pattern, "cat", $text);
echo "<p>$textReplaced</p>";
echo "<hr>";

// DX:---------------------------
// 4. preg_filter() Examples (filter matches)
// ---------------------------

// Y:Filter out all words that are less than 4 characters long
echo "<h4>Example 8 - Filter words that are less than 4 characters:</h4>";
$pattern = "/\b\w{4,}\b/"; // Matches words with 4 or more characters
$filtered = preg_filter($pattern, $text, $matches);
echo "<pre>";
print_r($filtered);
echo "</pre>";
echo "<hr>";

// DX:---------------------------
// 5. Quantifiers Examples
// ---------------------------

// Y:Match one or more occurrences of 'fox'
echo "<h4>Example 9 - Match one or more occurrences of 'fox':</h4>";
$pattern = "/fox+/"; // Matches 'fox' followed by 1 or more 'o's
if (preg_match($pattern, $text, $matches)) {
    echo "Match Found: " . $matches[0];
} else {
    echo "No match found.";
}
echo "<hr>";

// Y:Match zero or more spaces
echo "<h4>Example 10 - Match zero or more spaces:</h4>";
$pattern = "/\s*/"; // Matches zero or more spaces
preg_match_all($pattern, $text, $matches);
echo "<pre>";
print_r($matches[0]);
echo "</pre>";
echo "<hr>";

// Y:Match optional 'the' (0 or 1 occurrence)
echo "<h4>Example 11 - Match optional 'the' (0 or 1 occurrence):</h4>";
$pattern = "/the?/"; // Matches 'the' or 'th'
if (preg_match($pattern, $text, $matches)) {
    echo "Match Found: " . $matches[0];
} else {
    echo "No match found.";
}
echo "<hr>";

// DX:---------------------------
// 6. Groups and Capturing Examples
// ---------------------------

// Y:Capture groups for date (dd-mm-yyyy)
echo "<h4>Example 12 - Capture groups for date (dd-mm-yyyy):</h4>";
$pattern = "/(\d{2})-(\d{2})-(\d{4})/"; // Matches date format dd-mm-yyyy
preg_match($pattern, "12-34-2025", $matches);
echo "<pre>";
print_r($matches);
echo "</pre>";
echo "<hr>";

// DX:---------------------------
// 7. Lookahead and Lookbehind Examples
// ---------------------------

// Y:Lookahead: Match 'fox' only if it is followed by 'jumps'
echo "<h4>Example 13 - Lookahead: Match 'fox' if followed by 'jumps':</h4>";
$pattern = "/fox(?= jumps)/"; // Positive lookahead for 'jumps' after 'fox'
if (preg_match($pattern, $text, $matches)) {
    echo "Match Found: " . $matches[0];
} else {
    echo "No match found.";
}
echo "<hr>";

// Y:Lookbehind: Match 'jumps' only if preceded by 'fox'
echo "<h4>Example 14 - Lookbehind: Match 'jumps' if preceded by 'fox':</h4>";
$pattern = "/(?<=fox )jumps/"; // Positive lookbehind for 'fox' before 'jumps'
if (preg_match($pattern, $text, $matches)) {
    echo "Match Found: " . $matches[0];
} else {
    echo "No match found.";
}
echo "<hr>";
?>

