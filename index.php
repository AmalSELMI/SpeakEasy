<?php
	//si le visiteur a soumis le formulaire de connexion
	if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
		if ((isset($_POST['Email']) && !empty($_POST['Email'])) && (isset($_POST['Mdp']) && !empty($_POST['Mdp']))) {

			require_once(__DIR__.'/dao/MembreDAO.class.php');
			$listeMembre = new MembreDAO();

			require_once('control/Securite.class.php');
			// si une entrée de la base contient le login / pass
			$user = $listeMembre->authentification($_POST['Email'], Securite::crypter($_POST['Mdp']));

			// si on obtient une réponse, alors l'utilisateur est un client2fodis
			if($user->getID() > 0) {
				$listeMembre->modifierStatut($user->getID(), 'CONNECTE');		// Modifier le statut.
				session_start();
				$_SESSION['user'] = serialize($user);
				header('Location: view/service.php');
				exit();
			} else {			// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
				$erreur =  '<div id="erreur">Email ou mot de passe incorrect!</div>';
			}
		} else {
			$erreur = '<div id="erreur">Veuillez remplir<br> tous les champs!!!</div>';
		}
	}

	if (isset($erreur)) echo '<br /><br />',$erreur;
?>
<!DOCTYPE html>
<html>
<head>

<?php
	require_once('/view/CDN.php');
 ?>
    <link rel="stylesheet" type="text/css" href="view/css/homestylesheet.css">
	<title>SPEAKEASY</title>
</head>
<body>


	 <!-- CONTENT -->

<div class="container-fluid">
	<div class="containerColor ct">
		<div class="row">
			<div class=" logo col-lg-4 col-md-6 col-xs-12">
				
				<h1 class="titre" ><font color="#b4cc83" >SPEAK</font><font color="#154854">EASY</font></h1><br />
				<h4>Votre messagerie visuelle intelligente</h4>
			</div>
			<div class="devices col-lg-8 col-md-6 col-xs-12">
				<img src="view/img/devices-access.png">
			</div>
		</div>
	</div>


	<div class="containerWhite ConT">
		<div class="row">
			<div class="demo col-lg-6 col-md-6 col-xs-12">
				<a href=""><video alt="demo video Speakeasy" width="740" autoplay muted loop playsinline><source src="view/img/demo.mp4" type="video/mp4" /></video></a>
			</div>
			<div class="marque col-lg-6 col-md-6 col-xs-12">
				<p>Speakeasy est une messagerie visuelle innovante qui retranscrit les messages oraux en écrit afin de garder un historique des conversations.<br /><br />Sous un format d’application web, Speakeasy permet aux utilisateurs d’avoir des échanges vocaux avec une interaction vidéo instantannée.<br /><br />Les conversations sont archivées pour que chaque utilisateurs puissent garder un historique.</p>
			</div>
		</div>
	</div>


	<div class="containerColor bloc">
		<div class="row">
			<div class=" col-lg-3 col-md-2 col-xs-2">
				
			</div>
			<div class="box col-lg-6 col-md-8 col-xs-8">
				<h2>CONNECTEZ-VOUS</h2>
				<form class="formulaire " action="index.php" method="POST">
					<input onfocus="currentForm = this.form;" id="inputConnexion" type="text" placeholder=" Saisissez votre email ou votre pseudo" class="inputEmail champ" name="Email"  value="<?php if (isset($_POST['Email'])) echo htmlentities(trim($_POST['Email']));?>"/> <BR><BR>

					<input  onfocus="currentForm = this.form;" id="inputConnexion" type="password" placeholder=" Saisissez votre mot de passe" class="inputPass champ" name="Mdp" value="<?php if (isset($_POST['Mdp'])) echo htmlentities(trim($_POST['Mdp']));?>"/> <BR><BR>

					<input id="btnConnexion" type="submit" name="connexion" value="Connexion"/><br><br>

					<div class="formLien">
						<a id="aMDPoublie" href="view/mdpOublie.php" style="color:#b4cc83;text-decoration: none;"><u>Mot de passe oublié </u></a><br />
						<a id="aSinscrire" href="view/inscription.php" style="color:#b4cc83;text-decoration: none; float: center;"><u>S'inscrire </u></a>
					</div>
					<!-- <div class="formLien800maxWidth">
						<a id="aMDPoublie" href="#" style="color:#b4cc83;text-decoration: none;"><u>Mot de passe oublié </u></a>
						<a id="aSinscrire" href="#" style="color:#b4cc83;text-decoration: none;"><u>S'inscrire </u></a>
					</div> -->
				</form>
			</div>
			<div class=" col-lg-3  col-md-2 col-xs-2">
				
			</div>
		</div>
	</div>


	<div class="containerWhite box2">
		<div class="row">
			<div class="col-lg-12">
				<h2>DISCUTEZ<br />ET BIEN PLUS ENCORE</h2>
			</div>
		</div>
		<div class="row">
			<div class=" col-lg-4 col-md-4 col-xs-12">
				<div class="video">
					<img src="view/img/icon_3.png">
					<div id="explain">
						<h3>VIDEO</h3>
						<br />
						<p>Discutez en vidéo pour plus d'interaction sans vous préoccuper des historiques de conversations</p>
					</div>
				</div>
			</div>
			<div class=" col-lg-4 col-md-4 col-xs-12">
				
				<div class="chat">
					<img src="view/img/icon_2.png">
					<div id="explain">
						<h3>CHAT</h3>
						<br />
						<p>Ajoutez des contacts et construisez votre communauté</p>
					</div>
				</div>
			</div>
			<div class=" col-lg-4 col-md-4 col-xs-12">
				<div class="tag">
					<img src="view/img/icon_1.png">
					<div id="explain">
						<h3>TAG</h3>
						<br />
						<p>Grâce au tag, archivez, classez, retrouvez et téléchargez l'historique de toutes vos conversations</p>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- FOOTER -->

	<div class="containerColor footer" style="height: 200px;">
		<p>SPEAKEASY   ||   Service de messagerie viduelle innovante</p>
		<!-- <div class="row">
			
			<div class=" social col-lg-2  col-md-3 col-sm-6 col-xs-12" style="margin: auto; padding-left:7%">
				<div style="font-size:3em; ">
					<a href="https://linkedin.com/" target="blank"><i class="fab fa-linkedin-in" style="color:white;"></i></a>
				</div>
			</div>
			<div class=" social col-lg-2  col-md-3 col-sm-6 col-xs-12" style="margin: auto; padding-left:7%">
				<div class="social" style="font-size:3em; ">
					<a href="https://facebook.com/" target="blank"><i class="fab fa-facebook-f" style="color:white;"></i></a>
				</div>
			</div>
			<div class=" col-lg-2 col-md-3 col-sm-6 col-xs-12" style="margin: auto; padding-left: 7%" >
				<div class="social" style="font-size: 3em; ">
					<a href="https://twitter.com/" target="blank"><i class="social fab fa-twitter" style="color:white;"></i></a>
				</div>
			</div>
			
		</div> -->
	</div>
</div>

<!-- SCRIPT -->




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script type="text/javascript" src="javascript.js"></script>

</body>
</html>
