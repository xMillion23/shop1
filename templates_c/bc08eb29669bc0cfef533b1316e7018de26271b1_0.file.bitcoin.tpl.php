<?php
/* Smarty version 3.1.30, created on 2018-02-28 11:13:50
  from "/var/www/html/shop/application/views/smarty_templates/admin/bitcoin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a96d53e443361_87783063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc08eb29669bc0cfef533b1316e7018de26271b1' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/bitcoin.tpl',
      1 => 1519834426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a96d53e443361_87783063 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="container-fluid" id="admin-panel">
            <blockquote class="blockquote text-center">

                <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>


                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php if (is_array($_smarty_tpl->tpl_vars['bitcoin_info']->value) == TRUE) {?>
                <div class="form">
                    <div class="col-row"><strong><?php echo $_smarty_tpl->tpl_vars['coin']->value['name'];?>
 Status</strong></div>
                    <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['coin']->value['name'];?>
d is currently running<?php if ($_smarty_tpl->tpl_vars['bitcoin_info']->value['testnet'] == TRUE) {?> <b>in the testnet</b><?php }?></div>
                </div>

                <div class="form">
                    <div class="col-row"><strong><?php echo $_smarty_tpl->tpl_vars['coin']->value['name'];?>
 Version</strong></div>
                    <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['bitcoin_info']->value['version'];?>
</div>
                </div>

                <?php } else { ?>
                <div class="form">
                    <div class="col-row"><strong><?php echo $_smarty_tpl->tpl_vars['coin']->value['name'];?>
 Status</strong></div>
                    <div class="col-row">Unable to make an outbound connection to the <?php echo strtolower($_smarty_tpl->tpl_vars['coin']->value['name']);?>
 daemon.</div>
                </div><hr/>
                <?php }?>

                <div class="form">
                    <div class="col-row"><strong>Use A <?php echo $_smarty_tpl->tpl_vars['coin']->value['name'];?>
 Price Index?</strong></div>
                    <div class="col-row"><?php if ($_smarty_tpl->tpl_vars['bitcoin_index']->value == '') {?>Disabled<?php } else {
echo $_smarty_tpl->tpl_vars['bitcoin_index']->value;
}?></div>
                </div><hr/>

                <div class="form">
                    <div class="col-row"><strong>Key Usage</strong></div>
                    <div class="col-row">Used <?php echo $_smarty_tpl->tpl_vars['key_usage_count']->value;?>
 times. <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/key_usage",'text'=>"View Usage",'attr'=>''),$_smarty_tpl);?>
</div>
                </div>

            </div></blockquote>
<?php }
}
