<?php SESSION_START();
if(isset($_POST['Submit']))
{
    $login = array('admin' => 'GSO','username' => 'password');
        
    $Username = isset($_POST['Username']) ? $_POST['Username'] : ' ';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : ' ';
  
    if (isset($login[$Username]) && $login[$Username] == $Password)
    {
      /*Gekk upp ef siða opnast*/
      $_SESSION['Gögn']['Username'] = $login[$Username];
      header("location:adminSida.php");
      exit;
    }
    else
    {
      //Error skilaboð ætla reyna hafa þau fyrir neðan
      $msg = "<span style='color:red'>Invalid Login Details</span> Rangt lykilorð eða notendanafn";
    }
}
?>
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
        <!-- <form action="processlogin.php" method="post"> -->
            <fieldset>
                <legend>Login</legend>
                <form action="" method="post">
                  <?php if(isset($msg)){?>
                  <?php echo $msg;?>
                  <?php }?>
                  <br>
                Username: <input type="text" name="Username"><br>
                Password: <input type="Password" name="Password"><br>    
                <input type="submit" name="Submit" value="Login" />

            </fieldset>
        </form>

    <?php require './includes/SocialMediaButtons.php'; ?>
    <?php require './includes/Contact.php'; ?>