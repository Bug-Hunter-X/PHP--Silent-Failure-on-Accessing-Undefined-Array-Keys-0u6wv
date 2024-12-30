The best way to avoid this problem is to always check if a key exists before accessing it.  Here are a few ways to do this:

**1. Using `isset()`:**

```php
<?php
$myArray = [];
$myArray["a"] = 1;
$myArray["b"] = 2;

if (isset($myArray["c"])) {
  echo $myArray["c"];
} else {
  echo "Key 'c' does not exist";
}
?>
```

**2. Using `array_key_exists()`:**

```php
<?php
$myArray = [];
$myArray["a"] = 1;
$myArray["b"] = 2;

if (array_key_exists("c", $myArray)) {
  echo $myArray["c"];
} else {
  echo "Key 'c' does not exist";
}
?>
```

**3. Using the null coalescing operator (`??`):** (PHP 7.0 and later)

```php
<?php
$myArray = [];
$myArray["a"] = 1;
$myArray["b"] = 2;

$value = $myArray["c"] ?? 0; // Assign 0 if the key doesn't exist
echo $value;
?>
```

The null coalescing operator provides a concise way to provide a default value if the key is not set.  Choose the method that best suits your coding style and context.  Always prioritize explicit checking to prevent unexpected behavior.