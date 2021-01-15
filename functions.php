<?php
function printArr($numbers){
    echo "<p>printArr (Step 2)</p>";
    foreach ($numbers as $num){
        echo "$num<br>";
    }
}

function largest($numbers){
    echo "<p>largest (Step 3)</p>";
    /*$largest = 0;*/
    echo (max($numbers));
}

// Step 5 - remove duplicates
function removeDups($numbers): array
{
    echo "<p>Duplicates removed (Step 5)</p>";
    return (array_unique($numbers));
}
