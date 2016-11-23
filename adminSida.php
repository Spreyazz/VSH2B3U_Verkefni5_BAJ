<?php 
session_start();
$inactive = 10;
if(isset($_SESSION["timeout"]))
{
    $sessionTTL = time() - $_SESSION["timeout"];
    if ($sessionTTL > $inactive) {
        SESSION_DESTROY();
        header("Location:login.php");
    }
}
$_SESSION["timeout"] = time();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<link rel="stylesheet" type="text/css" href="Lokaverkefni.css">
	<!-- linkur á stafina sem eg nota -->
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<title>Admin Síða</title>
    <link rel="icon" type="image/ico" href="VSH_Skilaverkefni2_BAJ.png">
</head>
<!-- <div class="LOGO">
<img src="VSH_Skilaverkefni2_BAJ.svg">-->
</div>
<body class="group liturbody2">
        <div class="textiPlayfairborder" id="Verslun1">
            Admin Site
            <br>
            <a href="logout.php">Ýttu hérna</a> til að logga út
        </div>
<!--SLIDESHOW-->
	    <input type="checkbox" id="slideshow">
            <label for="slideshow">
            <div class="slider">
                <div class="inner">
                    <article>
                        <img src="Myndir/berjamo.png">
                    </article>
                    <article>
                        <img src="Myndir/fjörusteinar.png">
                    </article>
                    <article>
                        <img src="Myndir/göngutur.png">
                    </article>
                    <article>
                        <img src="Myndir/höfn hfj.png">
                    </article>
                </div>
            </div>
            </label>
            
<!-- Contact -->
    <?php require './includes/Contact.php'; ?>
<!-- Social Media Buttons -->
    <?php require './includes/SocialMediaButtons.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="animated-scroll.js"></script>
</body>
</html>