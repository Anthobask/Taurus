<?php

//Recupération de toute les produits
$lesProduits = ProduitsQuery::create()->find();

//todo : gestion des filtres
//$lesProduits = $lesProduits->filterByNom();
$produits = array();
foreach($lesProduits as $unProduit)
{
    $produits[] = array('id' => $unProduit->getId(), 
                        'nom' => $unProduit->getNom(), 
                        'prix' => $unProduit->getPrix(), 
                        'description' => $unProduit->getDescription(), 
                        'documentation' => $unProduit->getDocumenation(),
                        'idCateg' => $unProduit->getIdcateg(),
                        'image' => 'vues/img/thumbs/'.$unProduit->getImg());
    // gestion de la miniature
    if(!file_exists( PATH . '/vues/img/thumbs/'.$unProduit->getImg()))
    {
        imagethumb( PATH . '/vues/img/'.$unProduit->getImg() , PATH . '/vues/img/thumbs/'.$unProduit->getImg() , 100);
    }
}

$smarty->assign("lesProduits", $produits);

$smarty->display('catalogue.tpl');

?>