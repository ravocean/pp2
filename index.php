<?php

/*
 * Husrav Khomidov
 * Ben Chadwick
 * PP2
 * 1/15/2021
 *
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

include('functions.php');
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pair Program 2</title>
    </head>
    <body>
    <h1>Pair Program 2</h1>
    </body>
    </html>
<?php
// Step 1

echo "<p>PHP Array Practice (Step 1)</p>";

//Step 2

$numbers = array(7, 9, 8, 9, 8, 8, 6);

// Call the function
printArr($numbers);

// Step 3
// Created functions.php

// Step 4
echo "<p>Largest Number (Step 4)</p>";
largest($numbers);

// Step 5
echo "<p>Remove Duplicates (Step 4)</p>";
printArr(removeDups($numbers));

