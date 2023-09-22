<?php 
//PART01

/**
 * Function for convert a decimal number to binary
 * */
function decimalToBinary(int|float $numberArgument) : int|string {
    return decbin($numberArgument);
}


/**
 * Function for convert a decimal number to roman.
 */
function decimalToRoman($decimalNumber)
{
    if ($decimalNumber <= 3999) {
        $container = intval($decimalNumber);
        $result = '';

        $romanNumbers = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,            
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        ];

        foreach ($romanNumbers as $roman => $decimal) {
            $matches = intval($container / $decimal);
            $result .= str_repeat($roman, $matches);
            $container = $container % $decimal;
        }
        return $result;
    }
    return "ERROR!!! The number must be smaller than 3999!";
}

//PART02
/**
 * Function for conver a binary number to decimal.
 */
function binaryToDecimal(int|string $numberArgument) : int|float {
    return bindec($numberArgument);
}

/*  
/**
 * Function to convert a roman number to decimal.
 */
define('ROMAN_NUMBER_UNITS', json_encode([
    ['3000' => 'MMM', '2000' => 'MM', '1000' => 'M'],
    ['900' => 'CM', '800' => 'DCCC', '700' => 'DCC', '600' => 'DC', '500' => 'D', '400' => 'CD', '300' => 'CCC', '200' => 'CC', '100' => 'C'],
    ['90' => 'XC', '80' => 'LXXX', '70' => 'LXX', '60' => 'LX', '50' => 'L', '40' => 'XL', '30' => 'XXX', '20' => 'XX', '10' => 'X'],
    ['9' => 'IX', '8' => 'VIII', '7' => 'VII', '6' => 'VI', '5' => 'V', '4' => 'IV', '3' => 'III', '2' => 'II', '1' => 'I']
]));


function romanToDecimal($romanNumber) {
    $units = json_decode(ROMAN_NUMBER_UNITS);
    $cursor = 0;
    $output = 0;
    foreach ($units as $unit) {
        foreach ($unit as $decimal_unit => $roman_unit) {
            if (strtoupper(substr($romanNumber, $cursor, strlen($roman_unit))) == $roman_unit) {
                $cursor += strlen($roman_unit);
                $output += intval($decimal_unit);
                break;
            }
        }
    }
    if ($cursor == strlen($romanNumber)) {
        return $output;
    }else{
        echo "Can't convert '$romanNumber' to a decimal number.";
    }

}

//PART03

/**
 * Function that checks wheater the number is roman.
 */
function isRoman($romanNumberArgument) {
    $roman_regex='/^M{0,3}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/';
    return preg_match($roman_regex, $romanNumberArgument) > 0;
}

/**
 * Function that checks wheater the number is decimal.
 */
function isDecimal($numberArgument) {
    if (is_float($numberArgument)) {
        return true;
    }
}

/**
 * Function that checks wheater the number is binary.
 */
function isBinary($numberArgument) {
    if (substr($numberArgument, 0, 0) === "+" || substr($numberArgument, 0, 0) === "-") {
        echo "Binary number shouldn't contain signs such as '+' / '-'";
        return false;
    }
    $binary_regex = "/^[0-1]+$/";
    if(preg_match($binary_regex, $numberArgument)) { 
        return true;
    }
}

/**
 * Function that checks is number is roman, decimal, decade  or binary.
 */
function checkNumber($number) {
    if (substr($number, 0, 1) === "0" || substr($number, 1, 1) === "0" && (substr($number, 0, 1) === "+" || substr($number, 0, 1) === "-")) {
        return "Error (eg. +0123) - unsupported format";
    } else if (isRoman($number)) {
        return "The number[{$number}] is Roman number..
        <br/>Roman to Decimal => " . romanToDecimal($number) . "<br/>";
    } else if (isDecimal($number)) {
        return "The number[{$number}] is Decimal number.. 
        <br/>Decimal to Roman => " . decimalToRoman($number, 3999999) . "<br/>
        Decimal to Binary => " . decimalToBinary($number) . "<br/>";
    } else if (isBinary($number)) {
        return "The number[{$number}] is Binary number..
        <br/>Binary to Decimal => " . binaryToDecimal($number) . "<br/>";
    } 

    $binary_regex = "/^[-+0-1]+$/";
    if(preg_match($binary_regex, $number)) { 
        if ($number >= 100 || $number <= 0) {
            return "The number[{$number}] is Decade number..
            <br/>Decade to Binary => " . decimalToBinary($number) . "<br/>
            Decade to Roman => " . decimalToRoman($number, 3999999) . "<br/>";
        }
        return "Invalid! The number[{$number}] contains sign and zeroes & ones only..";
    }
    return "The number[{$number}] is Decade number..
    <br/>Decade to Binary => " . decimalToBinary($number) . "<br/>
    Decade to Roman => " . decimalToRoman($number, 3999999) . "<br/>";
}

$arr = ["XIII", 2365.14, "XIX", "111", 13.13, "D", "1234", "2002", "11011101", "0110101" ];
foreach($arr as $number){
    echo checkNumber($number). "<br/>";
}