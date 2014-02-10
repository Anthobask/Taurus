<?php

/*
var_dump(SLIM_DIR.'/Slim.php');
$test = new Slim();
/*
$app->get('/hello/:name',
         function ($name) {echo "Hello, $name!";});
$app->run();         */

$smarty->display('catalogue.tpl');

for($i = 0; $i< 7; $i++) $smarty->display('catalogue_produit.tpl');

?>