<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:22:36
         compiled from "C:\wamp\www\\Taurus\vues\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2941752ea51c1532394-84141318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '580e7367d55c0fe798434c2e27a2db7bc2cbf8c4' => 
    array (
      0 => 'C:\\wamp\\www\\\\Taurus\\vues\\templates\\index.tpl',
      1 => 1391002398,
      2 => 'file',
    ),
    'f63fe5c1c6a62b70697221b8c9a0fffcde496784' => 
    array (
      0 => 'C:\\wamp\\www\\\\Taurus\\vues\\templates\\layout.tpl',
      1 => 1391002351,
      2 => 'file',
    ),
    'da0ca08876d18b463bc0c19975edf306512d831e' => 
    array (
      0 => 'C:\\wamp\\www\\\\Taurus\\vues\\templates\\cadreId.tpl',
      1 => 1391088153,
      2 => 'file',
    ),
    '81e41d0be0c995918d2fe73e103fce885195b6f2' => 
    array (
      0 => 'C:\\wamp\\www\\\\Taurus\\vues\\templates\\header.tpl',
      1 => 1390228133,
      2 => 'file',
    ),
    'b23d91af838862d3d98eee2792cbd6bf910f89cb' => 
    array (
      0 => 'C:\\wamp\\www\\\\Taurus\\vues\\templates\\menu.tpl',
      1 => 1390232851,
      2 => 'file',
    ),
    'fc695454bc602a00746b83216c89c631dff93b4b' => 
    array (
      0 => 'C:\\wamp\\www\\\\Taurus\\vues\\templates\\footer.tpl',
      1 => 1390207684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2941752ea51c1532394-84141318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ea51c16309f7_10603509',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea51c16309f7_10603509')) {function content_52ea51c16309f7_10603509($_smarty_tpl) {?><html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2941752ea51c1532394-84141318');
content_52ea521c890390_59208493($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
        </div>

        <!-- ici, on met le menu -->
        <div id="menu">
        <?php /*  Call merged included template "menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2941752ea51c1532394-84141318');
content_52ea521c8de156_68715347($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2941752ea51c1532394-84141318');
content_52ea521c91f5b8_59834818($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>
        </div>


        


    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:22:36
         compiled from "C:\wamp\www\\Taurus\vues\templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52ea521c890390_59208493')) {function content_52ea521c890390_59208493($_smarty_tpl) {?><div class="row-fluid" >
    <div class="logo span4 offset1 ">
        <h1>TAURUS INC.</h1>
        <h2>To Infinity and Beyond</h2>
    </div>
    <div class="zone_id span7 ">
        <!-- Zone d'identification -->
        <?php /*  Call merged included template "cadreId.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("cadreId.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2941752ea51c1532394-84141318');
content_52ea521c8a14c0_05100964($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cadreId.tpl" */?>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:22:36
         compiled from "C:\wamp\www\\Taurus\vues\templates\cadreId.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52ea521c8a14c0_05100964')) {function content_52ea521c8a14c0_05100964($_smarty_tpl) {?><fieldset>
    <?php if (isset($_smarty_tpl->tpl_vars['cadreId']->value)) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['cadreId']->value;?>
</p>
    <?php }?>
    <legend class="row1">Identification</legend>
    <form method="POST" action="identification.php">
        <input class="row1" type="text" name="login" value="Login" onclick="this.value=''"/>
        <input class="row1" type="password" name="password" />
        <div class="row1 offset3"><input type="submit" name="validerIdentification" value="Valider" />
            <a href="./inscription.php">S'inscrire</a></div>
    </form>
</fieldset><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:22:36
         compiled from "C:\wamp\www\\Taurus\vues\templates\menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52ea521c8de156_68715347')) {function content_52ea521c8de156_68715347($_smarty_tpl) {?><ul id="nav">
  <li><a href="index.php" title="Accueil">Accueil</a></li>
  <li><a href="catalogue.php" title="Catalogue">Catalogue</a></li>
  <li><a href="contact.php" title="Contact">Contactez-nous</a></li>
</ul><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:22:36
         compiled from "C:\wamp\www\\Taurus\vues\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52ea521c91f5b8_59834818')) {function content_52ea521c91f5b8_59834818($_smarty_tpl) {?><p>Information sur l'entreprise, lien vers les Conditions d'utilisaton, etc...</p><?php }} ?>
