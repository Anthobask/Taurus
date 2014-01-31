<?php
// Initialisation de l'environnement
require('./librairie/configs/config_init.php');

if(isset($_GET['p']))
{
    // todo : controle de sécurité
    require Controlleur::getInstance()->getPage($_GET['p']);
        
}
else
{
    $smarty->display('index.tpl');
}
?>