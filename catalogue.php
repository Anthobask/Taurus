<?php
// Initialisation de l'environnement
require('./librairie/configs/config_init.php');




/*
var_dump(SLIM_DIR.'/Slim.php');
$test = new Slim();
/*
$app->get('/hello/:name',
         function ($name) {echo "Hello, $name!";});
$app->run();         */

$smarty->display('catalogue.tpl');

?>