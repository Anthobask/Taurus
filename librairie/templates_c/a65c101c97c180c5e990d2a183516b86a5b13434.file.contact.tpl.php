<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:34:31
         compiled from "C:\wamp\www\\Taurus\vues\templates\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314252ea54e7091867-85483788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a65c101c97c180c5e990d2a183516b86a5b13434' => 
    array (
      0 => 'C:\\wamp\\www\\\\Taurus\\vues\\templates\\contact.tpl',
      1 => 1390213910,
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
  'nocache_hash' => '314252ea54e7091867-85483788',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ea54e71a2773_51206039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea54e71a2773_51206039')) {function content_52ea54e71a2773_51206039($_smarty_tpl) {?><html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '314252ea54e7091867-85483788');
content_52ea54e7108c97_03790399($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
        </div>

        <!-- ici, on met le menu -->
        <div id="menu">
        <?php /*  Call merged included template "menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '314252ea54e7091867-85483788');
content_52ea54e714de31_03734044($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '314252ea54e7091867-85483788');
content_52ea54e71940d1_91796325($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>
        </div>


        


    </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:34:31
         compiled from "C:\wamp\www\\Taurus\vues\templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52ea54e7108c97_03790399')) {function content_52ea54e7108c97_03790399($_smarty_tpl) {?><div class="row-fluid" >
    <div class="logo span4 offset1 ">
        <h1>TAURUS INC.</h1>
        <h2>To Infinity and Beyond</h2>
    </div>
    <div class="zone_id span7 ">
        <!-- Zone d'identification -->
        <?php /*  Call merged included template "cadreId.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("cadreId.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '314252ea54e7091867-85483788');
content_52ea54e7113b06_60452840($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cadreId.tpl" */?>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:34:31
         compiled from "C:\wamp\www\\Taurus\vues\templates\cadreId.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52ea54e7113b06_60452840')) {function content_52ea54e7113b06_60452840($_smarty_tpl) {?><fieldset>
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
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:34:31
         compiled from "C:\wamp\www\\Taurus\vues\templates\menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52ea54e714de31_03734044')) {function content_52ea54e714de31_03734044($_smarty_tpl) {?><ul id="nav">
  <li><a href="index.php" title="Accueil">Accueil</a></li>
  <li><a href="catalogue.php" title="Catalogue">Catalogue</a></li>
  <li><a href="contact.php" title="Contact">Contactez-nous</a></li>
</ul><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2014-01-30 13:34:31
         compiled from "C:\wamp\www\\Taurus\vues\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52ea54e71940d1_91796325')) {function content_52ea54e71940d1_91796325($_smarty_tpl) {?><p>Information sur l'entreprise, lien vers les Conditions d'utilisaton, etc...</p><?php }} ?>
