<?php /* Smarty version Smarty-3.1.15, created on 2014-02-10 19:44:38
         compiled from "C:\wamp\www\Taurus\vues\templates\catalogue.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1012652d855fd130b84-16975996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddc373ad4dde39146692cbbd870d540db51cca8c' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\catalogue.tpl',
      1 => 1392061459,
      2 => 'file',
    ),
    '8ff10dd6f6dbb59b0257ffb5a51a4f6ef924c70a' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\layout.tpl',
      1 => 1392056473,
      2 => 'file',
    ),
    'f45d705b2c6976f2ce39de191ea789d8258a19de' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\cadreIdOk.tpl',
      1 => 1392056473,
      2 => 'file',
    ),
    'f7f7655a669507ce7c5292385cbeb41254765069' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\cadreId.tpl',
      1 => 1392056473,
      2 => 'file',
    ),
    '4af2a74ea3540d360f621396af443215bf742d48' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\header.tpl',
      1 => 1392056473,
      2 => 'file',
    ),
    '655d9c97304b0300db0c114eb718618269745249' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\menu.tpl',
      1 => 1392056473,
      2 => 'file',
    ),
    '07fd54c84a4dde92623a7d24be312c9e0f36d2c7' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\footer.tpl',
      1 => 1392056473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1012652d855fd130b84-16975996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52d855fd1754a3_43102847',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d855fd1754a3_43102847')) {function content_52d855fd1754a3_43102847($_smarty_tpl) {?><html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1012652d855fd130b84-16975996');
content_52f92c266ba213_65987089($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
        </div>

        <!-- ici, on met le menu -->
        <div id="menu">
        <?php /*  Call merged included template "menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1012652d855fd130b84-16975996');
content_52f92c266f4068_83251731($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "menu.tpl" */?>
        </div>

        <!-- ici, on met le menu -->
        <div id="corps">
        
<h4>Catégorie de produit</h4>
<fieldset>
    <legend>Filtres</legend>
    <p>Filtre de recherche sur le prix, les notes, etc...</>
</fieldset>


        </div>
        <!-- ici, on met le footer -->
        <div id="footer">
        <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1012652d855fd130b84-16975996');
content_52f92c26708171_99987839($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>
        </div>


        


    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-02-10 19:44:38
         compiled from "C:\wamp\www\Taurus\vues\templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52f92c266ba213_65987089')) {function content_52f92c266ba213_65987089($_smarty_tpl) {?><div class="row-fluid" >
    <div class="logo span4 offset1 ">
        <h1>TAURUS INC.</h1>
        <h2>To Infinity and Beyond</h2>
    </div>
    <div class="zone_id span7 ">
        <!-- Zone d'identification -->
        <?php if (isset($_smarty_tpl->tpl_vars['userConnected']->value)&&$_smarty_tpl->tpl_vars['userConnected']->value=='true') {?>
            <?php /*  Call merged included template "cadreIdOk.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("cadreIdOk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1012652d855fd130b84-16975996');
content_52f92c266cb1e6_74333714($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cadreIdOk.tpl" */?>
        <?php } else { ?>
            <?php /*  Call merged included template "cadreId.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("cadreId.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1012652d855fd130b84-16975996');
content_52f92c266dfdf6_24368317($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cadreId.tpl" */?>
        <?php }?>
        
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-02-10 19:44:38
         compiled from "C:\wamp\www\Taurus\vues\templates\cadreIdOk.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52f92c266cb1e6_74333714')) {function content_52f92c266cb1e6_74333714($_smarty_tpl) {?><fieldset>
    <legend class="row1">Mon Compte</legend>
    <div span="row-fluid">
        <b class="span12">Bienvenue <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['nomUser']->value, 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['prenomUser']->value;?>
</b>
        <a class="span8" href="#">Voir mon profil</a>
        <a class="span10" href="#">Voir mon panier <br />(XX article(s), XXX €)</a>
        <a class="span6 offset6 smallFont" href="index.php?p=deconnexion">Se déconnecter</a>
        </div>
</fieldset><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-02-10 19:44:38
         compiled from "C:\wamp\www\Taurus\vues\templates\cadreId.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52f92c266dfdf6_24368317')) {function content_52f92c266dfdf6_24368317($_smarty_tpl) {?><fieldset>
    <legend class="row1">Identification</legend>
    <form method="POST" action="index.php?p=identification">
        <?php if (isset($_smarty_tpl->tpl_vars['cadreId']->value)) {?>
            <p style="color:red"><?php echo $_smarty_tpl->tpl_vars['cadreId']->value;?>
</p>
        <?php }?>
        <input class="row1" type="text" name="login" value="Login" onclick="this.value = ''"/>
        <input class="row1" type="password" name="password" />
        <div class="row1 offset3"><input type="submit" name="validerIdentification" value="Valider" />
            <a class="bt" href="index.php?p=inscription">S'inscrire</a>
        </div>
    </form>
</fieldset><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-02-10 19:44:38
         compiled from "C:\wamp\www\Taurus\vues\templates\menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52f92c266f4068_83251731')) {function content_52f92c266f4068_83251731($_smarty_tpl) {?><ul id="nav">
  <li><a href="index.php?p=index" title="Accueil">Accueil</a></li>
  <li><a href="index.php?p=catalogue" title="Catalogue">Catalogue</a></li>
  <li><a href="index.php?p=contact" title="Contact">Contactez-nous</a></li>
</ul><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-02-10 19:44:38
         compiled from "C:\wamp\www\Taurus\vues\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52f92c26708171_99987839')) {function content_52f92c26708171_99987839($_smarty_tpl) {?><p>Information sur l'entreprise, lien vers les Conditions d'utilisaton, etc...</p><?php }} ?>
