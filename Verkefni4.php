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
</div>
<body class="group liturbody2">
    <header class="group">

        <?php require './includes/Menu.php'; ?>
        </header>
        <form action="process.php" method="post">
            <fieldset>
                <legend>Verkefni 4</legend>
                First name: <input type="text" name="firstname"><br>
                Last name: <input type="text" name="lastname"><br>
                MyndaHeiti: <input type="text" name="myndaheiti"><br>
                Slóð á mynd: <input type="text" name="slodmynd"><br>
                Byrta Mynd <input type="checkbox" name="byrtamynd"><br>
                textalýsing: <textarea name="textalysing"></textarea>
                <input type="submit">

            </fieldset>
        </form>

    <?php require './includes/SocialMediaButtons.php'; ?>
    <?php require './includes/Contact.php'; ?>