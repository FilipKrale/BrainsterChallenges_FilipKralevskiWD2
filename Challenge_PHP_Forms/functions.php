<?php

/** Function for storeing user data into a .txt file with different delimiters. */
function data($file, $array)
{
    $password = password_hash($array['password'], PASSWORD_BCRYPT);
    $data = $array['email'] . ',' . $array['username'] . '=' . $password . PHP_EOL;
    file_put_contents($file, $data, FILE_APPEND);
}

/** Function for geting all user info and puts into an array with predefined keys for username, password, email. */
function getUserInfo($file)
{
    $users = file_get_contents($file);
    $users = trim($users);
    $users = explode(PHP_EOL, $users);
    $userInfo = [];

    for ($i = 0; $i < count($users); $i++) {
        // exploding by 2 separate delimiters and using the result to create an info array
        $userMailAndUser[] = explode(',', $users[$i]);
        $userUserAndPass[] = explode('=', $userMailAndUser[$i][1]);

        $userInfo[] = [
            'username' => $userUserAndPass[$i][0],
            'password' => $userUserAndPass[$i][1],
            'email' => $userMailAndUser[$i][0]
        ];
    }

    return $userInfo;
}

/** Returns error message if user left an empty field. */
function fieldRequired($credential)
{
    return $credential . ' is required';
}

/** Function for checking if the user has entered a matching username and password for login. */
function checkCredentialMatch($array)
{
    for ($i = 0; $i < count($array); $i++) {
        if (
            $array[$i]['username'] == $_POST['username']
            && password_verify($_POST['password'], $array[$i]['password'])
        ) {
            return true;
        }
    }
}

/** Function for checking if an entered credential already exists in the database. */
function checkIfUnique($array, $credential)
{
    for ($i = 0; $i < count($array); $i++) {
        if (
            $array[$i][$credential] == $_POST[$credential]
        ) {
            return true;
        }
    }
}

/** Function for checking if username contains empty spaces or special signs. */

function validateUsername($username)
{
    $specialSigns = "/[\'^£$%&*()}{@#~?><>,|=_+¬-]/";
    $emptySpaces = "/\s/";
    if (preg_match($specialSigns, $username) || preg_match($emptySpaces, $username)) {
        return true;
    }
}

/** Function for checking if email has at least five characters before @. */

function validateEmailLength($email)
{
    $emailParts = [];
    $emailParts = explode('@', $email);
    if (strlen($emailParts[0]) > 4) {
        return false;
    } else {
        return true;
    }
}

/** Function for checking if e-mail format is valid. */

function validateEmailFormat($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        return true;
    }
}

/** Function for checking if the password contains at least one uppercase letter, one number and one special sign. */

function validatePassword($password)
{
    $uppercaseLetters = "/[A-Z]/";
    $numbers = "/[0-9]/";
    $specialSigns = "/[\'^£$%&*()}{@#~?><>,|=_+¬-]/";

    if (preg_match($uppercaseLetters, $password) && preg_match($numbers, $password) && preg_match($specialSigns, $password)) {
        return false;
    } else {
        return true;
    }
}

/** Function for error messages. */

function errorMessage($errorKey)
{
    $errorMsg = [
        'credentialsMatch' => 'Wrong username/password combination',
        'usernameTaken' => 'Username taken',
        'emailTaken' => 'A user with this e-mail already exists',
        'usernameInvalid' => 'Username can contain only letters and numbers. No empty spaces or signs.',
        'emailShort' => "The email must contain at least 5 characters before '@'. Eg. jondoe@mail.com.",
        'emailFormatInvalid' => 'Invalid e-mail format',
        'passwordInvalid' => 'Password must contain at least one uppercase letter, one number and one sign'
    ];

    return $errorMsg[$errorKey];
}
