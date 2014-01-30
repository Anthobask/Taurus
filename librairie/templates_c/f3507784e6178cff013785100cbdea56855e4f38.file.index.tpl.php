<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 13:57:16
         compiled from "C:\wamp\www\Taurus\vues\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1791552d7bdb95d2da4-70338025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3507784e6178cff013785100cbdea56855e4f38' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\index.tpl',
      1 => 1391002398,
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
  'nocache_hash' => '1791552d7bdb95d2da4-70338025',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52d7bdb96cd8b7_49921605',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7bdb96cd8b7_49921605')) {function content_52d7bdb96cd8b7_49921605($_smarty_tpl) {?><html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1791552d7bdb95d2da4-70338025');
content_52e908bc96f192_75361440($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
        </div>

        <!-- ici, on met le menu -->
        <div id="menu">
        <?php /*  Call merged included template "menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1791552d7bdb95d2da4-70338025');
content_52e908bc98d5b8_06027665($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "menu.tpl" */?>
        </div>

        <!-- ici, on met le menu -->
        <div id="corps">
        
    
    <div class="cadre_promo row-fluid">
        <h3 class="row1">Publicité très visuel sur plusieurs produits en promotion !</h3>
        <div class="row1">
            <span class="souscadre_promo1 span2"></span>
            <span class="souscadre_promo2 span6"></span>
            <span class="souscadre_promo3 span4"></span>
        </div>
    </div>    
    
    <div class="row-fluid">
        <div class="cadre_garentie span6">
            <p>Texte d'éloge sur Taurus Inc. incitant l'utilisateur à faire confiance au site...</p>        
        </div>

        <div class="cadre_service span6">
            <p>Texte d'éloge sur Taurus Inc. incitant l'utilisateur à faire confiance au site...</p>        
        </div>
    </div>
	

        </div>
        <!-- ici, on met le footer -->
        <div id="footer">
        <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1791552d7bdb95d2da4-70338025');
content_52e908bc9ccee6_69604934($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>
        </div>


        


    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 13:57:16
         compiled from "C:\wamp\www\Taurus\vues\templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e908bc96f192_75361440')) {function content_52e908bc96f192_75361440($_smarty_tpl) {?><div class="row-fluid" >
    <div class="logo span4 offset1 ">
        <h1>TAURUS INC.</h1>
        <h2>To Infinity and Beyond</h2>
    </div>
    <div class="zone_id span7 ">
        <!-- Zone d'identification -->
        <?php /*  Call merged included template "cadreId.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("cadreId.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1791552d7bdb95d2da4-70338025');
content_52e908bc97a800_06176611($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cadreId.tpl" */?>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 13:57:16
         compiled from "C:\wamp\www\Taurus\vues\templates\cadreId.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e908bc97a800_06176611')) {function content_52e908bc97a800_06176611($_smarty_tpl) {?><fieldset>
    <legend class="row1">Identification</legend>
    <form method="POST" action="identification.php">
        <input class="row1" type="text" name="login" value="Login" onclick="this.value=''"/>
        <input class="row1" type="password" name="password" />
        <div class="row1 offset3"><input type="submit" name="validerIdentification" value="Valider" />
            <a href="./inscription.php">S'inscrire</a></div>
    </form>
</fieldset><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 13:57:16
         compiled from "C:\wamp\www\Taurus\vues\templates\menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e908bc98d5b8_06027665')) {function content_52e908bc98d5b8_06027665($_smarty_tpl) {?><ul id="nav">
  <li><a href="index.php" title="Accueil">Accueil</a></li>
  <li><a href="catalogue.php" title="Catalogue">Catalogue</a></li>
  <li><a href="contact.php" title="Contact">Contactez-nous</a></li>
</ul><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 13:57:16
         compiled from "C:\wamp\www\Taurus\vues\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e908bc9ccee6_69604934')) {function content_52e908bc9ccee6_69604934($_smarty_tpl) {?><p>Information sur l'entreprise, lien vers les Conditions d'utilisaton, etc...</p><?php }} ?>
