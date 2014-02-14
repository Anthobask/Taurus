<?php

require('../../librairie/configs/config_init.php');
//Verifier les sessions et idProduit (is_numeric)(

if (isset($_SESSION['idUser']) && $_SESSION['idUser'] > 0) {
    if (isset($_POST['idProduit']) && $_POST['idProduit'] > 0 && isset($_POST['quantite']) && $_POST['quantite'] > 0) {
        $panierexiste = false;
        $lesPaniers = PaniersQuery::create()->findByIduser($_SESSION['idUser']);
        $unPanier = new Paniers();
        foreach ($lesPaniers as $unPanier) {
            if ($unPanier->getIdproduit() == $_POST['idProduit']) {
                $panierexiste = true;
                $unPanier->setQuantite($unPanier->getQuantite());
                $unPanier->save();
                break;
            }
        }
        if (!$panierexiste) {
            $panier = new Paniers();
            $panier->setIduser($_SESSION['idUser']);
            $panier->setIdproduit($_POST['idProduit']);
            $panier->setQuantite($_POST['quantite']);
            $panier->save();
        }
        //On recupère les données : Nombre de produit, total des prix.
        $sommeNbArticle = 0;
        $sommePrixArticle = 0;
        $lesPaniers = PaniersQuery::create()->findByIduser($_SESSION['idUser']);
        $unPanier = new Paniers();
        foreach ($lesPaniers as $unPanier) {
            $idCategorie = $unPanier->getIdproduit();
            $sommeNbArticle += $unPanier->getQuantite();
            //on récupère le prix de l'article
            $leProduit = ProduitsQuery::create()->findOneById($unPanier->getIdproduit());
            $sommePrixArticle += $leProduit->getPrix()*$unPanier->getQuantite();
        }
        echo $sommeNbArticle.';'.$sommePrixArticle.';'.$_POST['quantite'];
    } else {
        echo'error;Erreur sur le produit';
    }
} else {
    echo'error;L\'utilisateur n\'est pas connecté';
}    
 