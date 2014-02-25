<?php
// On dertermine toutes les variables à afficher pour la page du client.
// on genere les informations client
if (isset($_SESSION['idUser']) && $_SESSION['idUser'] > 0) {
	$leUser = UsersQuery::create()->findOneById($_SESSION['idUser']);

	// Si formulaire validé :
	if(isset($_POST['bt_modifProfil']))
	{
		// login : On n'y touche pas

		// si le nom est modifié:
		if(isset($_POST['nom']) && $_POST['nom'] != $leUser->getNom())
		{
			$leUser->setNom($_POST['nom']);			
			$_SESSION['messageList']['nomUser'] = $_POST['nom']; // todo : corriger les failles
		}

		// si le prenom est modifié:
		if(isset($_POST['prenom']) && $_POST['prenom'] != $leUser->getPrenom())
		{
			$leUser->setPrenom($_POST['prenom']);
			$_SESSION['messageList']['prenomUser'] = $_POST['prenom']; // todo : corriger les failles
		}

		// si le email est modifié:
		if(isset($_POST['email']) && $_POST['email'] != $leUser->getEmail())
		{
			$leUser->setEmail($_POST['email']);
		}

		$leUser->save();
		Controlleur::getInstance()->initSmarty($smarty);
	}


	
	$infoClient = array(
			'id' => $leUser->getId(),
			'nom' => $leUser->getNom(),			
			'prenom' => $leUser->getPrenom(),			
			'login' => $leUser->getLogin(),
			'email' => $leUser->getEmail(),
		);
	$smarty->assign('infoClient', $infoClient);
}


$smarty->display('client-profil.tpl');