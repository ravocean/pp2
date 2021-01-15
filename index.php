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

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Pair Program 2</title>

</head>
<body>
<div class="container">

<h1>Pair Program 2</h1>


    <?php
    // Step 1
    echo "<p class='lead'>PHP Array Practice (Step 1)</p>";

    //Step 2
    $numbers = array(7, 9, 8, 9, 8, 8, 6);
    // Call the function
    echo "<p class='lead'>Define Array (Step 2)</p>";
    printArr($numbers);

    // Step 3
    // Created functions.php
    echo "<p class='lead'>File Created (functions.php) (Step 3)</p>";

    // Step 4
    echo "<p class='lead'>Largest Number (Step 4)</p>";
    echo (largest($numbers));

    // Step 5
    echo "<p class='lead'>Remove Duplicates (Step 5)</p>";
    printArr(removeDups($numbers));

    // Step 6
    echo "<p class='lead'>Distribute associative array (Step 6)</p>";
    print_r(distribution($numbers));

    ?>

</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
</body>
</html>