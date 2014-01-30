<?php

// Initialisation de l'environnement
require('./librairie/configs/config_init.php');

$smarty->assign('displayForm', '1');
$message = '';
$erreurFields = 0;
if (isset($_POST['bt_inscription'])) {

    $checkUser = new UsersQuery();
    // on verifie que chacun des inputs sont bien remplis, ainsi que leurs autres verification
    if (!isset($_POST['nom'])) {
        $message .= 'Le champ du <b>nom</b> est vide.<br />';
        $erreurFields++;
    }
    if (!isset($_POST['prenom'])) {
        $message .= 'Le champ du <b>prenom</b> est vide.<br />';
        $erreurFields++;
    }
    if (!isset($_POST['login'])) {
        $message .= 'Le champ du <b>login</b> est vide.<br />';
        $erreurFields++;
    } else if (count($checkUser->findByLogin($_POST['login'])) > 0) {
        $message .= 'Le <b>login</b> choisi est déjà utilisé.<br />';
        $erreurFields++;
    }
    if (!isset($_POST['pass1'])) {
        $message .= 'Le champ du <b>mot de passe</b> est vide.<br />';
        $erreurFields++;
    } else if ($_POST['pass1'] != $_POST['pass2']) {
        $message .= 'Les champs des <b>mots de passe</b> ne sont pas identiques.<br />';
        $erreurFields++;
    }
    if (!isset($_POST['mail1'])) {
        $message .= 'Le champ de l\'<b>email</b> est vide.<br />';
    } else if ($_POST['mail1'] != $_POST['mail2']) {
        $message .= 'Les champs des <b>adresses e-mail</b> ne sont pas identiques.<br />';
        $erreurFields++;
    } else if (!preg_match('/^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$/', $_POST['mail1'])) {
        $message .= 'Le format de l\'<b>adresse email</b> est invalide.<br />';
        $erreurFields++;
    } else if (count($checkUser->findByEmail($_POST['mail1']))) {
        $message .= 'L\'<b>adresse email</b>xcgf C est déjà utilisé.<br />';
        $erreurFields++;
    }
    /*     * *** */
    if ($erreurFields == 0) {

        // todo : ajouter les verifications de failles.
        $user = new Users();
        $user->setNom($_POST['nom']);
        $user->setPrenom($_POST['prenom']);
        $user->setLogin($_POST['login']);
        $user->setPassword(md5($_POST['pass1']));
        $user->setEmail($_POST['mail1']);
        if ($user->save() > 0) {
            $message = 'L\'inscription à bien été effectué';
        } else {
            $message = 'Erreur lors de l\'inscription';
        }

        $smarty->assign('displayForm', '0');
    }
}
$smarty->assign('messageTop', $message);
$smarty->display('inscription.tpl');
?>