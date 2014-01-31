<?php

class Controlleur {

    static protected $wSingleton = null;
    protected $user_current = null; //objet Users de l'utilisateur enregistré
    protected $messagesListe = array();

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
            // session_unregister('messageList');
        }
    }

    // A Faire : Faire la connexion automatique en vérifiant le cookie, OU la session  
    public function getUserCurrent() {
        return $this->user_current;
    }

    public function setUserCurrent($unUser) {
        $this->user_current = $unUser;
    }

    public function setShowMessage($env, $message) {
        var_dump($_SESSION['messageList']);
        if (isset($_SESSION['messageList'])) {
            $this->messagesListe = $_SESSION['messageList'];
        }
        $this->messagesListe[$env] = $message;
        $_SESSION['messageList'] = $this->messagesListe;
    }

    public function getShowMessage($env) {
        if (isset($_SESSION['messageList'])) {
            $this->messagesListe = $_SESSION['messageList'];
        }
        return $this->messagesListe[$env];
    }

    public function initSmarty($smarty) {
        if (!empty($_SESSION['messageList'])) {
            $this->messagesListe = $_SESSION['messageList'];
            foreach ($this->messagesListe as $key => $value) {
                $smarty->assign($key, $value);
            }
        }
    }
    public function getPage($unePage) {
        // on vérifie que la page existe :
        if (file_exists(PATH . 'controlleurs/' . $unePage . ".php")) {
            return PATH . 'controlleurs/' . $unePage . ".php";
        } else {
            return PATH;
        }
    }
}
?>