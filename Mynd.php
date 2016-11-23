<?php 

 if($_GET["id"] == 1)

 $img = "Myndir/berjamo.png";
 $LysingAMynd = "Berjamo Tekin af: Brynjólfur Axel";

 if($_GET["id"] == 2)
{
 $img = "Myndir/fjörusteinar.png";
 $LysingAMynd = "Fjörusteinar Tekin af: Brynjólfur Axel";
}
 if($_GET["id"] == 3)
{
 $img = "Myndir/gongutur.png";
 $LysingAMynd = "Gongutur Tekin af: Brynjólfur Axel";
}
 if($_GET["id"] == 4)
 {
    $img = "Myndir/klaki1.png";
    $LysingAMynd = "Klaki1 Tekin af: Brynjólfur Axel";
}
 if($_GET["id"] == 5)
 {
    $img = "Myndir/klaki2.png";
    $LysingAMynd = "Klaki2 Tekin af: Brynjólfur Axel";
}
 if($_GET["id"] == 6)
 {
    $img = "Myndir/jarnisblafjoll.png";
    $LysingAMynd = "Jarnisblafjoll Tekin af: Brynjólfur Axel";
}
 if($_GET["id"] == 7)
 {
    $img = "Myndir/hofn.png";
    $LysingAMynd = "Höfn Tekin af: Brynjólfur Axel";
}
 if($_GET["id"] == 8)
 {
    $img = "Myndir/flugeldar.png";
    $LysingAMynd = "Flugeldar Tekin af: Brynjólfur Axel";
}
?>
<!DOCTYPE html>
<html lang="is">
<meta charset="utf-8">

<head>
	<link rel="stylesheet" type="text/css" href="Lokaverkefni.css">
	<!-- linkur á stafina sem eg nota -->
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
  <!-- breyta title í hvað sem er -->
</head>
<body class="group">
	<header class="group">
        <?php require './includes/Menu.php'; ?>
    </header>
        <!-- hérna breytiru eins og berjamo.png í aðra mynd -->

        <div class="Verslun-Myndir1-2">
            <img src="<?= ($img); ?>">
        </div>

            <!-- hérna skrifarðu um myndina og pantarð myndina -->
    <?php require './includes/FormLogin.php'; ?>
        <div class="texti4">

        <?php 
        echo $LysingAMynd;
        ?>

        </div>
        
    <!-- Social Media Buttons -->
   <?php require './includes/SocialMediaButtons.php'; ?>
</body>
</html>