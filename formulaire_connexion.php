<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Connexion</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/formulaire_connexion.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>
  <!-- <header> -->
  <?php include("include/header.php") ?>
  <!-- </header> -->

  <main>
    <?php include("include/socialbar.php") ?>
    <!--CHAMP FORMULAIRE-->
    <section class="marginB">
      <form method="post" action="account.php">
        <fieldset>
          <legend>Connexion</legend>
          <label for="mail">Pseudo : </label>
          <input type="text" name="pseudo" id="pseudo"  required><br>
          <label for="mdpi">Mot de passe : </label>
          <input type="password" name="mdpi" id="mdpi"  required><br>
          <a href="#" class="forgotpw"> Mot de passe oublié</a>
          <input type="submit" class="subconn" value="SE CONNECTER">
        </fieldset>
      </form>
    </section>
  </main>
  <!-- FOOTER -->
  <?php include('include/footer.php')?>
  <!-- FOOTER -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/connexion.js"></script>
  <script src="js/scripts.js"></script>

</body>

</html>
