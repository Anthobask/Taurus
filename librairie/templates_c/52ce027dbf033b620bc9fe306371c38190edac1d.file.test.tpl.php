<?php /* Smarty version Smarty-3.1.15, created on 2014-01-16 11:08:05
         compiled from "C:\wamp\www\Taurus\vues\templates\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3195052d7b361705cf3-54091339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52ce027dbf033b620bc9fe306371c38190edac1d' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\test.tpl',
      1 => 1389869543,
      2 => 'file',
    ),
    'e56c5d26b967addb29e1614bbe44872d34096122' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\child.tpl',
      1 => 1389869437,
      2 => 'file',
    ),
    'aeb207aa5a06a4546579b101530c901402a8ec9f' => 
    array (
      0 => 'C:\\wamp\\www\\Taurus\\vues\\templates\\parent.tpl',
      1 => 1389869588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3195052d7b361705cf3-54091339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52d7b361ad15b2_14311851',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7b361ad15b2_14311851')) {function content_52d7b361ad15b2_14311851($_smarty_tpl) {?><html>
	<head>
	<title>
Titre d'exemple
</title>
	</head>
	<body>
		


<h1>Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 !</h1>



	</body>
</html><?php }} ?>
