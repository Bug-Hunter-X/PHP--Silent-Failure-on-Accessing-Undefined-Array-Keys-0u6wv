# PHP: Silent Failure on Accessing Undefined Array Keys

This repository demonstrates a common, yet subtle, error in PHP: the silent return of `null` when accessing undefined array keys.  Accessing a key that doesn't exist doesn't throw an error but instead returns `null`, potentially leading to unexpected behavior and hard-to-find bugs.

The `bug.php` file shows the problematic code. The `bugSolution.php` file presents solutions to prevent this problem.  Understanding and addressing this issue is crucial for writing robust and reliable PHP applications. 