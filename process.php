<!DOCTYPE html>
<html lang="is">
<meta charset="utf-8">
<head>
    <link rel="stylesheet" type="text/css" href="Lokaverkefni.css">
    <!-- linkur á stafina sem eg nota -->
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Verslun</title>
    <link rel="icon" type="image/ico" href="VSH_Skilaverkefni2_BAJ.png">
</head>
<!-- <div class="LOGO"> -->
<!-- <img src="VSH_Skilaverkefni2_BAJ.svg"> -->
<!--</div>-->
<body class="group liturbody2">
    <header class="group">

        <?php require './includes/Menu.php'; ?>
        </header>

        <?php
        $firstname = $_POST['firstname'];
        $firstname = trim($firstname);
        $firstname = ucfirst($firstname);
        $lastname = $_POST['lastname'];
        $lastname = trim($lastname);
        $lastname = ucfirst($lastname);
        $myndaheiti = $_POST['myndaheiti'];
        $myndaheiti = trim($myndaheiti);
        $myndaheiti = ucfirst($myndaheiti);
        $slodmynd = $_REQUEST['slodmynd'];
        if (!isset($_REQUEST['byrtamynd']))
        {
            $takki = "off";
        }
        else
        {
            $takki = "on";
        }
        $textalysing = htmlspecialchars($_POST['textalysing']);
    echo
        $firstname . "<br>";
    echo
        $lastname . "<br>";
    echo
        $myndaheiti . "<br>";
    echo
        $slodmynd . "<br>";
    echo
        $textalysing;
        ?><img src="<?php echo $slodmynd ?>">

    <?php require './includes/SocialMediaButtons.php'; ?>
    <?php require './includes/Contact.php'; ?>