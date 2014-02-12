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

//Divers fonctions :
function imagethumb( $image_src , $image_dest = NULL , $max_size = 100, $expand = FALSE, $square = FALSE )
{
	if( !file_exists($image_src) ) return FALSE;

	// Récupère les infos de l'image
	$fileinfo = getimagesize($image_src);
	if( !$fileinfo ) return FALSE;

	$width     = $fileinfo[0];
	$height    = $fileinfo[1];
	$type_mime = $fileinfo['mime'];
	$type      = str_replace('image/', '', $type_mime);

	if( !$expand && max($width, $height)<=$max_size && (!$square || ($square && $width==$height) ) )
	{
		// L'image est plus petite que max_size
		if($image_dest)
		{
			return copy($image_src, $image_dest);
		}
		else
		{
			header('Content-Type: '. $type_mime);
			return (boolean) readfile($image_src);
		}
	}

	// Calcule les nouvelles dimensions
	$ratio = $width / $height;

	if( $square )
	{
		$new_width = $new_height = $max_size;

		if( $ratio > 1 )
		{
			// Paysage
			$src_y = 0;
			$src_x = round( ($width - $height) / 2 );

			$src_w = $src_h = $height;
		}
		else
		{
			// Portrait
			$src_x = 0;
			$src_y = round( ($height - $width) / 2 );

			$src_w = $src_h = $width;
		}
	}
	else
	{
		$src_x = $src_y = 0;
		$src_w = $width;
		$src_h = $height;

		if ( $ratio > 1 )
		{
			// Paysage
			$new_width  = $max_size;
			$new_height = round( $max_size / $ratio );
		}
		else
		{
			// Portrait
			$new_height = $max_size;
			$new_width  = round( $max_size * $ratio );
		}
	}

	// Ouvre l'image originale
	$func = 'imagecreatefrom' . $type;
	if( !function_exists($func) ) return FALSE;

	$image_src = $func($image_src);
	$new_image = imagecreatetruecolor($new_width,$new_height);

	// Gestion de la transparence pour les png
	if( $type=='png' )
	{
		imagealphablending($new_image,false);
		if( function_exists('imagesavealpha') )
			imagesavealpha($new_image,true);
	}

	// Gestion de la transparence pour les gif
	elseif( $type=='gif' && imagecolortransparent($image_src)>=0 )
	{
		$transparent_index = imagecolortransparent($image_src);
		$transparent_color = imagecolorsforindex($image_src, $transparent_index);
		$transparent_index = imagecolorallocate($new_image, $transparent_color['red'], $transparent_color['green'], $transparent_color['blue']);
		imagefill($new_image, 0, 0, $transparent_index);
		imagecolortransparent($new_image, $transparent_index);
	}

	// Redimensionnement de l'image
	imagecopyresampled(
		$new_image, $image_src,
		0, 0, $src_x, $src_y,
		$new_width, $new_height, $src_w, $src_h
	);

	// Enregistrement de l'image
	$func = 'image'. $type;
	if($image_dest)
	{
		$func($new_image, $image_dest);
	}
	else
	{
		header('Content-Type: '. $type_mime);
		$func($new_image);
	}

	// Libération de la mémoire
	imagedestroy($new_image); 

	return TRUE;
}

?>