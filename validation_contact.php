<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACT</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>

<body>
  <!-- <header> -->
      <?php include("include/header.php") ?>
  <!-- </header> -->

<main>
<?php
				$gen=$_POST['titre'];
				$nom=$_POST['fname'];
				$prenom=$_POST['lname'];
                $email=$_POST['mail'];
                $detail=$_POST['detail'];

					if ($gen == 'F') {
						$gen = "Madame";
						}
					else {
						$gen = "Monsieur";
                        }

                        /*echo $gen;
                        echo $nom;
                        echo $prenom;
                        echo $email;
                        echo $detail;*/
						$mail= "fetedunumerique@ryuzendoji.net";
						$sujet= "Demande de Contact";
						$headers = "Content-type: text/html; charset=UTF-8";
                        $message =$gen." ".$nom." ".$prenom.", <br/>";
                        $message .="dont  l'adresse mail est : ".$email.", a besoin d'un renseignement.<br/>";
                        $message .="Voici le contenu de sa demande : <br/>";
                        $message .=$detail." <br/>";



                    mail($mail,$sujet,$message,$headers);


                        echo "<p>Le mail à bien envoyé</p>
                        <p>L'équipe y répondra dans les plus brefs délais</p>
                        <p>Merci de votre confiance<p>";


                    ?>

</main>

    <!-- FOOTER -->
    <?php include('include/footer.php')?>
    <!-- FOOTER -->
	   <script src="js/scripts.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>

</html>
