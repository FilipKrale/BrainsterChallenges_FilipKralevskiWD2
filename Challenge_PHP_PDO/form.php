<?php
session_start();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once __DIR__ . "/includes/header.php"; ?>
    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mainBackground">
                <div class="row">
                    <div class="col-6 offset-3">
                        <?= isset($_SESSION['inputs']) ? "<p class='errorContainer'>All input fields are required</p>" : ""; ?>
                    </div>
                    <div class="col-lg-8 col-12 offset-lg-2">

                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner px-3 py-5">
                                <!-- FORM start -->
                                <form class="px-5 text-light w-100" action="validation.php" method="POST">
                                    <div class="carousel-item active p-2">

                                        <div class="form-group">
                                            <label for="coverImg">Url link for the cover image</label>
                                            <input type="url" class="form-control" name="coverUrl" id="coverImg" placeholder="Example: //https:example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="pageTitle">Title for the page</label>
                                            <input type="text" class="form-control" name="pageTitle" id="pageTitle" placeholder="Another input placeholder">
                                        </div>
                                        <div class="form-group">
                                            <label for="pageSubtitle">Subtitle for the page</label>
                                            <input type="text" class="form-control" name="pageSubtitle" id="pageSubtitle" placeholder="Another input placeholder">
                                        </div>

                                        <div class="form-group">
                                            <label for="companyDescription">Short description of the company</label>
                                            <textarea class="form-control form-control-lg" type="textarea" name="companyDescription" id="companyDescription" placeholder="Product description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="companyNum">Telephone number</label>
                                            <input type="number" class="form-control" name="companyNum" id="companyNum" placeholder="Another input placeholder">
                                        </div>
                                        <div class="form-group">
                                            <label for="companyAdress">Company adress</label>
                                            <input type="text" class="form-control" name="companyAdress" id="companyAdress" placeholder=" company full adress Str name number and city">
                                        </div>

                                    </div>
                                    <div class="carousel-item p-2">

                                        <div class="form-group">
                                            <label for="productUrl-1">Image URL</label>
                                            <input type="url" class="form-control" name="productUrl-1" id="productUrl-1" rows='10' placeholder="Provide Url for an image of your product/service">
                                        </div>
                                        <div class="form-group">
                                            <label for="productDesc-1">Description service/product</label>
                                            <textarea class="form-control form-control-lg" name="productDesc-1" id="productDesc-1" placeholder="Product description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="productUrl-2">Image URL</label>
                                            <input type="url" class="form-control" name="productUrl-2" id="productUrl-2" rows='10' placeholder="Provide Url for an image of your product/service">
                                        </div>
                                        <div class="form-group">
                                            <label for="productDesc-2">Description service/product</label>
                                            <textarea class="form-control form-control-lg" name="productDesc-2" id="productDesc-2" placeholder="Product description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="productUrl-3">Image URL</label>
                                            <input type="url" class="form-control" name="productUrl-3" id="productUrl-3" rows='10' placeholder="Provide Url for an image of your product/service">
                                        </div>
                                        <div class="form-group">
                                            <label for="productDesc-3">Description service/product</label>
                                            <textarea class="form-control form-control-lg" name="productDesc-3" id="productDesc-3" placeholder="Product description"></textarea>
                                        </div>


                                    </div>
                                    <div class="carousel-item p-2">
                                        <div class="form-group">
                                            <label for="contactDesc">Description that will be displayed next to the contact form</label>
                                            <textarea class="form-control form-control-lg" name="contactDesc" id="contactDesc" placeholder="Product description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="linkedinUrl">Url link for your linkedin profile</label>
                                            <input type="url" class="form-control" name="linkedinUrl" id="linkedinUrl" placeholder="Example: //https:example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="facebookUrl">Url link for your facebook profile</label>
                                            <input type="url" class="form-control" name="facebookUrl" id="facebookUrl" placeholder="Example: //https:example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="twitterUrl">Url link for your twitter profile</label>
                                            <input type="url" class="form-control" name="twitterUrl" id="twitterUrl" placeholder="Example: //https:example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="instagramUrl">Url link for your instagram profile</label>
                                            <input type="url" class="form-control" name="instagramUrl" id="instagramUrl" placeholder="Example: //https:example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="select">Do you provide services or products</label>
                                            <select class="form-select" name="type" aria-label="Default select example" id="select">
                                                <option disabled>Select</option>
                                                <option value="products">Products</option>
                                                <option value="services">Services</option>

                                            </select>
                                        </div>

                                    </div>
                                    <button class='btn btn-success position-absolute bottom-0'>Submit</button>
                                </form>
                                <!-- FORM end -->
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once __DIR__ . "/includes/footer.php"; ?>
</body>

</html>