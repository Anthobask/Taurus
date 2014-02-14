<?php

// Initialisation de l'environnement
require('./librairie/configs/config_init.php');

if (isset($_GET['p'])) {
    // todo : controle de sécurité
    if (Controlleur::getInstance()->getPage($_GET['p']) == null)
        $_GET['p'] = 'index';

    include Controlleur::getInstance()->getPage($_GET['p']);
}
else {
    $smarty->display('index.tpl');
}
?>