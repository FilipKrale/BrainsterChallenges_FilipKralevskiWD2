<?php
session_start();

require_once "./functions.php";

$userInfo = getUserInfo('users.txt');
$errorCounter = 0;

/**Checking request method is POST. */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    foreach ($_POST as $credential => $value) {
        if (isset($value)) {
            /**Check if the fields are empty. */
            if (empty($value)) {
                $required[$credential] = ucfirst(fieldRequired($credential));
                $errorCounter++;
            } else {
                if ($credential == 'username') {
                    /**Check if username is valid (if contains characters that are not allowed). */
                    if (validateUsername($_POST['username'])) {
                        $usernameInvalid = errorMessage('usernameInvalid');
                        $errorCounter++;
                    }
                    /**Check if the username upon signup is already taken. */
                    elseif (checkIfUnique($userInfo, 'username')) {
                        $usernameTaken = errorMessage('usernameTaken');
                        $errorCounter++;
                    }
                } elseif ($credential == 'password') {
                    /**Check if password contains the required characters. */
                    if (validatePassword($_POST['password'])) {
                        $passwordInvalid = errorMessage('passwordInvalid');
                        $errorCounter++;
                    }
                } elseif ($credential == 'email') {
                    /**Check if email format is valid. */
                    if (validateEmailFormat($_POST['email'])) {
                        $emailFormatInvalid = errorMessage('emailFormatInvalid');
                        $errorCounter++;
                    }
                    /**Check if email length before "@" is at least 5 characters. */
                    elseif (validateEmailLength($_POST['email'])) {
                        $emailShort = errorMessage('emailShort');
                        $errorCounter++;
                    }
                    /**Check if the provided email upon signup is already used by another user. */
                    elseif (checkIfUnique($userInfo, 'email')) {
                        $emailTaken = errorMessage('emailTaken');
                        $errorCounter++;
                    }
                }
            }
        }
    }


    /**If all of the above condiditons are passed (errorcounter is = 0) - stores the signup data and redirects to Welcome page. */
    if ($errorCounter == 0) {
        data('users.txt', $_POST);
        $_SESSION['username'] = $_POST['username'];
        header("Location: welcome.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

    <!-- Local CSS -->
    <link rel="stylesheet" href="./style.css" />

    <!-- Latest Font-Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous" />
</head>

<body>



    <div class="row vh-100 vw-100 mx-0">
        <div class="col-4 offset-4 border border-danger rounded text-white my-auto p-4">

        <h2 class="text-secondary text-uppercase">signup form</h2>
            <form action="signup.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control" />
                <?= isset($usernameTaken) ? "<p class='my-0 text-danger font-weight-bold'>$usernameTaken</p>" : '' ?>
                <?= isset($required['username']) ? "<p class='my-0 text-danger font-weight-bold'>{$required['username']}</p>" : '' ?>
                <?= isset($usernameInvalid) ? "<p class='my-0 text-danger font-weight-bold'>{$usernameInvalid}</p>" : '' ?>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" />
                <?= isset($required['password']) ? "<p class='my-0 text-danger font-weight-bold'>{$required['password']}</p>" : '' ?>
                <?= isset($passwordInvalid) ? "<p class='my-0 text-danger font-weight-bold'>{$passwordInvalid}</p>" : '' ?>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control mb-3" />
                <?= isset($emailTaken) ? "<p class='my-0 text-warning font-weight-bold'>{$emailTaken}</p>" : '' ?>
                <?= isset($required['email']) ? "<p class='my-0 text-danger font-weight-bold'>{$required['email']}</p>" : '' ?>
                <?= isset($emailShort) ? "<p class='my-0 text-danger font-weight-bold'>{$emailShort}</p>" : '' ?>
                <?= isset($emailFormatInvalid) ? "<p class='my-0 text-danger font-weight-bold'>{$emailFormatInvalid}</p>" : '' ?>
                <button type="submit" class="btn btn-secondary w-25 text-capitalize">
                    sign up
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>

</html>