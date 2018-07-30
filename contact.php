<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/favicon.png" />
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

  <?php include ("include/socialbar.php") ?>
  <section>
    <form method="post" action="v_contact.php">
      <fieldset>
        <legend>Formulaire de contact</legend>
        <p>Tous les champs sont obligatoires</p>
        
        <input type="radio" name="titre" value="Mme" id="F" required/><label for="F" class="notmarge">Mme</label>
        <input type="radio" name="titre" value="M" id="M" required/><label for="M" class="notmarge">M</label><br>
        <label for="fname"> Nom : </label><br><input type="text" name="fname" id="fname" class="txtinput" placeholder="Votre nom" required/><br>
        <label for="lname"> Prénom : </label><br><input type="text" name="lname" id="lname" class="txtinput" placeholder="Votre prénom" required/><br>
        <label for="mail"> Email : </label><br><input type="email" name="mail" id="mail" class="txtinput" placeholder="Votre email" required/><br>
        <label for="sujet"> Sujet de la demande : </label><br><input type="text" name="sujet" id="sujet" class="txtinput" placeholder="le sujet de votre demande" required/><br>
        <label for="detail">Votre demande concerne : </label><br>
        <textarea name="detail" id="detail" required></textarea><br><br>
        <input type="submit" class="subconn" value="ENVOYER">
        <input type="reset" class="subconn" value="RESET">
      </fieldset>
    </form>
  </section>

  <!-- FOOTER -->
  <?php include('include/footer.php')?>
  <!-- FOOTER -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.js">
  </script>
  <script src="js/scripts.js"></script>
</body>

</html>
