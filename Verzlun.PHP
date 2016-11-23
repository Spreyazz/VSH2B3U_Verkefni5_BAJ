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
<!-- <div class="LOGO">
<img src="VSH_Skilaverkefni2_BAJ.svg">-->
</div>
<body class="group liturbody2">
    <header class="group">

        <?php require './includes/Menu.php'; ?>
        
        </header>

            <?php
        $visits = 1;
        if (isset($_COOKIE["visits"])) {
            $visits = (int)$_COOKIE["visits"];
        }
        setcookie("visits", $visits + 1, time() + (60 * 60 * 24 * 30));
        echo "You have visited this page $visits time(s).";

        if ($visits > 1) {
            echo "Velkominn aftur";
        }
        ?>


<div class="group">
        <div class="textiPlayfairborder" id="Verslun1">
            Verslun
        </div>
        <div class="rammi1-2"> 
            <a href="Mynd.php?id=1"><img src="Myndir/berjamo.png"></a>
        </div>
        <div class="rammi2-2">
            <a href="Mynd.php?id=2"><img src="Myndir/fjörusteinar.png"></a>
        </div>
        <div class="rammi1-2">
        <a href="Mynd.php?id=3"><img src="Myndir/göngutur.png"></a>
        </div>
        <div class="rammi2-2">
            
            <a href="Mynd.php?id=4"><img src="Myndir/klaki 1.png"></a>
        </div>
        <div class="rammi1-2">
        <a href="Mynd.php?id=5"><img src="Myndir/klaki 2.png"></a>
        </div>
        <div class="rammi2-2">
            <a href="Mynd.php?id=6"><img src="Myndir/jarnisblafjoll.png"></a>
        </div>
        <div class="rammi1-2">
        <a href="Mynd.php?id=7"><img src="Myndir/hofn.png"></a>
        </div>
        <div class="rammi2-2">
            <a href="Mynd.php?id=8"><img src="Myndir/flugeldar.png"></a>
        </div>
</div>
    <?php require './includes/SocialMediaButtons.php'; ?>
    <?php require './includes/Contact.php'; ?>