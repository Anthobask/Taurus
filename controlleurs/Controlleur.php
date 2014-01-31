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
        
        //Si la session n'existe pas, mais que le cookei existe, on créer la session.
        if(empty($_SESSION['idUser']) && !empty($_COOKIE['idUser']))
        {
            // ENORME FAILLE - todo : à corriger.
            //recuperation de l'user
            $userCheck = new UsersPeer();
            $userCurrent = $userCheck->retrieveByPK($_COOKIE['idUser']); 
            $this->authentifierUser($userCurrent);
            $this->setUserCurrent($userCurrent);
            $this->setShowMessage('userConnected', 'true');
            $this->setShowMessage('nomUser', $userCurrent->getNom());
            $this->setShowMessage('prenomUser', $userCurrent->getPrenom());
        }
    }

    // A Faire : Faire la connexion automatique en vérifiant le cookie, OU la session  
    public function getUserCurrent() {
        return $this->user_current;
    }

    public function setUserCurrent($unUser) {
        $this->user_current = $unUser;
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
    

    public function setShowMessage($env, $message) {
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