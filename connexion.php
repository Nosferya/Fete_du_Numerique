<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion FDN</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
  <!-- <header> -->
      <?php include("header.php") ?>
  <!-- </header> -->

    <section class = "connexion">
        <fieldset class="field">
            <legend>Connexion</legend>
            <form>
                <input type="radio" name="type" value="Visiteur" id="V" required onchange="showvis(this.checked)" /><label for="Visiteur">Visiteur</label>
                <input type="radio" name="type" value="Exposant" id="E" required onchange="showexp(this.checked)" /><label for="Exposant">Exposant</label>
                <input type="radio" name="type" value="Administrateur" id="A" required onchange="showadm(this.checked)" /><label for="Administrateur">Administrateur</label><br>
            </form>
            <div class="visiteur" id="vis" style="display:none">
                <form method="post" action="visiteur.php">
                    <fieldset class="confield">
                        <legend>Connexion Visiteurs</legend>
                        <label for="mail">Email : </label>
                        <input type="email" name="mail" id="mail" required><br>
                        <label for="mdpi">Mot de passe : </label>
                        <input type="password" name="mdpi" id="mdpi" required><br>
                        <input type="submit" value="SE CONNECTER">
                    </fieldset>
                </form>
            </div>
            <div class="exposant" id="exp" style="display:none">
                <form method="post" action="exposant.php">
                    <fieldset class="confield">
                        <legend>Connexion Exposants</legend>
                        <label for="mail">Email : </label>
                        <input type="email" name="mail" id="mail" required><br>
                        <label for="mdpi">Mot de passe : </label>
                        <input type="password" name="mdpi" id="mdpi" required><br>
                        <input type="submit" value="SE CONNECTER">
                    </fieldset>
                </form>
            </div>
            <div class="administrateur" id="adm" style="display:none">
                <form method="post" action="administrateur.php">
                    <fieldset class="confield">
                        <legend>Connexion Administrateurs</legend>
                        <label for="mail">Email : </label>
                        <input type="email" name="mail" id="mail" required><br>
                        <label for="mdpi">Mot de passe : </label>
                        <input type="password" name="mdpi" id="mdpi" required><br>
                        <input type="submit" value="SE CONNECTER">
                    </fieldset>
                </form>
        </fieldset>
        </div>
        <form method="post" action="inscription.php">
            <fieldset>
                <legend>Inscription</legend>
                <span>Titre : </span>
                <input type="radio" name="titre" value="Mme" id="F" required/><label for="F">Mme</label>
                <input type="radio" name="titre" value="M" id="M" required/><label for="M">M</label><br>
                <label for="nom">Nom : </label>
                <input type="text" name="nom" id="nom" required><br>
                <label for="prenom">Prenom : </label>
                <input type="text" name="prenom" id="prenom" required><br>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" required><br>
                <label for="mdp1">Mot de passe : </label>
                <input type="password" name="mdp1" id="mdp1" required><br>
                <label for="mdp2">Mot de passe : </label>
                <input type="password" name="mdp2" id="mdp2" required><br>
                <label for="type">Vous êtes :</label><br>
                <select name="type" id="type" required>
                    <option value="1">Un visiteur</option>
                    <option value="2">Un exposant</option>
                    <option value="3">Un administrateur</option>
                </select><br>
                <input type="submit" value="S'INSCRIRE">
                <input type="reset" value="RESET">
            </fieldset>
        </form>
    </section>

    <!-- FOOTER -->
    <?php include('footer.php')?>
    <!-- FOOTER -->
	   <script src="js/scripts.js"></script>
    <!-- <script src="js/connexion.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>

</html>
