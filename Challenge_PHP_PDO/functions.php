<?php



function ifEmpty(array $POST)
{
    foreach ($POST as $value) {
        if (empty($value)) {
            return true;
        }
    }
    return false;
}
function redirect($location)
{
      header("location:$location");
      die();
}
