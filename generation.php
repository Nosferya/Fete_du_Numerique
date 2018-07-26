<?php
	//session_start ();
?>
 <?php
// //$host_name = 'db745063345.db.1and1.com';
// $database = 'db745063345';
// $user_name = 'dbo745063345';
// $password = '#Clement020';

// $dbh = null;
// try {
//   $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
//   $dbh->exec("SET CHARACTER SET utf8");
// } catch (PDOException $e) {
//   echo "Erreur!: " . $e->getMessage() . "<br/>";
//   die();
// }
?>

<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="images/favicon.png" />
    <title>Interface Utilisateur</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/formulaire_connexion.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="shortcut icon" href="img/sakura.gif"> -->
</head>

<body>
	<!-- HEADER -->
	<?php include("include/header.php") ?>
	<!-- HEADER -->

    <main>
         <?php

            // $name = $_POST['name'];
            // $id = $_POST['id'];
            // $type = $_POST['type'];
            // $info = $_POST['info'];
            // $duree = $_POST['duree'];
            // $place = $_POST['place'];
            // $comp = $_POST['comp'];
            // $nbr = 0;
            // $status = 1;
            // $refus = '';
						//
            // if ($place ==''){
            //     $place = 0;
            // } else if ($place <0){
            //     $place = 0;
            // } else if ($place >100) {
            //     $place = 100;
            // } else if ($place >=0 && $place <=100){
            //     $place = $place ;
            // } else {
            //     $place = 0;
            // }


            /*$req = $dbh->prepare('INSERT INTO evenement(titre_event, responsable_event, descriptif_event, type_event, info_duree, nbplacesou, nbplaceres, status, raisonrefus, infocomp) VALUES(:name, :id, :info, :type, :duree, :place, :nbr, :status, :refus, :comp)');

            $req->execute(array(
                'name' => $name,
                'id' => $id,
                'info' => $info,
                'type' => $type,
                'duree' => $duree,
                'place' => $place,
                'nbr' => $nbr,
                'status' => $status,
                'refus' => $refus,
                'comp' => $comp
                ));*/

        ?>
		<div class = "messagevalid">
Votre évènement est validé,<br/>vous pouvez suivre l'avancement du dossier dans votre interface utilisateur.<br/>
<a class="subconn" href="user.php">Retour vers l'interface utilisateur</a>
	</div>
    </main>
		<!-- FOOTER -->
		<?php include('include/footer.php')?>
		<!-- FOOTER -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.js">

		</script>
		<script src="js/parallax.min.js"></script>
		<script src="js/scripts.js"></script>
</body>
</html>
