<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-05 07:08:46
  from 'C:\xampp\htdocs\web11\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3a5bee406c74_72247428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beb698326f11bc44328d8e961bbe3dc500b9ca05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web11\\templates\\user.tpl',
      1 => 1580882905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/admin.tpl' => 1,
    'file:tpl/login.tpl' => 1,
  ),
),false)) {
function content_5e3a5bee406c74_72247428 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/bootstrap.min.css">

    <title>會員管理</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
  </head>
  <body>
	<?php if ($_SESSION['admin']) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:tpl/admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
	<?php }?>

  </body>
</html><?php }
}
