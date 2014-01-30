<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 13:36:32
         compiled from "C:\wamp\www\Taurus\vues\templates\identification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2314452e8dac57e09f7-86346196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '523bca61a7f61a1b87a75904cf657f483dd5596c' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\identification.tpl',
      1 => 1390998467,
      2 => 'file',
    ),
    '8ff10dd6f6dbb59b0257ffb5a51a4f6ef924c70a' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\layout.tpl',
      1 => 1391002351,
      2 => 'file',
    ),
    'f7f7655a669507ce7c5292385cbeb41254765069' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\cadreId.tpl',
      1 => 1391000076,
      2 => 'file',
    ),
    '4af2a74ea3540d360f621396af443215bf742d48' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\header.tpl',
      1 => 1390228133,
      2 => 'file',
    ),
    '655d9c97304b0300db0c114eb718618269745249' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\menu.tpl',
      1 => 1390232851,
      2 => 'file',
    ),
    '07fd54c84a4dde92623a7d24be312c9e0f36d2c7' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\footer.tpl',
      1 => 1390207684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2314452e8dac57e09f7-86346196',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52e8dac583bd96_13360987',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e8dac583bd96_13360987')) {function content_52e8dac583bd96_13360987($_smarty_tpl) {?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Taurus Incorporation (c)</title>
        <!--fichier css-->
        <link rel="stylesheet" type="text/css" href="vues/css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="vues/css/base.css">
        <!--fichier javascript-->
        <script type="text/javascript" src="vues/js/jquery.js"></script>
        <script type="text/javascript" src="vues/js/main.js"></script>        
    </head>
    <body>
        

        <!-- ici, on met le header -->
        <div id="header">
        <?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2314452e8dac57e09f7-86346196');
content_52e903e0d309d5_63649423($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
        </div>

        <!-- ici, on met le menu -->
        <div id="menu">
        <?php /*  Call merged included template "menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2314452e8dac57e09f7-86346196');
content_52e903e0d4d2e0_62503932($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "menu.tpl" */?>
        </div>

        <!-- ici, on met le menu -->
        <div id="corps">
        
    
 


        </div>
        <!-- ici, on met le footer -->
        <div id="footer">
        <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2314452e8dac57e09f7-86346196');
content_52e903e0d85937_31312398($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>
        </div>


        


    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 13:36:32
         compiled from "C:\wamp\www\Taurus\vues\templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e903e0d309d5_63649423')) {function content_52e903e0d309d5_63649423($_smarty_tpl) {?><div class="row-fluid" >
    <div class="logo span4 offset1 ">
        <h1>TAURUS INC.</h1>
        <h2>To Infinity and Beyond</h2>
    </div>
    <div class="zone_id span7 ">
        <!-- Zone d'identification -->
        <?php /*  Call merged included template "cadreId.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("cadreId.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2314452e8dac57e09f7-86346196');
content_52e903e0d3c310_52284101($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cadreId.tpl" */?>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 13:36:32
         compiled from "C:\wamp\www\Taurus\vues\templates\cadreId.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e903e0d3c310_52284101')) {function content_52e903e0d3c310_52284101($_smarty_tpl) {?><fieldset>
    <legend class="row1">Identification</legend>
    <form method="POST" action="identification.php">
        <input class="row1" type="text" name="login" value="Login" onclick="this.value=''"/>
        <input class="row1" type="password" name="password" />
        <div class="row1 offset3"><input type="submit" name="validerIdentification" value="Valider" />
            <a href="./inscription.php">S'inscrire</a></div>
    </form>
</fieldset><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 13:36:32
         compiled from "C:\wamp\www\Taurus\vues\templates\menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e903e0d4d2e0_62503932')) {function content_52e903e0d4d2e0_62503932($_smarty_tpl) {?><ul id="nav">
  <li><a href="index.php" title="Accueil">Accueil</a></li>
  <li><a href="catalogue.php" title="Catalogue">Catalogue</a></li>
  <li><a href="contact.php" title="Contact">Contactez-nous</a></li>
</ul><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 13:36:32
         compiled from "C:\wamp\www\Taurus\vues\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e903e0d85937_31312398')) {function content_52e903e0d85937_31312398($_smarty_tpl) {?><p>Information sur l'entreprise, lien vers les Conditions d'utilisaton, etc...</p><?php }} ?>
