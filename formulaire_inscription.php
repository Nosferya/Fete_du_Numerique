<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/favicon.png" />
  <title>Inscription</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/inscription.css">
</head>

<body>
  <!-- <header> -->
  <?php include("include/header.php") ?>
  <!-- </header> -->
  <main>

    <?php include("include/socialbar.php") ?>
    <section class="marginB">
      <div class="contai ner">
        <form method="post" action="validation_inscription.php">
          <fieldset>
            <legend>Inscription</legend>
            <label for="type">Vous êtes :</label><br>
            <select name="type" id="type" required>
                    <option value="1" selected>Un visiteur</option>
                    <option value="2">Un exposant</option>
            </select><br>
            <label for="r_sociale" >Raison sociale : </label>
            <input type="text" name="r_sociale" id="r_sociale" ><br>
            <label for="siret" >Siret : </label>
            <input type="text" name="siret" id="siret" ><br>

            <input type="radio" name="titre" value="Mme" id="F"  required/><label for="F" class="notmarge expo1">Mme</label>
            <input type="radio" name="titre" value="M" id="M"  required/><label for="M" class="notmarge expo1">M</label><br>
            <label for="nom" >Nom : </label>
            <input type="text" name="nom" id="nom"  required><br>
            <label for="prenom" >Prenom : </label>
            <input type="text" name="prenom" id="prenom"  required><br>
            <label for="tel">Téléphone : </label>
            <input type="tel" name="tel"  id="tel"><br>
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" required><br>
            <label for="ad_user" >Adresse : </label>
            <input type="text" name="ad_user" id="ad_user"  required><br>
            <label for="mdp1">Mot de passe : </label>
            <input type="password" name="mdp1" id="mdp1" required><br>
            <label for="mdp2">Confirmer mot de passe : </label>
            <input type="password" name="mdp2" id="mdp2" required><br>


            <input type="submit"  class="subconn"value="S'INSCRIRE">
            <input type="reset" class="subconn" value="RESET">
          </fieldset>
        </form>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <?php include('include/footer.php')?>
  <!-- FOOTER -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/scripts.js"></script>

</body>

</html>
