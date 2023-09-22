<?php
session_start();

require_once './functions.php';

$userInfo = getUserInfo('users.txt');

/**Checkin if request method is post and if inputs match any from database in users.txt */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (checkCredentialMatch($userInfo)) {
        $_SESSION['username'] = $_POST['username'];
        header("Location: welcome.php");
    } else {
        $wrongUserAndPass = errorMessage('credentialsMatch');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>

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
            <?= isset($wrongUserAndPass) ?  "<div class='alert alert-danger text-center'>$wrongUserAndPass</div>" : ' '; ?>
            <h2 class="text-danger text-uppercase">login form</h2>
            <form action="login.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control" />

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control mb-3" />

                <button type="submit" class="btn btn-danger w-25 text-capitalize">
                    login
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>

</html>