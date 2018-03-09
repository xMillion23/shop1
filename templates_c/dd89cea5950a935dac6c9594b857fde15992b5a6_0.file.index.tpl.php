<?php
/* Smarty version 3.1.30, created on 2018-03-01 12:12:00
  from "/var/www/html/shop/application/views/smarty_templates/admin/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a983460b52345_18427661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd89cea5950a935dac6c9594b857fde15992b5a6' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/index.tpl',
      1 => 1519923639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a983460b52345_18427661 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
?>
                <div class="container-fluid" id="admin-panel">
                <blockquote class="blockquote text-center">
                <div class="col-row">
                <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>


                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <div class="form">
                    <label class="control-label col-row" for="status">Site Status</label>
                    <div class="col-row">
                        <strong>
                            <?php if ($_smarty_tpl->tpl_vars['config']->value['maintenance_mode'] == TRUE) {?>
                                maintenance mode
                            <?php } else { ?>
                                online
                            <?php }?>
                        </strong>
                    </div>
                </div><hr/>

                <div class='form'>
                    <label class="control-label col-row" for="site_title">Site Title</label>
                    <div class='col-row'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['site_title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                </div><hr/>

                <div class="form">
                    <label class="control-label col-row" for="site_description">Site Description</label>
                    <div class="col-row"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['site_description'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                </div><hr/>

                <div class="form">
                    <label class="control-label col-row" for="location_list_source">Location List</label>
                    <div class="col-row"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['location_list_source'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                </div><hr/>

                <div class="form">
                    <label class="control-label col-row" for="terms_of_service_toggle">Terms Of Service</label>
                    <div class="col-row"><?php if ($_smarty_tpl->tpl_vars['config']->value['terms_of_service_toggle'] == TRUE) {?>Enabled<?php } else { ?>Disabled<?php }?></div>
                </div><hr/>

                <div class='form'>
                    <label class="control-label col-row" for="allow_guests">Allow Guests to Browser?</label>
                    <div class='col-row'><?php if ($_smarty_tpl->tpl_vars['config']->value['allow_guests'] == TRUE) {?>Enabled<?php } else { ?>Disabled<?php }?></div>
                </div><hr/>

                <?php if (isset($_smarty_tpl->tpl_vars['gpg']->value) == TRUE) {?>
                <div class="form">
                    <label class="control-label col-row" for="gpg">GnuPG Version</label>
                    <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['gpg']->value;?>
</div>
                </div><hr/>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['encrypt_private_messages']->value == TRUE) {?>
                <div class="form">
                    <label class="control-label col-row" for="openssl_version">OpenSSL Version</label>
                    <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['openssl']->value;?>
</div>
                </div><hr/>

                <div class="form">
                    <label class="control-label col-row" for="openssl_keysize">OpenSSL Keysize</label>
                    <div class="col-row"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['openssl_keysize'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                </div>
                <?php }?>

                <div class="form">
                    <label class="control-label col-row" for="global_proxy">Global Proxy</label>
                    <div class="col-row">
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['global_proxy_type'] == 'Disabled') {?>
                            Disabled
                        <?php } else { ?>
                            (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['global_proxy_type'], ENT_QUOTES, 'UTF-8', true);?>
) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['global_proxy_url'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    </div>
                </div>

            </div></div></blockquote>
<?php }
}
