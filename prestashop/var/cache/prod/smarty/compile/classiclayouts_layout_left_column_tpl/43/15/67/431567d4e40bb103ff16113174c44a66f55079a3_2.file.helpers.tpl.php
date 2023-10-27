<?php
/* Smarty version 4.3.1, created on 2023-10-27 11:59:04
  from 'C:\xampp2\htdocs\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653ba6084e3797_33388285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '431567d4e40bb103ff16113174c44a66f55079a3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1678742294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653ba6084e3797_33388285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp2\\htdocs\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\43\\15\\67\\431567d4e40bb103ff16113174c44a66f55079a3_2.file.helpers.tpl.php',
    'uid' => '431567d4e40bb103ff16113174c44a66f55079a3',
    'call_name' => 'smarty_template_function_renderLogo_581736063653ba6084deff4_41217831',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_581736063653ba6084deff4_41217831 */
if (!function_exists('smarty_template_function_renderLogo_581736063653ba6084deff4_41217831')) {
function smarty_template_function_renderLogo_581736063653ba6084deff4_41217831(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_581736063653ba6084deff4_41217831 */
}
