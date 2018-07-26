<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACT</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>

<body>
  <!-- <header> -->
      <?php include("include/header.php") ?>
  <!-- </header> -->

<main class="v_contact">
            <?php
                // S'il y des données de postées
                if ($_SERVER['REQUEST_METHOD']=='POST') {

                  // (1) Code PHP pour traiter l'envoi de l'email

                  // Récupération des variables et sécurisation des données
                  $gen= htmlentities($_POST['titre']);
                  $nom  = htmlentities($_POST['fname']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
                  $prenom  = htmlentities($_POST['lname']);
                  $email = htmlentities($_POST['mail']);
                  $objet = htmlentities($_POST['sujet']);
                  $detail = htmlentities($_POST['detail']);

                  // Variables concernant le genre

                  if ($gen == 'F') {
                    $gen = "Madame";
                  }
                  else
                  {
                    $gen = "Monsieur";
                  }


                  $destinataire = 'clement.polito@gmail.com'; // Adresse email du webmaster (à personnaliser)
                  $sujet = $objet; // Titre de l'email
                  $contenu = '<html><head><title>Titre du message</title></head><body>';
                  $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
                  $contenu .= '<p><strong>Sexe: </strong>: '.$gen.'</p>';
                  $contenu .= '<p><strong>Nom: </strong>: '.$nom.'</p>';
                  $contenu .= '<p><strong>Prenom: </strong>: '.$prenom.'</p>';
                  $contenu .= '<p><strong>Email </strong>: '.$email . '</p>';
                  $contenu .= '<p><strong>Message: </strong>: '.$detail.'</p>';
                  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

                  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
                  $headers = 'MIME-Version: 1.0'."\r\n";
                  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

                  // Envoyer l'email
                  mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
                  echo '<h2>Votre message a bien été envoyé.<br/><br/> Nous allons vous répondre dans les plus brefs délais!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
                  // (2) Fin du code pour traiter l'envoi de l'email
                }
                ?>

</main>

    <!-- FOOTER -->
    <?php include('include/footer.php')?>
    <!-- FOOTER -->
	   <script src="js/scripts.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>

</html>
