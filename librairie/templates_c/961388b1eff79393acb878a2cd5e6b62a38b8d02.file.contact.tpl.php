<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 12:32:53
         compiled from "C:\wamp\www\Taurus\vues\templates\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2353852dcfab9850ec4-56177084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '961388b1eff79393acb878a2cd5e6b62a38b8d02' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\contact.tpl',
      1 => 1390213910,
      2 => 'file',
    ),
    '8ff10dd6f6dbb59b0257ffb5a51a4f6ef924c70a' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\layout.tpl',
      1 => 1390554793,
      2 => 'file',
    ),
    'f7f7655a669507ce7c5292385cbeb41254765069' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\cadreId.tpl',
      1 => 1390992108,
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
  'nocache_hash' => '2353852dcfab9850ec4-56177084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52dcfab9957f33_07238399',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dcfab9957f33_07238399')) {function content_52dcfab9957f33_07238399($_smarty_tpl) {?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Taurus Incorporation (c)</title>
        <!--fichier css-->
        <link rel="stylesheet" type="text/css" href="vues/css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="vues/css/base.css">
        <script type="text/javascript" src="vues/js/jquery.js"></script>
        <script type="text/javascript" src="vues/js/main.js"></script>        
    </head>
    <body>
        

        <!-- ici, on met le header -->
        <div id="header">
        <?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2353852dcfab9850ec4-56177084');
content_52e8f4f5243cf2_92064003($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
        </div>

        <!-- ici, on met le menu -->
        <div id="menu">
        <?php /*  Call merged included template "menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2353852dcfab9850ec4-56177084');
content_52e8f4f52693c3_27260542($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "menu.tpl" */?>
        </div>

        <!-- ici, on met le menu -->
        <div id="corps">
        
    <h4>Catégorie de produit</h4>
    <fieldset>
        <legend>Nous contactez</legend>
        <p>Petit texte explicatif sur les modalités de contact</>
    </fieldset>
    <fieldset>
        <div id="form_contact">
            <form>
                <div class="row-fluid">
                    <div class="span4"><label for="nom">Nom :</label></div>
                    <div class="span2"><input type="text" name="nom" id="nom"/></div>
                </div>
                <div class="row-fluid">
                    <div class="span4"><label for="mail">Mail :</label></div>
                    <div class="span2"><input type="text" name="mail" id="mail"/></div>
                </div>	
                <div class="row-fluid">
                    <div class="span4"><label for="motif">Motif </label></div>
                    <div class="span2">
                        <select name="motif" id="motif">
                            <option name="0" value=" " />
                        </select>                    
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span2"><input type="submit" name="ok" id="ok"/></div>
                </div>	

            </form>
        </div>
    </fieldset


        </div>
        <!-- ici, on met le footer -->
        <div id="footer">
        <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2353852dcfab9850ec4-56177084');
content_52e8f4f529ccb0_30370630($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>
        </div>


        


    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 12:32:53
         compiled from "C:\wamp\www\Taurus\vues\templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e8f4f5243cf2_92064003')) {function content_52e8f4f5243cf2_92064003($_smarty_tpl) {?><div class="row-fluid" >
    <div class="logo span4 offset1 ">
        <h1>TAURUS INC.</h1>
        <h2>To Infinity and Beyond</h2>
    </div>
    <div class="zone_id span7 ">
        <!-- Zone d'identification -->
        <?php /*  Call merged included template "cadreId.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("cadreId.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2353852dcfab9850ec4-56177084');
content_52e8f4f5257dc5_34332528($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cadreId.tpl" */?>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 12:32:53
         compiled from "C:\wamp\www\Taurus\vues\templates\cadreId.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e8f4f5257dc5_34332528')) {function content_52e8f4f5257dc5_34332528($_smarty_tpl) {?><fieldset>
    <legend class="row1">Identification</legend>
    <form method="POST" action="identification.php">
        <input class="row1" type="text" name="login" value="Login" onclick="this.value=''"/>
        <input class="row1" type="password" name="password" />
        <div class="row1 offset3"><input type="submit" name="valider" value="Valider" />
            <a href="./inscription.php">S'inscrire</a></div>
    </form>
</fieldset><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 12:32:53
         compiled from "C:\wamp\www\Taurus\vues\templates\menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e8f4f52693c3_27260542')) {function content_52e8f4f52693c3_27260542($_smarty_tpl) {?><ul id="nav">
  <li><a href="index.php" title="Accueil">Accueil</a></li>
  <li><a href="catalogue.php" title="Catalogue">Catalogue</a></li>
  <li><a href="contact.php" title="Contact">Contactez-nous</a></li>
</ul><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-29 12:32:53
         compiled from "C:\wamp\www\Taurus\vues\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e8f4f529ccb0_30370630')) {function content_52e8f4f529ccb0_30370630($_smarty_tpl) {?><p>Information sur l'entreprise, lien vers les Conditions d'utilisaton, etc...</p><?php }} ?>
