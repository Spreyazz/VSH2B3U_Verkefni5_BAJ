<!--síða sem selur ljósmyndir sem er búið að prenta út og sendir heim til notanda, notandi borgar í gegnum netið með paypal
forsiða stutt lysing og slideshow samskipta miðlar fb instagram, pintrest,
síða 2 allar myndir hægt verður að klikka á hverja og þá upnast hún á annari síðu í stærri stærð-->
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<link rel="stylesheet" type="text/css" href="css/stilsida.css">
	<!-- linkur á stafina sem eg nota -->
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<title>VSH2B3U_Verkefni5_BAJ</title>
    <link rel="icon" type="image/ico" href="VSH_Skilaverkefni2_BAJ.png">
</head>
<!-- <div class="LOGO">
<img src="VSH_Skilaverkefni2_BAJ.svg">
</div>-->
<body class="group liturbody2">
	<header class="group">
    <?php require './includes/Menu.php'; ?>
            
	    </header>
<!--SLIDESHOW-->
    <?php require './includes/SlideShow.php'; ?>
	    <input type="checkbox" id="slideshow">
            <label for="slideshow">
            <div class="slider">
                <div class="inner">asd
                    <article>
                        <img src="Myndir/audi.png">
                    </article>
                    <article>
                        <img src="Myndir/DodgeChargerDaytona.png">
                    </article>
                    <article>
                        <img src="Myndir/DodgeChargerHellcat.png">
                    </article>
                    <article>
                        <img src="Myndir/skoda-Octavia-VRS-2017.png">
                    </article>
                </div>
            </div>
            </label>
            
<!--Fyrirtæki-->
<!--
<div class="group">
        <div class="textiPlayfairborder" id="Verslun1">
            Verslun
        </div>
        <div class="rammi1-5"> 
            <a href="Mynd.php?id=1"><img src="Myndir/logohekla.png"></a>
        </div>
        <div class="rammi2-5">
            <a href="Mynd.php?id=2"><img src="Myndir/benni.png"></a>
        </div>
        <div class="rammi3-5">
        <a href="Mynd.php?id=3"><img src="Myndir/logoaskja.png"></a>
        </div>
        <div class="rammi4-5">
            
            <a href="Mynd.php?id=4"><img src="Myndir/logo_ib.png"></a>
        </div>
        <div class="rammi5-5">
        <a href="Mynd.php?id=5"><img src="Myndir/logobl.png"></a>
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
-->
<!--Adilar-->
<?php require './includes/Adilar.php'; ?>
<!-- Social Media Buttons -->
<?php require './includes/SocialMediaButtons.php'; ?>
<!-- Contact -->
<?php require './includes/Contact.php'; ?>
<!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="animated-scroll.js"></script>
</body>
</html>