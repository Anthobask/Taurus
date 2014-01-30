<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:22:39
         compiled from "C:\wamp\www\\Taurus\vues\templates\identification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:709152ea125b94cc55-40702431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cffe8e10b1988f977b84020fae539a9fd75d0a34' => 
    array (
      0 => 'C:\\wamp\\www\\\\Taurus\\vues\\templates\\identification.tpl',
      1 => 1390998467,
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
  'nocache_hash' => '709152ea125b94cc55-40702431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ea125bab79e8_74875986',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea125bab79e8_74875986')) {function content_52ea125bab79e8_74875986($_smarty_tpl) {?><html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '709152ea125b94cc55-40702431');
content_52ea521f393d31_12042279($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
        </div>

        <!-- ici, on met le menu -->
        <div id="menu">
        <?php /*  Call merged included template "menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '709152ea125b94cc55-40702431');
content_52ea521f3d1882_44786274($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '709152ea125b94cc55-40702431');
content_52ea521f434e29_88045943($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>
        </div>


        


    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:22:39
         compiled from "C:\wamp\www\\Taurus\vues\templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52ea521f393d31_12042279')) {function content_52ea521f393d31_12042279($_smarty_tpl) {?><div class="row-fluid" >
    <div class="logo span4 offset1 ">
        <h1>TAURUS INC.</h1>
        <h2>To Infinity and Beyond</h2>
    </div>
    <div class="zone_id span7 ">
        <!-- Zone d'identification -->
        <?php /*  Call merged included template "cadreId.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("cadreId.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '709152ea125b94cc55-40702431');
content_52ea521f39ebc9_22273688($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cadreId.tpl" */?>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:22:39
         compiled from "C:\wamp\www\\Taurus\vues\templates\cadreId.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52ea521f39ebc9_22273688')) {function content_52ea521f39ebc9_22273688($_smarty_tpl) {?><fieldset>
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
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:22:39
         compiled from "C:\wamp\www\\Taurus\vues\templates\menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52ea521f3d1882_44786274')) {function content_52ea521f3d1882_44786274($_smarty_tpl) {?><ul id="nav">
  <li><a href="index.php" title="Accueil">Accueil</a></li>
  <li><a href="catalogue.php" title="Catalogue">Catalogue</a></li>
  <li><a href="contact.php" title="Contact">Contactez-nous</a></li>
</ul><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:22:39
         compiled from "C:\wamp\www\\Taurus\vues\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52ea521f434e29_88045943')) {function content_52ea521f434e29_88045943($_smarty_tpl) {?><p>Information sur l'entreprise, lien vers les Conditions d'utilisaton, etc...</p><?php }} ?>
