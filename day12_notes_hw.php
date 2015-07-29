<?php
// Austin Coding Academy
// Day 12 - Important PHP Stuff

// Quiz: Write `function array_front9($nums)` that returns 'true' if one of the first
// four numbers in the array is 9, and 'false' otherwise. Note that the array length
// could be less than 4.

function front9($nums) {
  for ($k = 0; $k < 4; $k++) {
    if ($k < count($nums) && $nums[$k] == 9) {
      return "true";
    }
  }
  return "false";
}

$result = front9(array(9, 0, 0, 0));
echo $result;

$result = front9(array(0, 0, 0, 0, 9));
echo $result;

echo front9(array(9, 0, 0, 0));










// More obscure loop types: while, do...while
// The while loop is similar to the for loop, but a little more general. It only
// accepts a condition - if you want to keep track of a counter variable, you need to
// "manage" it yourself.

// while (condition) {
//     loop-body;
// }

$k = 0;
while ($k < 10) {
  echo "$k<br>";
  $k++;
}

// Write a while loop that:
//    1. counts from 10 to 20 using <=
//    2. counts from 10 to 19 using <
//    3. counts backwards from 101 to 80, counting by 3
//    4. displays the letters from 'a' to 'z' (hint: the 'ord' function converts from
//       a letter to its corresponding number, and the 'chr' function converts from a
//       number to its corresponding letter

// do...while
// The do...while loop is the same as the while loop, but the condition is checked
// AFTER the loop body executes.

// do {
//     loop-body;
// } while (condition);

$j = 0;

do {
  $j++;
  echo "$j<br>";
} while($j < 10);

// do {
//     loop-body;
// while (condition);

// `break;` and `continue;`

// The 'break' statement allows you to immediately stop execution of a loop. When
// a 'break' statement is encountered, PHP jumps out of the loop to the line following
// the loop.

// The 'continue' statement allows you to skip the rest of the CURRENT iteration of
// the loop. PHP will jump back to the loop condition and test it again. If the
// condition is true, loop execution will continue; otherwise, PHP jumps out of the
// loop.

// 1. Write a `for` loop that tries to count from 0 to 10, but jumps out of the loop
//    after it prints 5.
// 2. Write a `while` loop that should run infinitely (`while (true) { ... }`), but
//    add a break statement so that it does not.
// 3. Write a `for` loop that prints the multiples of 5 from 0 to 100, except 25
//    (use continue for this one).

// == vs. ===
// So far, we've learned about PHP's == operator, which checks for equality. PHP also
// has a stricter version of ==, known as ===.

// === checks not only the value of each side, but also the type.
// For example, even though 0 is a number and 'false' is a string, the following
// condition is actually true:

if (0 == 'false') {
  echo "0 is the same as 'false'!<br>";
}

// On the other hand, the following condition is false, because the type of 0 is an
// integer, while the type of 'false' is a string:

if (0 === 'false') {
  echo "This won't print.<br>";
}
if (0 === '0') { echo 'bad'; }
if (0 === 0) { echo 'good'; }
// What is the output of the following block of code?

if (1 == 'true')  echo 'a';
if (1 === 'true') echo 'c';

// Typecasting
// http://php.net/manual/en/language.types.type-juggling.php
// Review: PHP is a weakly typed language. You don't have to specify the types of
// variables, and types are converted automatically.

$foo = "0";  // $foo is string
$foo += 2;   // $foo is now an integer (2)
$foo = $foo + 1.3;  // $foo is now a float (3.3)
$foo = 5 + "2 dogs"; // $foo is integer (7)
$foo = 5 + "1 cat";     // $foo is integer (6)

// If you wish to explicitly convert types, you can perform a "cast". To cast, specify
// the type you wish to cast to in parentheses. 

// Casting is useful if you have a value of one type, and you want to interpret it as
// one of the valid set of values in another type.

// For example, 4.5 is a valid floating point number, but not a valid integer.
// If you want to treat it as an integer, you must remove the portion after the
// decimal point. Casting accomplishes this:

$var = 4.5;
$var = (int) $var; // now $var is just 4
echo "$var<br>";

$var = "hello";
$var = (int) $var; // now $var is 0, because "hello" is not a valid integer
echo $var;

// Homework:
// Use casting to write a program that determines whether the user entered a valid
// nonzero integer.
//    1. Create a form that allows the user to input a number.
//    2. Cast to int
//    3. See if it's non-zero - if so, the number is valid.

?>
