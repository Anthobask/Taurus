<?php

//recupère l'URL d'avant
if (isset($_SERVER['HTTP_REFERER']))
    $url_origine = $_SERVER['HTTP_REFERER'];
else
    $url_origine = PATH;
//gestion de l'identification
if (isset($_POST['validerIdentification'])) {

    if (isset($_POST['login']) && isset($_POST['password'])) {
        //$con = Propel::getConnection(UsersPeer::DATABASE_NAME);

        $userCurrent = null;
        $userCheck = UsersQuery::create()->findByLogin($_POST['login']);
        foreach ($userCheck as $unUser) {
            if ($unUser->getPassword() == md5($_POST['password'])) {
                $userCurrent = $unUser;
            }
            break; // car on veut le premier 
            //todo : trouver une solution plus propre
        }

        if (empty($userCurrent)) {
            Controlleur::getInstance()->setShowMessage('cadreId', 'Les identifiants sont érronés.');
        } else {
            Controlleur::getInstance()->setShowMessage('cadreId', '');
            // Construction du cookie 
            setCookie('idUser', $userCurrent->getId(), time() + 60 * 60 * 24 * 30); // expire dans un 30 jours
            // Construire la session 
            if (!isset($_SESSION['idUser'])) {
                $_SESSION['idUser'] = $userCurrent->getId();
            }
            Controlleur::getInstance()->setUserCurrent($userCurrent);
            Controlleur::getInstance()->setShowMessage('userConnected', 'true');
            Controlleur::getInstance()->setShowMessage('nomUser', $userCurrent->getNom());
            Controlleur::getInstance()->setShowMessage('prenomUser', $userCurrent->getPrenom());            
            Controlleur::getInstance()->setShowMessage('idUser', $userCurrent->getId());
        }
    } else {
        Controlleur::getInstance()->setShowMessage('cadreId', 'Merci de remplir tous les champs');
    }
}
header('Location:' . $url_origine);
?>