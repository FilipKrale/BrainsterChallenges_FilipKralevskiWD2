<?php


$voting = [
    "Marija" => [false, 5],
    "Petar" => [true, 7],
    "Kiko" => [false, 2],
    "Snezana" => [true, 9],
    "Ivo" => [false, 73],
    "Mia" => [true, 1],
    "Alek" => [true, 10],
    "Lukas" => [false, 36],
    "Tadeja" => [true, 4],
    "Nikola" => [false, 2]
];


foreach ($voting as $key => $value) {
    if ($value[0] == true) {
        echo "<div>{$key} => true,{$value[1]}</div>";
    } else {
        echo "<div>{$key} => false,{$value[1]}</div>";
    }

    if (date('H') < 12 && date('H') > 3) {
        echo "Good morning {$key} <br>";
    } else if (date('G') >= 12 && date('G') < 19) {
        echo "Good afternoon {$key} <br>";
    } else {
        echo "Good evening {$key} <br>";
    }


    if (is_int($value[1])) {
        if ($value[1] > 0 && $value[1] < 11) {
            if ($value[0] == true) {
                echo "You already voted with {$value[1]} <br>";
            } else {
                echo "Thanks for voting with {$value[1]} <br>";
            }
        } else {
            echo "Invalid rating, only numbers between 1 and 10 <br>";
        }
    } else {
        echo "Invalid character. Please enter a number between 1 and 10 <br>";
    }

    echo "<br><hr>";
}
