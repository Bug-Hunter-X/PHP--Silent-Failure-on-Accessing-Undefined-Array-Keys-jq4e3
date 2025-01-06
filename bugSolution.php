To prevent this issue, always check if a key exists before accessing it.  Here are two common approaches:

**1. Using `isset()`:**

```php
<?php
$myArray = [];
$myArray["foo"] = 1;
$myArray["bar"] = 2;

if (isset($myArray["baz"])) {
  echo $myArray["baz"];
} else {
  echo "Key 'baz' does not exist.";
}
?>
```

**2. Using `array_key_exists()`:**

```php
<?php
$myArray = [];
$myArray["foo"] = 1;
$myArray["bar"] = 2;

if (array_key_exists("baz", $myArray)) {
  echo $myArray["baz"];
} else {
  echo "Key 'baz' does not exist.";
}
?>
```

Both methods provide explicit error handling, preventing unexpected results from accessing undefined keys.  `array_key_exists()` is generally preferred for its clarity when dealing specifically with array keys.