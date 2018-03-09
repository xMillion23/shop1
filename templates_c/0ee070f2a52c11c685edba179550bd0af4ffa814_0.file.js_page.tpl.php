<?php
/* Smarty version 3.1.30, created on 2018-02-28 09:27:20
  from "/var/www/html/shop/application/views/smarty_templates/bip32/js_page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a96bc4834dae8_16040316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ee070f2a52c11c685edba179550bd0af4ffa814' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/bip32/js_page.tpl',
      1 => 1519684832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a96bc4834dae8_16040316 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
?>
            <div class="col-md-9">
                <h2>Public Key</h2>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <p align="justify">You are currently using password based wallet in order to create your keys. This means the marketplace can create order addresses automatically, and all you need to do is enter a password to authorize payments.</p>

                <div class="panel panel-default" id="bip32panel">
                    <div class="panel-heading" id="bip32panelheading">BIP32 key (watch only)</div>
                    <textarea class="form-control" id="bip32key" name="bip32key" readonly><?php echo $_smarty_tpl->tpl_vars['key']->value['key'];?>
</textarea>
                    <div class="panel-body" id="panel_body">
                        <p>If you wish to generate your master private key in order to sign transactions with another client, enter your passphrase and import the BIP32 key that is displayed above.</p>

                        <input type="hidden" name="wallet_salt" id="wallet_salt" value="<?php echo $_smarty_tpl->tpl_vars['wallet_salt']->value;?>
" />
                        <input type="hidden" name="extended_public_key" id="extended_public_key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value['key'], ENT_QUOTES, 'UTF-8', true);?>
" />
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-md-3">Wallet Passphrase</label>
                            <div class="col-xs-12 col-md-7">
                                <input type="password" class="form-control" name="wallet_passphrase" id="wallet_passphrase" value="" />
                            </div>
                            <div class="col-xs-12 col-md-1">
                                <button type="button" class="btn btn-primary" onclick="get_master_key()">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php echo $_smarty_tpl->tpl_vars['key_usage_html']->value;?>

            </div><?php }
}
