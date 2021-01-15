<?php
function printArr($numbers) {
    foreach ($numbers as $num) {
        echo "$num<br>";
    }
}

function largest($numbers) {
    return(max($numbers));
}

// Step 5 - remove duplicates
function removeDups($numbers) {
    return (array_unique($numbers));
}

// Step 6
function distribution($numbers) {
    $distribution = array();

    foreach ($numbers as $num) {
        if (array_key_exists($num, $distribution)) {
            $distribution[$num] = $distribution[$num] + 1;
        } else {
            $distribution[$num] = 1;
        }
    }
    return $distribution;

}