<?php /* Smarty version Smarty-3.1.14, created on 2013-08-01 10:08:59
         compiled from ".\templates\index.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1033951e9445d1d33e0-82038013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1c3bc7d452943ba7bef0f790924244547f15e8b' => 
    array (
      0 => '.\\templates\\index.tpl.html',
      1 => 1375340338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1033951e9445d1d33e0-82038013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e9445d314850_68341695',
  'variables' => 
  array (
    'contentbox' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e9445d314850_68341695')) {function content_51e9445d314850_68341695($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="./gfx/favicon.png">
<link rel="stylesheet" type="text/css" href="css/ResetSJ.css">
<link rel="stylesheet" type="text/css" href="css/idrc.css">
<link href="./css/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="./js/js-image-slider.js" type="text/javascript"></script>
<title>Infectious Diseases Research Collaboration</title>
</head>

<body>
<div id="wrapper" class="wrapper">
<?php echo $_smarty_tpl->getSubTemplate ('./header.tpl.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->tpl_vars['contentbox']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ('./footer.tpl.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</div>
</body>
</html>
<?php }} ?>