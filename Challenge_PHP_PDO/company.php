<?php
session_start();
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/includes/DB/conn.php";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
     echo  redirect("index.php");
}

$selectSQL = "SELECT * FROM websites WHERE id = {$_SESSION['webID']}";
$stmt = $pdo->query($selectSQL);

$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once __DIR__ . "/includes/header.php"; ?>
    <title>Company</title>
    <style>
        .cover-bg {
            height: 70vh;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2)), center / cover no-repeat url("<?= $row['coverImgURL'] ?>");
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?= $row['pageTitle'] ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav w-50  justify-content-between">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services"><?= ucwords($row['servicesType'])  ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <div class="container-fluid">
            <div class="row  cover-bg">
                <div class="col-6 m-auto text-center">
                    <p class="display-2 text-light">
                        <?= $row['pageTitle'] ?>
                    </p>
                    <p class="display-5 text-light">
                        <?= $row['pageSubtitle'] ?>
                    </p>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row py-4">
                <div class="col-6 m-auto text-center" id="about">
                    <h3>About us</h3>
                    <p class="text-align"><?= $row['companyDesc'] ?></p>
                    <span class='line'></span>
                </div>
                <div class="col-7 pt-4 m-auto text-center">
                    <p>Tel:<?= $row['companyTel'] ?></p>
                    <p>Location: <?= $row['companyAdress'] ?></p>
                </div>
            </div>
            <section id="services">
                <div class="row">
                    <div class="col-10 m-auto">
                        <p class="display-5"><?= ucwords($row['servicesType'])  ?></p>
                        <div class="row py-3 align-items-start">
                            <div class="col-lg-4 col-12 ">
                                <div class="card">
                                    <img src="<?= $row['productURL-1'] ?>" class="card-img-top carImgStyle" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= ucwords($row['servicesType']) ?> One Description</h5>
                                        <p class="card-text itemDescription overflow-auto"><?= $row['productDesc-1'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 ">
                                <div class="card">
                                    <img src="<?= $row['productURL-2'] ?>" class="card-img-top carImgStyle" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= ucwords($row['servicesType']) ?> Two Description</h5>
                                        <p class="card-text itemDescription overflow-auto"><?= $row['productDesc-2'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 ">
                                <div class="card">
                                    <img src="<?= $row['productURL-3'] ?>" class="card-img-top carImgStyle" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= ucwords($row['servicesType']) ?>lorem Three Description</h5>
                                        <p class="card-text itemDescription overflow-auto"><?= $row['productDesc-3'] ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact">
                <div class="row">
                    <div class="col-10 m-auto">
                        <span class='line my-5'></span>
                        <div class="row py-5">
                            <div class="col-6 mx-auto">
                                <p class="h2">Contact</p>
                                <p><?= $row['contactDesc'] ?></p>
                            </div>
                            <div class="col-6 mx-auto">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="name">Name :</label>
                                        <input type="text" class="form-control" required name="name" id="name" placeholder="Write your full name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type="email" class="form-control" required name="email" id="email" placeholder="Your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message :</label>
                                        <textarea class="form-control form-control-lg" required name="message" id="message" placeholder="Write your message you wish to send"></textarea>
                                    </div>
                                    <div class="form-group mt-4">
                                        <button class="btn btn-info text-dark">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>


    <footer>
        <div class="bg-dark text-center">
            <div class="d-flex justify-content-between w-50 m-auto pt-5">
                <a href="<?= $row['facebookURL'] ?>" class="text-decoration-none myIcon"><i class="fab fa-facebook-f fa-2x"></i></a>
                <a href="<?= $row['instagramURL'] ?>" class="text-decoration-none  myIcon"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="<?= $row['twitterURL'] ?>" class="text-decoration-none  myIcon"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="<?= $row['linkedinURL'] ?>" class="text-decoration-none  myIcon"><i class="fab fa-linkedin-in fa-2x"></i></a>
            </div>
            <p class="text-light m-0 py-3">Copyright by Denis @ Brainster</p>

        </div>
    </footer>
    <?php require_once __DIR__ . "/includes/footer.php"; ?>
</body>

</html>