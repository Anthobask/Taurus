<?php
//recupère l'URL d'avant
if (isset($_SERVER['HTTP_REFERER']))
    $url_origine = $_SERVER['HTTP_REFERER'];
else
    $url_origine = PATH;

// supprime les cookies et les sessions liées à la connexion.
setcookie('idUser');
$_SESSION['idUser'] = null;
Controlleur::getInstance()->setUserCurrent(null);
Controlleur::getInstance()->setShowMessage('userConnected', 'false');

header('Location:' . $url_origine);
?>