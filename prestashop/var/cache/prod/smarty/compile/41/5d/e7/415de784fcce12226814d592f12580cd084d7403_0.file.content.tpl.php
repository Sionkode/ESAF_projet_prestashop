<?php
/* Smarty version 4.3.1, created on 2023-10-27 13:40:26
  from 'C:\xampp2\htdocs\prestashop\admin257wdmsjorv1yorco2a\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653bbdcad35144_77947906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '415de784fcce12226814d592f12580cd084d7403' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\prestashop\\admin257wdmsjorv1yorco2a\\themes\\default\\template\\content.tpl',
      1 => 1697795490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653bbdcad35144_77947906 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
