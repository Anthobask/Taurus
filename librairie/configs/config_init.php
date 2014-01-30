<?php 
// Initialisation de la session
session_start();
//header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require('defines.inc.php');
require(SMARTY_DIR.'Smarty.class.php');

// Initialisation Smarty
$smarty = new Smarty();
$smarty->template_dir = TEMPLATE_DIR;
$smarty->compile_dir = COMPILE_DIR;
$smarty->config_dir = CONFIG_DIR;
$smarty->cache_dir = CACHE_DIR;

//Propel 
require PATH_PROPEL.'Propel.php';
Propel::init(PATH."build/conf/taurus-conf.php");
// Add the generated 'classes' directory to the include path
set_include_path(PATH."build/classes" . PATH_SEPARATOR . get_include_path());

// Le controller (singleton)
require PATH.'controlleurs/Controlleur.php';
//Definition des variables Smarty à afficher
Controlleur::getInstance()->initSmarty($smarty);

// Slim pour RESTful
require SLIM_DIR . 'Slim.php';


