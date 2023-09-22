<?php
session_start();
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/includes/DB/conn.php";

session_unset();
// print_r($_SESSION);
// print_r($_POST);
// die();


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo  redirect("form.php");
} else {



    if (ifEmpty($_POST)) {

        $_SESSION['inputs'] = 'requirded';
        echo redirect("form.php");
    }
    $insertSQL = "INSERT INTO  websites (
    coverImgURL,
    pageTitle,
    pageSubtitle,
    companyDesc,
    companyTel,
    companyAdress,
    `productURL-1`,
    `productDesc-1`,
    `productURL-2`,
    `productDesc-2`,
    `productURL-3`,
    `productDesc-3`,
    contactDesc,
    linkedinURL,
    facebookURL,
    twitterURL,
    instagramURL,
    servicesType

) VALUES (
    :coverUrl,
    :pageTitle,
    :pageSubtitle,
    :companyDescription,
    :companyNum,
    :companyAdress,
    :productUrl_1,
    :productDesc_1,
    :productUrl_2,
    :productDesc_2,
    :productUrl_3,
    :productDesc_3,
    :contactDesc,
    :linkedinUrl,
    :facebookUrl,
    :twitterUrl,
    :instagramUrl,
    :servicesType
)";

    $bind_arr = [];
    $bind_arr['coverUrl'] = $_POST['coverUrl'];
    $bind_arr['pageTitle'] = $_POST['pageTitle'];
    $bind_arr['pageSubtitle'] = $_POST['pageSubtitle'];
    $bind_arr['companyDescription'] = $_POST['companyDescription'];
    $bind_arr['companyNum'] = $_POST['companyNum'];
    $bind_arr['companyAdress'] = $_POST['companyAdress'];
    $bind_arr['productUrl_1'] = $_POST['productUrl-1'];
    $bind_arr['productDesc_1'] = $_POST['productDesc-1'];
    $bind_arr['productUrl_2'] = $_POST['productUrl-2'];
    $bind_arr['productDesc_2'] = $_POST['productDesc-2'];
    $bind_arr['productUrl_3'] = $_POST['productUrl-3'];
    $bind_arr['productDesc_3'] = $_POST['productDesc-3'];
    $bind_arr['contactDesc'] = $_POST['contactDesc'];
    $bind_arr['linkedinUrl'] = $_POST['linkedinUrl'];
    $bind_arr['facebookUrl'] = $_POST['facebookUrl'];
    $bind_arr['twitterUrl'] = $_POST['twitterUrl'];
    $bind_arr['instagramUrl'] = $_POST['instagramUrl'];
    $bind_arr['servicesType'] = $_POST['type'];

    $sth = $pdo->prepare($insertSQL);
    if (!$sth->execute($bind_arr)) {
        echo "Something went wrong";
    }

    $last_id = $pdo->lastInsertId();
    $_SESSION['webID'] = $last_id;
    echo redirect("company.php");




}
