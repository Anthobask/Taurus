<?php

// Initialisation de l'environnement
require('./librairie/configs/config_init.php');


//recupère l'URL d'avant
if(isset($_SERVER['HTTP_REFERER']))
    $url_origine = $_SERVER['HTTP_REFERER'];
else
    $url_origine = null;
//gestion de l'identification
if (isset($_POST['validerIdentification'])) {

    if (isset($_POST['login']) && isset($_POST['password'])) {
        $con = Propel::getConnection(UsersPeer::DATABASE_NAME);

        $userCurrent = null;
        $userCheck = UsersQuery::create()->findByLogin($_POST['login']);
        foreach ($userCheck as $unUser) {
            if ($unUser->getPassword() == md5($_POST['password'])) {
                $userCurrent = $unUser;
            }
            break; // car on veut le premier 
            //todo : trouver une solution plus propre
        }
        
        if(empty($userCurrent))
        {
            Controlleur::getInstance()->setShowMessage('cadreId', 'Les identifiants sont érronés.');
        }
        else
        {
            Controlleur::getInstance()->authentifierUser($userCurrent);     
        }
    } else {
        Controlleur::getInstance()->showMessage('cadreId', 'Merci de remplir tous les champs');
    }
}
//header('Location:'.$url_origine);
$smarty->display('identification.tpl');
?>