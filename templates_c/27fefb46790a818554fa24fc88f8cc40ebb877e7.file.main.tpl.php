<?php /* Smarty version Smarty-3.1.13, created on 2013-10-18 23:35:46
         compiled from ".\views\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191395261c5d23d4218-35577012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27fefb46790a818554fa24fc88f8cc40ebb877e7' => 
    array (
      0 => '.\\views\\main.tpl',
      1 => 1382083940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191395261c5d23d4218-35577012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5261c5d2420c63_01947479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5261c5d2420c63_01947479')) {function content_5261c5d2420c63_01947479($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((('templates/').($_smarty_tpl->tpl_vars['template']->value)).('.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>