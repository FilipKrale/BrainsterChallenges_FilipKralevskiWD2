<?php

echo "<h2> First exercise. </h2>";

$name = 'Stefan';

$rating = 5;

if( $name == 'Kathrin'){
    echo "Hello Kathrin";
}
else {
    echo "Nice name";
}

echo "<hr/>";


if( $rating > 0 && $rating <= 10){
    echo "Thank you for rating";
}
else{
    echo "Invalid rating, only numbers between 1 and 10.";
}

?>