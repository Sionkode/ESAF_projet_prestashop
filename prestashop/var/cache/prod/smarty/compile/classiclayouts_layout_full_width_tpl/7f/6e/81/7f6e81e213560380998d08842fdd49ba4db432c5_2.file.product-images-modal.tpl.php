<?php
/* Smarty version 4.3.1, created on 2023-10-27 15:45:41
  from 'C:\xampp2\htdocs\prestashop\themes\classic\templates\catalog\_partials\product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653bdb255f0e84_16602603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f6e81e213560380998d08842fdd49ba4db432c5' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-images-modal.tpl',
      1 => 1678742294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653bdb255f0e84_16602603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal fade js-product-images-modal" id="product-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php $_smarty_tpl->_assignInScope('imagesCount', smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']));?>
        <figure>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
            <picture>
              <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
              <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
              <img
                class="js-modal-product-cover product-cover-modal"
                width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'])) {?>
                  alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                  title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                <?php } else { ?>
                  alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
                height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
              >
            </picture>
          <?php } else { ?>
            <picture>
              <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
              <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
              <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
" />
            </picture>
          <?php }?>
          <figcaption class="image-caption">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1429351146653bdb255e9b46_95184801', 'product_description_short');
?>

        </figcaption>
        </figure>
        <aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1095774081653bdb255eab53_57817515', 'product_images');
?>

          <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value > 5) {?>
            <div class="arrows js-modal-arrows">
              <i class="material-icons arrow-up js-modal-arrow-up">&#xE5C7;</i>
              <i class="material-icons arrow-down js-modal-arrow-down">&#xE5C5;</i>
            </div>
          <?php }?>
        </aside>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }
/* {block 'product_description_short'} */
class Block_1429351146653bdb255e9b46_95184801 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_1429351146653bdb255e9b46_95184801',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="product-description-short"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
          <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_images'} */
class Block_1095774081653bdb255eab53_57817515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_1095774081653bdb255eab53_57817515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="js-modal-mask mask <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value <= 5) {?> nomargin <?php }?>">
              <ul class="product-images js-modal-product-images">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                  <li class="thumb-container js-thumb-container">
                    <picture>
                      <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['medium']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['medium']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                      <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['medium']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['medium']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                      <img
                        data-image-large-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['large']['sources'])) {?>data-image-large-sources="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['large']['sources'] )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                        class="thumb js-modal-thumb"
                        src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
                          alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                          title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                          alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['medium']['width'], ENT_QUOTES, 'UTF-8');?>
"
                        height="148"
                      >
                    </picture>
                  </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            </div>
          <?php
}
}
/* {/block 'product_images'} */
}
