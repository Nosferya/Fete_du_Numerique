<?php include("connectbdd.php") ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription FDN</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  	<link href="http://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <!-- <header> -->
      <?php include("include/header.php") ?>
    <!-- </header> -->
  validation inscription
    <main>

      <?php
           $civilite  $_POST['civilite'];
           $name = $_POST['nom'];
           $fname = $_POST['prenom'];
           $mail = $_POST['email'];
           $login = $_pOST['login'];
           $mdp1 = $_POST['mdp1'];
           $mdp2 = $_POST['mdp2'];

/*test sur la civilité*/
         if ($gen == 'F')
         {
            $gen = "Mme";
         }
         else
         {
            $gen = "M";
          };

/*test pour vérfier si les entrées du mot de passe sont identique*/
        if ($mdp1 == $mdp2)
        {
           $mdpsha = sha1($mdp1);
           echo "mot de passe identique";
           echo $mdpsha;

        $base->exec("INSERT INTO user(n_user, p_user, email_user, login_user, mdp_user) VALUES('$civilite','$name','$fname','$mail','$login','$mdpsha')");
        echo "Votre inscription est confirmée";
          }
          else
          {
            echo "<p>Les motd de passe dont différents, veuillez recommencer</p>";
          };
      ?>

    </main>

    <!-- FOOTER -->
    <?php include('include/footer.php')?>
    <!-- FOOTER -->

	   <script src="js/scripts.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>

</html>
