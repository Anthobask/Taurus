<?php
// Si on a pas ces infos, rien ne peut fonctionner : die
if (!isset($_SERVER['DOCUMENT_ROOT']))
    die();

// Define de la racine du site
define('NAME_SITE', '/Taurus/');
define('PATH', $_SERVER['DOCUMENT_ROOT'].NAME_SITE);

// Define du dossier de Smarty
define('SMARTY_DIR', PATH . 'librairie/Smarty/');
define('TEMPLATE_DIR', PATH . 'vues/templates/');
define('COMPILE_DIR', PATH . 'librairie/templates_c/');
define('CONFIG_DIR', PATH . 'librairie/configs/');
define('CACHE_DIR', PATH . 'librairie/cache/');
define('SLIM_DIR', PATH . 'librairie/Slim/');

// Prof : A modifier selon votre PC, le but est d'atteindre le fichier Propel.class
define ('PATH_PROPEL', 'C:/php/propel/runtime/lib/');

?>