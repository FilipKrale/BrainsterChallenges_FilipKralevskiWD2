<?php

echo "<h2> Second exercise. </h2>";

$name = 'Kathrin';

$rating = "5";

$time = date("H");

$rated = true;

$message = "Good night.";

echo "$time h";

echo "<hr/>";

if( $name == 'Kathrin'){
    if( $time < 12){
        echo "Good morning Kathrin.";
    }elseif( $time >= 12 && $time <= 17){
        echo "Good afternoon Kathrin.";
    }elseif($time > 17){
        echo "Good evening Kathrin”.";
    }
}
else {
    echo "Nice name";
}


echo "<hr/>";


if( $rating > 0 && $rating <= 10){
    if($rated == true){
        echo "You already voted.";
    }else{
        echo "Thanks for voting.";
    }
}
else{
    echo "Invalid rating, only numbers between 1 and 10.";
}

echo "<hr/>";

if(is_int($rating)){
    echo "The value of rating is integer.";
}
else{
    echo "The value of rating is not an integer";
}

?>