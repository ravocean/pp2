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

echo "PHP Array Practice (Step 1)";

//Step 2

    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    function printArr($numbers){
        foreach ($numbers as $num){
            echo "$num <br>";
        }
    }

    // Call the function
    printArr($numbers);