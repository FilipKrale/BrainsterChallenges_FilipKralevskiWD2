<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once __DIR__ . "/includes/header.php"; ?>
    <title>Crate WebPage</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col mainBackground d-flex align-items-center justify-content-center">
                <div class='text-center text-white'>
                  <p class='display-5' id="welcomeTxt">Welcome and begin to share your services</p>
                    <a class='text-light text-decoration-none' href="form.php">
                        <button class='btn btn-primary rounded'>Create</button>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <?php require_once __DIR__ . "/includes/footer.php"; ?>
</body>

</html>