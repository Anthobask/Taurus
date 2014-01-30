<?php

/**
 * Description of controlleur
 *
 * @author Anthony Poulain
 */
class Controlleur {

    static protected $wSingleton = null;
    public $user_current = null; //objet Users de l'utilisateur enregistré
    public $messagesListe = array();

    static public function getInstance() {
        if (!isset(self::$wSingleton)) {
            self::$wSingleton = new self;
        }
        return self::$wSingleton;
    }

    public function __construct() {
        // pour eviter les attaques par fixation de session
        if (!isset($_SESSION['initiated'])) {
            session_regenerate_id();
            $_SESSION['initiated'] = true;
        }
    }

    //Permet d'authentifier un utilisateur dans tout le site :
    public function authentifierUser($unUser) {
        $this->user_current = $unUser;
        // Construire le cookie 
        setCookie('idUser', $unUser->getId(), time() + 60 * 60 * 24 * 30); // expire dans un 30 jours
        // Construire la session 
        if (!isset($_SESSION['idUser'])) {
            $_SESSION['idUser'] = $unUser->getId();
        }
    }

    public function getUserCurrent() {
        return $this->user_current;
    }

    public function setShowMessage($env, $message) {
        if (isset($_SESSION['messageList'])) {
            $this->messagesListe = $_SESSION['messageList'];
        }
        $this->messagesListe[$env] = $message;
        // Puis on sauvegarde ce tableau dans les sessions :
        $_SESSION['messageList'] = $this->messagesListe[$env];
        //var_dump($_SESSION['messageList']);
    }

    public function getShowMessage($env) {
        if (isset($_SESSION['messageList'])) {
            $this->messagesListe = $_SESSION['messageList'];
        }
        return $this->messagesListe[$env];
    }

    public function initSmarty($smarty) {
        if (isset($_SESSION['messageList'])) {
            $this->messagesListe = $_SESSION['messageList'];
          //  var_dump($_SESSION['messageList']);
            foreach ($_SESSION['messageList'] as $key => $value) {
                //$smarty->assign($key, $data);
            }
        }
    }

}

?>