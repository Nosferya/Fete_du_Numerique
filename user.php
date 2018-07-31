<?php
	session_start ();
?>
<?php
$host_name = 'db745063345.db.1and1.com';
$database = 'db745063345';
$user_name = 'dbo745063345';
$password = '#Clement020';

$dbh = null;
try {
  $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  $dbh->exec("SET CHARACTER SET utf8");
} catch (PDOException $e) {
  echo "Erreur!: " . $e->getMessage() . "<br/>";
  die();
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Interface Utilisateur</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="images/favicon.png" />
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->
     <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="shortcut icon" href="img/sakura.gif">

</head>

<body>
<?php
		$id = $_POST['login'];
        $pass= $_POST['mdpi'];
        $pass = sha1($pass);

        if (!isset($_SESSION['login'])) {
            $req = $dbh->prepare('SELECT login_user FROM user WHERE login_user = ?');
            $req->execute(array($id));
        while ($donnees = $req->fetch()){
            $var =  $donnees['login_user'];
        }

        if($var != $id){
            echo "<p>ERREUR : ID non valide</p>";
            $req->closeCursor();
        } else {
            $req->closeCursor();
            $req2 = $dbh->prepare('SELECT banni FROM user WHERE login_user = ?');
            $req2->execute(array($id));
                while ($donnees = $req2->fetch()){
                    $var2 =  $donnees['banni'];
                    $varb = $donnees['whybanni'];
        }}
         if($var2 == 1){
             echo "<p>ERREUR : Votre compte a été suspendu pour le motif suivant : ".$varb.".<br> Veuillez contacter un administrateur via le menu contact.</p>";
             $req2->closeCursor();
        } else {
             $req2->closeCursor();
             $req3 = $dbh->prepare('SELECT * FROM user WHERE login_user = ?');
             $req3->execute(array($id));
                 while ($donnees = $req3->fetch()){
                     $var3 =  $donnees['mdp_user'];
                     $var3b = $donnees['r_sociale'];
                     $var3c = $donnees['email_user'];
                     $var3d = $donnees['type_user'];

         }
        }
        if($var3 != $pass){
            echo "<p>ERREUR : Votre mot de passe est erroné</p>";
            $req3->closeCursor();
        } else {
            $_SESSION['login'] = $id;
            $_SESSION['raison'] = $var3b;
            $_SESSION['ema'] = $var3c;
            $_SESSION['priv'] = $var3d;
            $req3->closeCursor();
        }
        }
            ?>

				<!-- HEADER -->
				<?php include("include/header.php") ?>
				<!-- HEADER -->
    <main>

			<!-- LA BARRE SOCIALE -->
			<?php include('include/socialbar.php') ?>
			<!-- FIN LA BARRE SOCIALE -->

    <?php

if (isset($_SESSION['login'])) {
    $req4 = $dbh->prepare('SELECT * FROM user WHERE login_user = ?');
    $req4->execute(array($_SESSION['login']));
        while ($donnees = $req4->fetch()){
            $var4 =  $donnees['type_user'];
            $var5 =  $donnees['n_valid'];
            $var6 =  $donnees['a_valid'];
            $var7 =  $donnees['valid'];
            $var00 = $donnees['id_user'];
            $var01 = $donnees['r_sociale'];
            $var02 = $donnees['civilite_user'];
            $var03 = $donnees['n_user'];
            $var04 = $donnees['p_user'];
            $var05 = $donnees['tel_user'];
            $var06 = $donnees['ad_user'];
            $var07 = $donnees['login_user'];
            $var08 = $donnees['siret'];
            $var09 = $donnees['email_user'];
            /*$var4 = 3;*/ /*Pour forcer la connexion à un type de compte POUR TEST UNIQUEMENT*/
        }
						if($var7 == 0){
								$MVN2 = $_POST['MVN'];
								if ($var5 == $MVN2){
									$up = $dbh->prepare('UPDATE user SET valid = 1 WHERE login_user = :id');
									$up->execute(array(
										'id' => $_SESSION['login']
									));
									echo "<script> alert('Le code est validé');</script>";
								}

								if ($MVN2 != '') {
									echo "<script> alert('Le code est érroné');</script>";
                                }}

                                if ($var01 == '' && $var4 == 1){
                                    $var01 = '<i class="op">Information non renseignée</i>';
                                } else if ($var01 == '' && $var4 == 2){
                                    $var01 = '<i class="op">Information non renseignée</i>';
                                }

                                if ($var02 == "M"){
                                    $var02 = "Monsieur";
                                } else if ($var02 == "Mme") {
                                    $var02 = "Madame";
                                } else if ($var4 == 1){
                                    $var02 = '<i class="op">Information non renseignée</i>';
                                } else if ($var4 == 2){
                                    $var02 = '<i class="ob">Information non renseignée</i>';
                                }

                                if ($var03 == '' && $var4 == 1){
                                    $var03 = '<i class="op">Information non renseignée</i>';
                                } else if ($var03 == '' && $var4 == 2){
                                    $var03 = '<i class="ob">Information non renseignée</i>';
                                }

                                if ($var04 == '' && $var4 == 1){
                                    $var04 = '<i class="op">Information non renseignée</i>';
                                } else if ($var04 == '' && $var4 == 2){
                                    $var04 = '<i class="ob">Information non renseignée</i>';
                                }

                                if ($var05 == '' && $var4 == 1){
                                    $var05 = '<i class="op">Information non renseignée</i>';
                                } else if ($var05 == '' && $var4 == 2){
                                    $var05 = '<i class="ob">Information non renseignée</i>';
                                }

                                if ($var06 == '' && $var4 == 1){
                                    $var06 = '<i class="op">Information non renseignée</i>';
                                } else if ($var06 == '' && $var4 == 2){
                                    $var06 = '<i class="ob">Information non renseignée</i>';
                                }

                                if ($var07 == '' && $var4 == 1){
                                    $var07 = '<i class="op">Information non renseignée</i>';
                                } else if ($var07 == '' && $var4 == 2){
                                    $var07 = '<i class="ob">Information non renseignée</i>';
                                }

                                if ($var08 == '' && $var4 == 1){
                                    $var08 = '<i class="op">Information non renseignée</i>';
                                } else if ($var08 == '' && $var4 == 2){
                                    $var08 = '<i class="ob">Information non renseignée</i>';
                                }

                                if ($var09 == '' && $var4 == 1){
                                    $var09 = '<i class="op">Information non renseignée</i>';
                                } else if ($var09 == '' && $var4 == 2){
                                    $var09 = '<i class="ob">Information non renseignée</i>';
                                }

    if ($var4 == 1) { /*visiteurs*/


        $token = $_POST['token'];

        if ($token == 1){

            $user= $_POST['idu'];
            $event = $_POST['ide'];
            $place = $_POST['res'];
            $nom = $_POST['nom'];
            $place = $place - 1;

            echo '<script> alert("Vous vous êtes inscrit à la conférence '.$nom.'.") </script>';

            $ins = $dbh->prepare('INSERT INTO reserver VALUES ('.$event.', '.$user.')');
            $ins->execute();

                $up = $dbh->prepare('UPDATE evenement SET nbplaceres = :res  WHERE id_event = :id');
                $up->execute(array(
                 'res' => $place,
                 'id' => $event));

        } else if ($token == 2) {

            $user= $_POST['idu'];
            $event = $_POST['ide'];
            $place = $_POST['res'];
            $nom = $_POST['nom'];
            $place = $place + 1;

            echo '<script> alert("Vous vous êtes désinscrit de la conférence '.$nom.'.") </script>';

            $del = $dbh->prepare('DELETE FROM reserver WHERE id_event = :event && id_user = :user');
            $del->execute(array(
                'event' => $event,
                'user' => $user,
            ));

            $up = $dbh->prepare('UPDATE evenement SET nbplaceres = :res  WHERE id_event = :id');
            $up->execute(array(
             'res' => $place,
             'id' => $event));
        } else {
            $token = 0;
        }

        echo '<div class="mainint">
        <div class="menuuser">';
    echo '<p class="head">Bienvenue '.$_SESSION['login'].'</p>';
    echo '<br>
       <div class="menubtn" id="bienbtn">Index</div>
       <div class="menubtn" id="gesdbtn">Gérer vos Données</div>
       <div class="menubtn" id="gesfbtn">S\'inscrire à une conférence</div>
       <div class="menubtn" id="delebtn">Supprimer Compte</div>
       <div class="menubtn" id="confbtn">Confirmer Mail</div>
        </div>

        <div class="intuser">
        <div class="bien" id="bien" style="display:block">';
        echo"<br><p>Bienvenue sur votre interface visiteur.<br><br>Vous pourrez à partir de cette interface gérer vos données utilisateur, ainsi que s'inscrire aux conférences et confirmer votre adresse mail.<p><br>";
        if ($var7 == 0) {
            echo '<p><span class="urgent">ATTENTION</span> : Votre email n\'a pas été verifiée</p>';}

            echo '</div>
         <div class="gesd" id="gesd" style="display:none">
         <div class="gestint">
         <div class="cell inf">Pseudo du compte</div>
         <div class="cell mod">'.$var07.'</div>
         <div class="cell inf">Civilité</div>
         <div class="cell mod">'.$var02.'</div>
         <div class="cell inf">Nom</div>
         <div class="cell mod">'.$var03.'</div>
         <div class="cell inf">Prénom</div>
         <div class="cell mod">'.$var04.'</div>
         <div class="cell inf">Adresse</div>
         <div class="cell mod">'.$var06.'</div>
         <div class="cell inf">Numéro de téléphone</div>
         <div class="cell mod">'.$var05.'</div>
         <div class="cell inf">Adresse Mail</div>
         <div class="cell mod">'.$var09.'</div>
         <div class="cell inf">Mot de passe</div>
         <div class="cell mod">******</div>
         <a href="modifyuser.php?id='.$var00.'"><div class="cell val btn">Modifier</div></a>
         <div class="cell none"></div>
         </div>
         </div>
         <div class="gesf" id="gesf" style="display:none">';

        if ($var7 == 0) {
            echo '<p><span class="urgent">ATTENTION</span> : Votre email n\'a pas été verifiée, vous ne pouvez pas créer d\'évènements.</p>';}
        if ($var6 == 0) {
            echo '<p><span class="urgent">ATTENTION</span> : Votre compte est en attente de validation par un administrateur. Vous ne pouvez pas créer d\'évènements</p>';}
        if ($var6 == 1 && $var7 == 1){
                echo '
                <div class=visuevent2>
                <div class="cell none"></div>
                <div class="cell none"></div>
                <div class="cell">CONFERENCES DISPONIBLES</div>
                <div class="cell"></div>
                <div class="cell none"></div>
                <div class="cell none"></div>
                <div class="cell none"></div>
                <div class="cell">Nom Evènement</div>
                <div class="cell">Durée</div>
                <div class="cell">Description</div>
                <div class="cell">Places totale</div>
                <div class="cell">Places restantes</div>
                <div class="cell"></div>
                <div class="cell"></div>';


                $reqin1 = $dbh->prepare('SELECT id_event FROM reserver WHERE id_user = '.$var00.'');
                $reqin2 = $dbh->prepare('SELECT * FROM evenement WHERE type_event = "Conférence" && status = 4 ORDER BY id_event DESC');
                $reqin3 = $dbh->prepare('SELECT * FROM evenement WHERE type_event = "Conférence" && status = 4 /*&& id_event != '.$varev11.'*/ ORDER BY id_event DESC');

                $reqin1c = $dbh->query('SELECT COUNT(id_event) AS idc FROM evenement WHERE type_event = "Conférence" && status = 4');
                $countid = $reqin1c->fetch();
                $reqin2c = $dbh->query('SELECT COUNT(id_event) AS idc FROM reserver WHERE id_user = '.$var00.'');
                $countid2 = $reqin2c->fetch();

                /*echo $countid['idc'];
                echo $countid2['idc'];*/
                $cid1 = $countid['idc'];
                $cid2 = $countid2['idc'];


                    if ( $cid1 == $cid2) {
                        echo '
                        <div class="cell"></div>
                        <div class="cell"></div>
                        <div class="cell">Aucune conférence disponible</div>
                        <div class="cell"></div>
                        <div class="cell"></div>
                        <div class="cell"></div>
                        <div class="cell"></div>';
                    } else if ( $cid2 == 0) {

                        $reqin2->execute();

                        while($donnees = $reqin2->fetch()){
                            $varev1 =  $donnees['id_event'];
                            $varev2 =  $donnees['titre_event'];
                            $varev4 =  $donnees['info_duree'];
                            $varev5 =  $donnees['nbplacesou'];
                            $varev6 =  $donnees['nbplaceres'];
                            $varev7 =  $donnees['descriptif_event'];
                            $desc =  substr ( $varev7 , 0 , 50);
                            $desc = $desc."...";

                        echo '
                            <div class="cell">'.$varev2.'</div>
                            <div class="cell">'.$varev4.'</div>
                            <div class="cell">'.$desc.'</div>
                            <div class="cell">'.$varev5.'</div>
                            <div class="cell">'.$varev6.'</div>
                            <div class="cell"><a href="view.php?id='.$varev1.'"><i class="fas fa-book-open icon2"></i></a></div>
                            <div class="cell">

            <form method="POST" action="#">
            <input type="hidden" name="token" value="1">
            <input type="hidden" name="nom" value="'.$varev2.'">
            <input type="hidden" name="idu" value="'.$var00.'">
            <input type="hidden" name="ide" value="'.$varev1.'">
            <input type="hidden" name="res" value="'.$varev6.'">
            <input type="submit" class="btn2 v" value="V">
            </form>
            </div>';

                    }} else if ( $cid1 != $cid2 ) {

                        $reqin1->execute();

                        while($donnees = $reqin1->fetch()){
                            $varev11 =  $donnees['id_event'];

                            $reqin3->execute();

                            while($donnees = $reqin3->fetch()){
                                $varev1 =  $donnees['id_event'];
                                $varev2 =  $donnees['titre_event'];
                                $varev4 =  $donnees['info_duree'];
                                $varev5 =  $donnees['nbplacesou'];
                                $varev6 =  $donnees['nbplaceres'];
                                $varev7 =  $donnees['descriptif_event'];
                                $desc =  substr ( $varev7 , 0 , 50);
                                $desc = $desc."...";

                            if ($varev11 != $varev1){

                            echo '
                                <div class="cell">'.$varev2.'</div>
                                <div class="cell">'.$varev4.'</div>
                                <div class="cell">'.$desc.'</div>
                                <div class="cell">'.$varev5.'</div>
                                <div class="cell">'.$varev6.'</div>
                                <div class="cell"><a href="view.php?id='.$varev1.'"><i class="fas fa-book-open icon2"></i></a></div>
                                <div class="cell">

                <form method="POST" action="#">
                <input type="hidden" name="token" value="1">
                <input type="hidden" name="nom" value="'.$varev2.'">
                <input type="hidden" name="idu" value="'.$var00.'">
                <input type="hidden" name="ide" value="'.$varev1.'">
                <input type="hidden" name="res" value="'.$varev6.'">
                <input type="submit" class="btn2 v" value="V">
                </form>
                </div>';}

                        }}


                    }




                        /*}*/







                           echo '
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell">VOS CONFERENCES RESERVEES</div>
                           <div class="cell"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>';}

                $reqev3 = $dbh->prepare('SELECT * FROM reserver WHERE id_user = :id ORDER BY id_event');
                $reqev3->execute(array(
                    'id' => $var00
                ));
                    $token3 =0;
                    while ($donnees = $reqev3->fetch()){
                        $token3 =1;
                        $varev31 =  $donnees['id_event'];
                        $varev32 =  $donnees['id_user'];

                        $reqev4 = $dbh->prepare('SELECT * FROM evenement WHERE id_event = ?');
                        $reqev4->execute(array($varev31));

                        while ($donnees = $reqev4->fetch()){
                            $varev41 =  $donnees['id_event'];
                            $varev42 =  $donnees['titre_event'];
                            $varev44 =  $donnees['info_duree'];
                            $varev45 =  $donnees['nbplacesou'];
                            $varev46 =  $donnees['nbplaceres'];
                            $varev47 =  $donnees['descriptif_event'];


                                $desc =  substr ( $varev47 , 0 , 50);
                                $desc = $desc."...";

                            echo '
                            <div class="cell">'.$varev42.'</div>
                            <div class="cell">'.$varev44.'</div>
                            <div class="cell">'.$desc.'</div>
                            <div class="cell"></div>
                            <div class="cell"></div>
                            <div class="cell"><a href="view.php?id='.$varev41.'"><i class="fas fa-book-open icon2"></i></a></div>
                            <div class="cell">
                                <form method="POST" action="#">
                                <input type="hidden" name="token" value="2">
                                <input type="hidden" name="nom" value="'.$varev42.'">
                                <input type="hidden" name="idu" value="'.$varev32.'">
                                <input type="hidden" name="ide" value="'.$varev41.'">
                                <input type="hidden" name="res" value="'.$varev46.'">
                                <input type="submit" class="btn2 r" value="X">
                                </form>
                                </div>';}}

                        if ($token3 == 0) {
                            echo '
                            <div class="cell"></div>
                            <div class="cell"></div>
                            <div class="cell">Aucune conférence réservée</div>
                            <div class="cell"></div>
                            <div class="cell"></div>
                            <div class="cell"></div>
                            <div class="cell"></div>';
                        }

                           echo '</div></div>
         <div class="dele" id="dele" style="display:none">
         <br><p><span class="urgent">ATTENTION</span> : La suppression du compte est définitive et les informations ne pourront pas être récupérées par les administrateurs de quelque manière il soit !</p><br><p>A n\'utiliser qu\'en parfaite connaissance de cause !</p><br>

         <form method="POST" action="suppression.php">
              <fieldset>
                 <legend> Formulaire de suppression </legend>
                 <br>
                  <label for="mdpd">Entrez votre mot de passe : </label><br><input class="txtinput" type="password" name="mdpd" required><br>
                  <label for="verif">Entrez le texte suivant à la ligne suivante (en respectant la casse) : "A Supprimer" : </label><br><input class="txtinput" type="text" name="verif" required>
                  <input type="submit" id="suppr" value="SUPPRIMER">
             </fieldset>
         </form>


         </div>
         <div class="conf" id="conf" style="display:none">';
         if ($var7 == 1){
            echo "<br><p>Vous avez déjà confirmé votre adresse Mail</p><br><p>Le formulaire de confirmation n'est plus disponible à présent.</p><br>";
        } else {

        echo '<form method="POST" action="#">
        <label for="MVN">Entrez le code de confirmation à 9 chiffres ci-contre : <input type="text" name="MVN" class="MVN" placeholder="012345678" maxlength="9" required>
        <input type="submit" value="CONFIRMER" id="confirmer">
        </form>';}
        echo'</div>
    </div>
</div>';



    } else if ($var4 == 2) { /*exposants*/

        echo '<div class="mainint">
        <div class="menuuser">';
    echo '<p class="head">Bienvenue '.$_SESSION['login'].' ('.$_SESSION['raison'].')</p>';
    echo '<br>
       <div class="menubtn" id="bienbtn">Index</div>
       <div class="menubtn" id="gesdbtn">Gérer vos Données</div>
       <div class="menubtn" id="gesfbtn">Proposer un Evènement</div>
       <div class="menubtn" id="delebtn">Supprimer Compte</div>
       <div class="menubtn" id="confbtn">Confirmer Mail</div>
        </div>

        <div class="intuser">
        <div class="bien" id="bien" style="display:block">';
        echo"<br><p>Bienvenue sur votre interface exposant.<br><br>Vous pourrez à partir de cette interface gérer vos données utilisateur, ainsi que proposer des évènements et confirmer votre adresse mail.<p><br>";
        if ($var7 == 0) {
            echo '<p><span class="urgent">ATTENTION</span> : Votre email n\'a pas été verifiée</p>';}
        if ($var6 == 0) {
                echo '<p><span class="urgent">ATTENTION</span> : Votre compte est en attente de validation par un administrateur. Vous ne pouvez pas créer d\'évènements</p>';}

            echo '</div>
         <div class="gesd" id="gesd" style="display:none">
         <div class="gestint">
         <div class="cell inf">Pseudo du compte</div>
         <div class="cell mod">'.$var07.'</div>
         <div class="cell inf">Civilité</div>
         <div class="cell mod">'.$var02.'</div>
         <div class="cell inf">Nom</div>
         <div class="cell mod">'.$var03.'</div>
         <div class="cell inf">Prénom</div>
         <div class="cell mod">'.$var04.'</div>
         <div class="cell inf">Raison sociale</div>
         <div class="cell mod">'.$var01.'</div>
         <div class="cell inf">Numéro Siret</div>
         <div class="cell mod">'.$var08.'</div>
         <div class="cell inf">Adresse</div>
         <div class="cell mod">'.$var06.'</div>
         <div class="cell inf">Numéro de téléphone</div>
         <div class="cell mod">'.$var05.'</div>
         <div class="cell inf">Adresse Mail</div>
         <div class="cell mod">'.$var09.'</div>
         <div class="cell inf">Mot de passe</div>
         <div class="cell mod">******</div>
         <a href="modifyuser.php?id='.$var00.'"><div class="cell val btn">Modifier</div></a>
         <div class="cell none"></div>
         </div>
         <p> NOTE : Si vous êtes un particulier souhaitant exposer, veuillez mettre votre Prénom et votre Nom à la ligne "Raison Sociale"

         </div>
         <div class="gesf" id="gesf" style="display:none">';

        if ($var7 == 0) {
            echo '<p><span class="urgent">ATTENTION</span> : Votre email n\'a pas été verifiée, vous ne pouvez pas créer d\'évènements.</p>';}
        if ($var6 == 0) {
            echo '<p><span class="urgent">ATTENTION</span> : Votre compte est en attente de validation par un administrateur. Vous ne pouvez pas créer d\'évènements</p>';}
        if ($var01 == '<i class="op">Information non renseignée</i>') {
            echo '<p><span class="urgent">ATTENTION</span> : Vous n\'avez pas renseigné de Raison Sociale, vous ne pouvez pas créer d\'évènements.</p>';}
        if ($var6 == 1 && $var7 == 1 && $var01 != '<i class="op">Information non renseignée</i>'){
                echo '
                <div class=visuevent>
                <div class="cell none"></div>
                <div class="cell none"></div>
                <div class="cell">VOS EVENEMENTS</div>
                <div class="cell"></div>
                <div class="cell none"></div>
                <div class="cell none"></div>
                <div class="cell">Nom Evènement</div>
                <div class="cell">Durée</div>
                <div class="cell"></div>
                <div class="cell">Type</div>
                <div class="cell">Statut</div>
                <div class="cell"></div>';

                $reqev2 = $dbh->prepare('SELECT * FROM evenement WHERE responsable_event = ?');
                $reqev2->execute(array($var01));
                $token2 = 0;
                    while ($donnees = $reqev2->fetch()){
                        $token2 = 1;
                        $varev1 =  $donnees['id_event'];
                        $varev2 =  $donnees['titre_event'];
                        $varev3 =  $donnees['type_event'];
                        $varev4 =  $donnees['info_duree'];
                        $varev5 =  $donnees['status'];
                        $varev5b = $donnees['status'];
                        $varev6 =  $donnees['raisonrefus'];
                        if ($varev5 == 1) {
                            $varev5 = '<p class="j">En attente</p>';
                        } else if ($varev5 == 2) {
                            $varev5 = '<p class="j">En cours</p>';
                        } else if ($varev5 == 3) {
                            $varev5 = '<p class="j">Finalisation</p>';
                        } else if ($varev5 == 4) {
                            $varev5 = '<p class="v">Validé</p>';
                        } else if ($varev5 == 5) {
                            $varev5 = '<p class="r">Refusé</p>';
                        } else if ($varev5 == 6) {
                            $varev5 = '<p class="r">Annulé</p>';
                        }

                        echo '
                        <div class="cell">'.$varev2.'</div>
                        <div class="cell">'.$varev4.'</div>
                        <div class="cell"><i class="op">'.$varev6.'</i></div>
                        <div class="cell">'.$varev3.'</div>
                        <div class="cell">'.$varev5.'</div>
                        <div class="cell">';
                        if ($varev5b == 6){
                            echo '<i class="fas fa-times icon op"></i>  <a href="modifyevent.php?id='.$varev1.'"><i class="fas fa-edit icon"></i></a>';
                        } else if ($varev5b == 5) {
                            echo "<span class=\"op\"><i class=\"fas fa-times-circle icon\"></i></span>";
                        } else if ($varev5b == 4) {
                            echo '<a href="cancel.php?id='.$varev1.'"><i class="fas fa-times icon"></i></a>  <i class="fas fa-edit icon op"></i>';
                        } else {
                            echo '<a href="cancel.php?id='.$varev1.'"><i class="fas fa-times icon"></i></a>  <a href="modifyevent.php?id='.$varev1.'"><i class="fas fa-edit icon"></i></a>';
                        }
                        echo'</div>
                        ';}

                        if ($token2 == 0) {
                            echo '
                            <div class="cell"></div>
                            <div class="cell"></div>
                            <div class="cell">Aucun évènement répertorié</div>
                            <div class="cell"></div>
                            <div class="cell"></div>
                            <div class="cell"></div>';
                        }
                    }

                           echo '
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div>
                           <div class="cell">CREER UN NOUVEL EVENEMENT</div>
                           <div class="cell"></div>
                           <div class="cell none"></div>
                           <div class="cell none"></div></div>

                           <form method="POST" action="generation.php">
                           <div class="creeevent">
                           <div class="cell inf">Nom de l\'évènement</div>
                           <div class="cell mod"><input type="text" class="text" name="name" required></input></div>
                           <div class="cell inf">Responsable</div>
                           <div class="cell mod nmod">'.$var01.' <i class="op"> (Non modifiable)</i><input type="hidden" name="id" value="'.$var01.'"></div>
                           <div class="cell inf">Type d\'évènement</div>
                           <div class="cell mod">
                                <select name="type" class="sel" required>
                                    <option value="Conférence">Conférence</option>
                                    <option value="Animation">Animation</option>
                                    <option value="Exposition">Exposition</option>
                                </select>
                            </div>
                           <div class="cell inf double">Description de l\'évènement (500 caractères max)</div>
                           <div class="cell mod double"><textarea class="textarea" name="info" maxlength="500" required></textarea></div>
                           <div class="cell inf">Durée souhaitée</div>
                           <div class="cell mod">
                                <select name="duree" class="sel" required>
                                    <option value="0h30m">0h30</option>
                                    <option value="1h00m">1h00</option>
                                    <option value="1h30m">1h30</option>
                                    <option value="2h00m">2h00</option>
                                    <option value="2h30m">2h30</option>
                                    <option value="3h00m">3h00</option>
                                    <option value="3h30m">3h30</option>
                                    <option value="4h00m">4h00</option>
                                    <option value="4h30m">4h30</option>
                                    <option value="5h00m">5h00</option>
                                    <option value="5h30m">5h30</option>
                                    <option value="6h00m">6h00</option>
                                    <option value="6h30m">6h30</option>
                                    <option value="7h00m">7h00</option>
                                    <option value="7h30m">7h30</option>
                                    <option value="8h00m">8h00</option>
                       </select>
                           </div>
                           <div class="cell inf">Nombre de place souhaité</div>
                           <div class="cell mod"><input type="text" class="text" name="place" placeholder="(Conférence uniquement. Laissez vide pour ne pas définir de limite de places)"></input></div>
                           <div class="cell inf double">Informations complèmentaires (500 caractères max)</div>
                           <div class="cell mod double"><textarea class="textarea" name="comp" maxlength="500"></textarea></div>
                           <div class="cell val"><input type="submit" class="btn" value="ENVOYER"></input></div>
                           <div class="cell none"></div></div>
                           </form>






                           </div>
         <div class="dele" id="dele" style="display:none">
         <br><p><span class="urgent">ATTENTION</span> : La suppression du compte est définitive et les informations ne pourront pas être récupérées par les administrateurs de quelque manière il soit !</p><br><p>A n\'utiliser qu\'en parfaite connaissance de cause !</p><br>

         <form method="POST" action="suppression.php">
              <fieldset>
                 <legend> Formulaire de suppression </legend>
                 <br>
                  <label for="mdpd">Entrez votre mot de passe : </label><br><input class="txtinput" type="password" name="mdpd" required><br>
                  <label for="verif">Entrez le texte suivant à la ligne suivante (en respectant la casse) : "A Supprimer" : </label><br><input class="txtinput" type="text" name="verif" required>
                  <input type="submit" id="suppr" value="SUPPRIMER">
             </fieldset>
         </form>


         </div>
         <div class="conf" id="conf" style="display:none">';
         if ($var7 == 1){
            echo "<br><p>Vous avez déjà confirmé votre adresse Mail</p><br><p>Le formulaire de confirmation n'est plus disponible à présent.</p><br>";
        } else {

        echo '<form method="POST" action="#">
        <label for="MVN">Entrez le code de confirmation à 9 chiffres ci-contre : <input type="text" name="MVN" class="MVN" placeholder="012345678" maxlength="9" required>
        <input type="submit" value="CONFIRMER" id="confirmer">
        </form>';}
        echo'</div>
    </div>
</div>';

    } else if ($var4 == 3) { /*administrateur*/

        echo '<div class="mainint">
        <div class="menuuser">';
    echo '<p class="head">Bienvenue '.$_SESSION['login'].'</p>';
    echo '<br>
       <div class="menubtn" id="indebtn">Index</div>
       <div class="menubtn" id="gesubtn">Gérer Utilisateurs</div>
       <div class="menubtn" id="gesbbtn">Gérer banissements</div>
       <div class="menubtn" id="gesebtn">Gérer évènements</div>
       <div class="menubtn" id="waitbtn">Evènements en Attente</div>
       <div class="menubtn" id="refubtn">Evènements Refusés ou Annulés</div>
        </div>

       <div class="intuser">
           <div class="inde" id="inde" style="display:block">';
           echo"<br><p>Bienvenue sur l'interface administrateur.<br><br>Vous pourrez à partir de cette interface gérer les comptes des utilisateurs et des évènements prévus lors de la manifestation en cliquant sur l'un des onglets situés sur le panneau latéral.<p><br>";
           echo '</div>
            <div class="gesu" id="gesu" style="display:none">
            <div class="gestuser">
            <div class="cell">Pseudo User</div>
            <div class="cell"></div>
            <div class="cell">Type Compte</div>
            <div class="cell"></div>';

            $requ = $dbh->prepare('SELECT * FROM user ORDER BY id_user DESC');
                $requ->execute(array());
                    while ($donnees = $requ->fetch()){
                        $varu1 =  $donnees['id_user'];
                        $varu2 =  $donnees['login_user'];
                        $varu3 =  $donnees['type_user'];

                        if ($varu3 == 1 ) {
                            $varu3 = "Visiteur";
                        } else if ($varu3 == 2 ) {
                            $varu3 = "Exposant";
                        } else if ($varu3 == 3 ) {
                            $varu3 = "Administrateur";
                        }

                        echo '
                        <div class="cell">'.$varu2.'</div>
                        <div class="cell"></div>
                        <div class="cell">'.$varu3.'</div>
                        <div class="cell"><a href="modifyuser.php?id='.$varu1.'"><i class="fas fa-edit icon"></i></a></div>';}
            echo '</div>
            </div>
            <div class="gesb" id="gesb" style="display:none">
            <div class="gestuser">
            <div class="cell">Pseudo User</div>
            <div class="cell"></div>
            <div class="cell">Type Compte</div>
            <div class="cell"></div>';

            $reqb = $dbh->prepare('SELECT * FROM user WHERE banni = 1 ORDER BY id_user DESC');
                $reqb->execute(array());
                $tokenb = 0;
                    while ($donnees = $requ->fetch()){
                        $tokenb = 1;
                        $varb1 = $donnees['id_user'];
                        $varb2 = $donnees['login_user'];
                        $varb3 = $donnees['type_user'];
                        $varb4 = $donnees['whybanni'];

                        if ($varu3 == 1 ) {
                            $varu3 = "Visiteur";
                        } else if ($varu3 == 2 ) {
                            $varu3 = "Exposant";
                        } else if ($varu3 == 3 ) {
                            $varu3 = "Administrateur";
                        }

                        echo '
                        <div class="cell">'.$varb2.'</div>
                        <div class="cell">'.$varb4.'</div>
                        <div class="cell">'.$varb3.'</div>
                        <div class="cell"><a href="modifyuser.php?id='.$varb1.'"><i class="fas fa-edit icon"></i></a></div>';}

                        if ($tokenb == 0) {
                            echo '
                            <div class="cell"></div>
                            <div class="cell">Aucun utilisateur banni</div>
                            <div class="cell"></div>
                            <div class="cell"></div>';
                        }
            echo '</div>
            </div>
            <div class="gese" id="gese" style="display:none">

            <div class=visuevent>
            <div class="cell none"></div>
            <div class="cell none"></div>
            <div class="cell">LES EVENEMENTS</div>
            <div class="cell"></div>
            <div class="cell none"></div>
            <div class="cell none"></div>
            <div class="cell">Nom Evènement</div>
            <div class="cell">Durée</div>
            <div class="cell"></div>
            <div class="cell">Type</div>
            <div class="cell">Statut</div>
            <div class="cell"></div>';

            $reqe = $dbh->prepare('SELECT * FROM evenement ORDER BY id_event DESC');
            $reqe->execute();
            $tokene1 = 0;
                while ($donnees = $reqe->fetch()){
                    $tokene1 = 1;
                    $vare1 =  $donnees['id_event'];
                    $vare2 =  $donnees['titre_event'];
                    $vare3 =  $donnees['type_event'];
                    $vare4 =  $donnees['info_duree'];
                    $vare5 =  $donnees['status'];
                    $vare6 =  $donnees['raisonrefus'];
                    if ($vare5 == 1) {
                        $vare5 = '<p class="j">En attente</p>';
                    } else if ($vare5 == 2) {
                        $vare5 = '<p class="j">En cours</p>';
                    } else if ($vare5 == 3) {
                        $vare5 = '<p class="j">Finalisation</p>';
                    } else if ($vare5 == 4) {
                        $vare5 = '<p class="v">Validé</p>';
                    } else if ($vare5 == 5) {
                        $vare5 = '<p class="r">Refusé</p>';
                    } else if ($vare5 == 6) {
                        $vare5 = '<p class="r">Annulé</p>';
                    }

                    echo '
                    <div class="cell">'.$vare2.'</div>
                    <div class="cell">'.$vare4.'</div>
                    <div class="cell"><i class="op">'.$vare6.'</i></div>
                    <div class="cell">'.$vare3.'</div>
                    <div class="cell">'.$vare5.'</div>
                    <div class="cell"><a href="modifyevent.php?id='.$vare1.'"><i class="fas fa-edit icon"></i></a></div>';}

                    if ($tokene1 == 0) {
                        echo '
                        <div class="cell"></div>
                        <div class="cell"></div>
                        <div class="cell">Aucun évènement répertorié</div>
                        <div class="cell"></div>
                        <div class="cell"></div>
                        <div class="cell"></div>';
                    }

            echo' </div></div>
            <div class="wait" id="wait" style="display:none">
            <div class=visuevent>
            <div class="cell none"></div>
            <div class="cell none"></div>
            <div class="cell">LES EVENEMENTS EN ATTENTE</div>
            <div class="cell"></div>
            <div class="cell none"></div>
            <div class="cell none"></div>
            <div class="cell">Nom Evènement</div>
            <div class="cell">Durée</div>
            <div class="cell"></div>
            <div class="cell">Type</div>
            <div class="cell">Statut</div>
            <div class="cell"></div>';

            $reqw = $dbh->prepare('SELECT * FROM evenement WHERE status = 1 || status = 2 || status = 3 ORDER BY id_event DESC');
            $reqw->execute();
            $tokenw1 = 0;
                while ($donnees = $reqw->fetch()){
                    $tokenw1 = 1;
                    $vare1 =  $donnees['id_event'];
                    $vare2 =  $donnees['titre_event'];
                    $vare3 =  $donnees['type_event'];
                    $vare4 =  $donnees['info_duree'];
                    $vare5 =  $donnees['status'];
                    $vare6 =  $donnees['raisonrefus'];
                    if ($vare5 == 1) {
                        $vare5 = '<p class="j">En attente</p>';
                    } else if ($vare5 == 2) {
                        $vare5 = '<p class="j">En cours</p>';
                    } else if ($vare5 == 3) {
                        $vare5 = '<p class="j">Finalisation</p>';
                    } else if ($vare5 == 4) {
                        $vare5 = '<p class="v">Validé</p>';
                    } else if ($vare5 == 5) {
                        $vare5 = '<p class="r">Refusé</p>';
                    } else if ($vare5 == 6) {
                        $vare5 = '<p class="r">Annulé</p>';
                    }

                    echo '
                    <div class="cell">'.$vare2.'</div>
                    <div class="cell">'.$vare4.'</div>
                    <div class="cell"><i class="op">'.$vare6.'</i></div>
                    <div class="cell">'.$vare3.'</div>
                    <div class="cell">'.$vare5.'</div>
                    <div class="cell"><a href="modifyevent.php?id='.$vare1.'"><i class="fas fa-edit icon"></i></a></div>';}

                    if ($tokenw1 == 0) {
                        echo '
                        <div class="cell"></div>
                        <div class="cell"></div>
                        <div class="cell">Aucun évènement répertorié</div>
                        <div class="cell"></div>
                        <div class="cell"></div>
                        <div class="cell"></div>';
                    }

            echo' </div>
            </div>
            <div class="refu" id="refu" style="display:none">
            <div class=visuevent>
            <div class="cell none"></div>
            <div class="cell none"></div>
            <div class="cell">LES EVENEMENTS REFUSES ET ANNULES</div>
            <div class="cell"></div>
            <div class="cell none"></div>
            <div class="cell none"></div>
            <div class="cell">Nom Evènement</div>
            <div class="cell">Durée</div>
            <div class="cell"></div>
            <div class="cell">Type</div>
            <div class="cell">Statut</div>
            <div class="cell"></div>';

            $reqr = $dbh->prepare('SELECT * FROM evenement WHERE status = 5 || status = 6 ORDER BY id_event DESC');
            $reqr->execute();
            $tokenr1 = 0;
                while ($donnees = $reqr->fetch()){
                    $tokenr1 = 1;
                    $vare1 =  $donnees['id_event'];
                    $vare2 =  $donnees['titre_event'];
                    $vare3 =  $donnees['type_event'];
                    $vare4 =  $donnees['info_duree'];
                    $vare5 =  $donnees['status'];
                    $vare6 =  $donnees['raisonrefus'];
                    if ($vare5 == 1) {
                        $vare5 = '<p class="j">En attente</p>';
                    } else if ($vare5 == 2) {
                        $vare5 = '<p class="j">En cours</p>';
                    } else if ($vare5 == 3) {
                        $vare5 = '<p class="j">Finalisation</p>';
                    } else if ($vare5 == 4) {
                        $vare5 = '<p class="v">Validé</p>';
                    } else if ($vare5 == 5) {
                        $vare5 = '<p class="r">Refusé</p>';
                    } else if ($vare5 == 6) {
                        $vare5 = '<p class="r">Annulé</p>';
                    }

                    echo '
                    <div class="cell">'.$vare2.'</div>
                    <div class="cell">'.$vare4.'</div>
                    <div class="cell"><i class="op">'.$vare6.'</i></div>
                    <div class="cell">'.$vare3.'</div>
                    <div class="cell">'.$vare5.'</div>
                    <div class="cell"><a href="modifyevent.php?id='.$vare1.'"><i class="fas fa-edit icon"></i></a></div>';}

                    if ($tokenr1 == 0) {
                        echo '
                        <div class="cell"></div>
                        <div class="cell"></div>
                        <div class="cell">Aucun évènement répertorié</div>
                        <div class="cell"></div>
                        <div class="cell"></div>
                        <div class="cell"></div>';
                    }


            echo'</div>
       </div>
   </div>';
                }}
?>



    </main>
		<!-- FOOTER -->
		<?php include('include/footer.php')?>
			<!-- FOOTER -->

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/scripts.js"></script>

<script src="js/user_subsys.js"></script>
<script src="js/admin_subsys.js"></script>


<?php
if ($token == 1 || $token == 2) {
                $token = 0;
                echo '<script src="js/conf_module.js"></script>';
                echo '<script src="js/user_subsys.js"></script>';
            } ?>
</html>
