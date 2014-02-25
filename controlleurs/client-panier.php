<?php

// Affichage du panier 
$produits = array();
if (isset($_SESSION['idUser']) && $_SESSION['idUser'] > 0) {
    $lesPaniers = PaniersQuery::create()->findByIduser($_SESSION['idUser']);
    //On recupère les données : Nombre de produit, total des prix.
    $sommePrixArticle = 0;
    foreach ($lesPaniers as $unPanier) {
        //on récupère le prix de l'article
        $unProduit = ProduitsQuery::create()->findOneById($unPanier->getIdproduit());

        //modification des données, si le formulaire est validé
        //on cherche les variables POST qui commencent par "qte_"+idProduit
        if(isset($_POST['qte_'.$unProduit->getId()]) && $_POST['qte_'.$unProduit->getId()]>= 0)
        {
            // en modifiant le panier, on change les variables de smarty : sommePrixArticle & sommeNbArticle
            $differenceNb = $_POST['qte_'.$unProduit->getId()] - $unPanier->getQuantite();
            $differencePrix = $differenceNb * $unProduit->getPrix();
            $_SESSION['messageList']['sommePrixArticle'] += $differencePrix;
            $_SESSION['messageList']['sommeNbArticle'] += $differenceNb;
            //Comme le controlleur est déjà exécuter, on modifie "a la main" les variables de smarty
            Controlleur::getInstance()->initSmarty($smarty);
            // modification de la base de données :
            $unPanier->setQuantite($_POST['qte_'.$unProduit->getId()]);
            $unPanier->save();
        }

        if($unPanier->getQuantite() > 0)
        {
            $produits[] = array(
                'id' => $unProduit->getId(), 
                'nom' => $unProduit->getNom(),
                'prix' => $unProduit->getPrix(), 
                'description' => $unProduit->getDescription(), 
                'quantite' => $unPanier->getQuantite()
            );
        }

    }
}
if(count($produits) >0 )
{
    $smarty->assign("lesProduits", $produits);
}
$smarty->display('client-panier.tpl');