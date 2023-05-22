<?php
/* Smarty version 3.1.39, created on 2023-05-19 10:51:16
  from 'C:\xampp\htdocs\cpcob03\ui\theme\ibilling\welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64677ed4bb7c04_55762644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64fc9a5eb0f21141de45c20f58218ac71ca3e007' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cpcob03\\ui\\theme\\ibilling\\welcome.tpl',
      1 => 1684443487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64677ed4bb7c04_55762644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123875363864677ed4bb1c64_57853104', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_123875363864677ed4bb1c64_57853104 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_123875363864677ed4bb1c64_57853104',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">

            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
!

        </div>



    </div>

<?php
}
}
/* {/block "content"} */
}
