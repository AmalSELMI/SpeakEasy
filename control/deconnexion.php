
<?php
		session_start();
		if($_SESSION['user']){

			// Récupérer les informations de l'utilisateur dans sa session.
			require_once(__DIR__.'/view/userInSession.php');
			// Charger la classe d'interface avec la table des utilisateurs.
			require_once(__DIR__.'/dao/MembreDAO.class.php');
			$listeMembre = new MembreDAO();
			$listeMembre->modifierStatut($user->getID(), 'DECONNEXION');
	

			session_unset();
			session_destroy();
			header('Location: index.php');
			exit();
		}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body bgcolor="#333">
		<style>
		.row{

		}
		.titre{
			font-size: 100px;
			margin:auto;
			text-align: center;
		}
		</style>

	</body>
</html>
