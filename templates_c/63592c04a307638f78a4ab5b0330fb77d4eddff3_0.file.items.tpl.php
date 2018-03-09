<?php
/* Smarty version 3.1.30, created on 2018-03-01 12:12:22
  from "/var/www/html/shop/application/views/smarty_templates/admin/items.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9834765bfd03_25809286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63592c04a307638f78a4ab5b0330fb77d4eddff3' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/items.tpl',
      1 => 1519924338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9834765bfd03_25809286 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="container-fluid" id="admin-items-panel">
            <blockquote class="blockquote text-center">
            <div class="col-row">
                <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>


                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <div class="col-row">

                    <div class="form">
                        <div class="col-row"><strong>Item Count</strong></div>
                        <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['item_count']->value;?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row"><strong>Fees Configuration</strong></div>
                        <div class="col-row"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/items/fees",'text'=>"Configure",'attr'=>''),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row"><strong>Trusted vendor settings</strong></div>
                        <div class="col-row"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/trusted_user",'text'=>"Configure",'attr'=>''),$_smarty_tpl);?>
</div>
                    </div>
                </div>
            </div></div></blockquote>
<?php }
}
