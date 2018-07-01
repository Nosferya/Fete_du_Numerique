<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription FDN</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  	<link href="http://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <!-- <header> -->
      <?php include("header.php") ?>
    <!-- </header> -->
    formulaire d'inscription
    <!-- <main>
       <?php
        try {
                  $base=new PDO('mysql:host=localhost;dbname=testco;charset=utf8', 'root', '');
            }
        catch(Exception $E)
        {
            die('Erreur : '.$E->getMessage());
        }
        echo "Success";
      ?>

      <?php
           $gen=$_POST['titre'];
           $name=$_POST['nom'];
           $fname=$_POST['prenom'];
           $mail=$_POST['email'];
           $mdp1=$_POST['mdp1'];
           $mdp2=$_POST['mdp2'];
           $type=$_POST['type'];

           if ($gen == 'F') {
              $gen = "Mme";
              }
           else {
              $gen = "M";
              }

          if($type == 1){
              $type = "Visiteur";
          }else if ($type == 2){
              $type = "Exposant";
           }
          else  if ($type == 3){
          $type = "Administrateur";
           };

        echo $type;
                   if ($mdp1 == $mdp2){
                       $mdpsha = sha1($mdp1);
        echo "OK";
        echo $mdpsha;

        $base->exec("INSERT INTO clients(titre,nom, prenom, mail, mdp, typeco) VALUES('$gen','$name','$fname','$mail','$mdpsha','$type')");
        echo "Inscription Confirmée";
                         }else {
                             echo "<p>erreur mdp</p>";
                         };
      ?>

    </main> -->

    <!-- FOOTER -->
    <?php include('footer.php')?>
    <!-- FOOTER -->

	   <script src="js/scripts.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>

</html>
