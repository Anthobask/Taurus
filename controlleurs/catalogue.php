<?php

/*
var_dump(SLIM_DIR.'/Slim.php');
$test = new Slim();
/*
$app->get('/hello/:name',
         function ($name) {echo "Hello, $name!";});
$app->run();         */

/****** Ici, on construit les variables que Smarty affichera *****/

//Recupération de toute les produits
$lesProduits = ProduitsQuery::create()->find();

//todo : gestion des filtres
//$lesProduits = $lesProduits->filterByNom();
$produits = array();
$unProduit = new Produits();
foreach($lesProduits as $unProduit)
{
    $produits[] = array('nom' => $unProduit->getNom(), 
                       'prix' => $unProduit->getPrix(), 
                        'description' => $unProduit->getDescription(), 
                        'documentation' => $unProduit->getDocumenation(),
                         'idCateg' => $unProduit->getIdcateg(),
                         'image' => 'vues/img/thumbs/'.$unProduit->getImg());
    // gestion de la miniature
    if(!file_exists( PATH . '/vues/img/thumbs/'.$unProduit->getImg()))
    {
    }
    
    
    
}


$smarty->assign("lesProduits", $produits);

$smarty->display('catalogue.tpl');

?>