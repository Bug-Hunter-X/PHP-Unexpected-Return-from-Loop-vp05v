# PHP Unexpected Return from Loop

This repository demonstrates an uncommon bug in PHP where a loop terminates unexpectedly due to an improper return statement within the loop's body.

The bug occurs in `bug.php`. The loop is intended to iterate 10 times, printing each iteration's value of `$i`. However, the loop prematurely exits when `$i` reaches 5 because of the `return;` statement.  This can cause unexpected behavior in the application depending on what the loop's purpose is.

The solution, provided in `bugSolution.php`, addresses this issue by moving the `return` statement outside the loop or employing a more structured approach to exit the loop conditionally, perhaps using a boolean flag to control its termination.