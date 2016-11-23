
  <?php

    $fulltnafn = $_POST['fulltnafn'];
    $simanumer = $_POST['numer'];
    $email = $_POST['email'];
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
 
 print_r[$_POST];

	<header class="group">
        <?php require './includes/Menu.php'; ?>
    </header>
        <!-- hérna breytiru eins og berjamo.png í aðra mynd -->

        <div class="Verslun-Myndir1-2">
 
        </div>

            <!-- hérna skrifarðu um myndina og pantarð myndina -->
<div class="Verslun-Myndir2-2 textiPlayfair">
      <label>Eigandi: $fulltnafn</label>

            <label>Sími eiganda: $simanumer</label>

            <label>Netfang Eiganda: $email</label>
            
</div>

        <div class="texti4">


        </div>
        
    <!-- Social Media Buttons -->
   <?php require './includes/SocialMediaButtons.php'; ?>
</body>
</html>