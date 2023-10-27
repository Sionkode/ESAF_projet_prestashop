<?php
/* Smarty version 4.3.1, created on 2023-10-27 15:25:15
  from 'C:\xampp2\htdocs\prestashop\modules\blockreassurance\views\templates\admin\tabs\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653bd65b616981_16745849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc8c1cb0fb2ed87d41f73bf449939decab77c22' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\prestashop\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content.tpl',
      1 => 1696225486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_653bd65b616981_16745849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
