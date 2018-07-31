<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="images/favicon.png" />
	<title>info pratiques - Fête du Numérique 08</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/infopratique.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>

	<!-- HEADER -->
	<?php include("include/header.php") ?>
	<!-- HEADER -->
  <!-- LA BARRE SOCIALE -->
 	<?php include('include/socialbar.php') ?>
	<!-- FIN LA BARRE SOCIALE -->
  <main class= "infopratique">

			<div class="container-fluid">
				<nav class="picto">
					<ul class="nav nav-pills">
						<li role="presentation" class="active"><a href="#voiture" data-toggle="tab"><i class="fas fa-car"></i></a></li>
						<li role="presentation"><a href="#train" data-toggle="tab"><i class="fas fa-subway"></i></a></li>
						<li role="presentation"><a href="#avion" data-toggle="tab"><i class="fas fa-plane"></i></a></li>
					</ul>
				</nav>
				<div class="row">
					<div class="col-lg-6">
						<div class="tab-content"><!--<details des deplacements>-->

							<div class="tab-pane active" id="voiture">

								<h4>Paris &#8211; Charleville-Mézières</h4>
								<p>Autoroute A4 depuis Paris en direction de Reims, et puis A34 direction Charleville-Mézières.<br/>
								Durée du trajet : 2h20<br/>
								Distance : 235 Km</p>
								<h4>Lille &#8211; Charleville-Mézières</h4>
								<p>Autoroute A27 /E42 depuis Lille en direction de Bruxelles (Belgique) en passant par Tournai, Mons, Charleroi. Sur le Ring de Charleroi (R3) prendre la sortie N5 direction Philippeville / Reims.
							<br/>
								Durée du trajet : 2h<br/></p>
							</div>
							<div class="tab-pane" id="train">
								<h4>Paris &#8211; Charleville-Mézières</h4>
								<p>Depuis la gare de l’Est par TGV, 3 trains directs pour Charleville-Mézières (1 h 35) et plusieurs TGV pour Reims, avec changement pour Charleville-Mézières.</p>
								<h4>Lille &#8211; Charleville-Mézières</h4>
								<p>Depuis la gare de Lille-Flandres 4 trains directs pour Charleville-Mézières et plusieurs trajets avec changement pour Charleville-Mézières (entre 2h et 2h40 de trajet).</p>
							</div>
							<div class="tab-pane" id="avion">
								<h4>Aéroport de Luxembourg-Findel&nbsp;</h4><p>1h35 de trajet en voiture</p>
								<h4>Aéroport de Charleroi/Brussels South&nbsp;</h4><p>1 h 30 de trajet en voiture</p>
								<h4>Aéroport de Bruxelles/Zaventem&nbsp;</h4><p>2 h 00 de trajet en voiture.Suivre l'autoroute A304 jusqu’à Charleroi.</p>
								<h4>Aéroport de Paris/Charles de Gaulle&nbsp;</h4><p>2 h 20 de trajet en voiture et depuis la gare Charles de Gaulle TGV vers Champagne-Ardenne TGV en 30 min, puis correspondance pour Charleville-Mézières)</p>
							</div>

						</div>
					</div>

					<div class="col-lg-6">
						<div class="carte"><img src="images/aeroport0.jpg" alt="carte" width="100%"></div>
					</div>
				</div>
			</div>

	</main>

  <!-- FOOTER -->
  <?php include('include/footer.php')?>
  <!-- FOOTER -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>
