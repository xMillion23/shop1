<?php
/* Smarty version 3.1.30, created on 2018-03-08 04:41:23
  from "/var/www/html/shop/application/views/smarty_templates/bip32/no_key.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa1054384c7a6_83174612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69e8ed45afa60d22018c5b837d472a576b5ae5e7' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/bip32/no_key.tpl',
      1 => 1520502081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa1054384c7a6_83174612 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="col-row">
            <blockquote class="blockquote text-center">
            <h2>Setup Keys</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <p align="justify">In order to create your order addresses, you need to set up an extended public key. This lets us set up unique and secure payment addresses for each order. You can choose a number of ways to create one of these keys.</p>
                <hr/>
                    <!--<li>Using Onchain.io's transaction signer (Android)</li>-->
                    <p align="justify">Using an external wallet by entering a password on our website</p>

                <?php echo smarty_function_form(array('method'=>"open",'action'=>"bip32",'attr'=>array('class'=>'form-horizontal','name'=>'bip32Javascript','id'=>'bip32Javascript')),$_smarty_tpl);?>

                    <hr/><legend>Create a key from a passphrase</legend><hr/>
                    <p align="justify">You can create a key from a passphrase, and can simply just enter this when processing orders. This key is only used for signing, and funds are stored only in multi-signature address. Choose a strong password, but also something you won't forget, as it cannot be recovered, and complicate orders being completed.</p><hr/>
                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="wallet_passphrase">Wallet passphrase:</label>
                            <div class="col-row">
                                <input type="password" class="form-control text-center" placeholder="Wallet passphrase" name="wallet_passphrase" id="wallet_passphrase" value="" />
                            </div><br/>
                            <div class="col-row">
                                <input type="submit" name="js_submit" value="Submit" class="btn btn-primary" onclick="generate_key()"/>
                            </div>
                        </div>
                        <div class="col-row"><div class="text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"manual_public_key"),$_smarty_tpl);?>
</div></div>
                        <input type="hidden" name="wallet_salt" id="wallet_salt" value="<?php echo $_smarty_tpl->tpl_vars['wallet_salt']->value;?>
" />
                    </div>
                </form>
<!--
                <?php echo smarty_function_form(array('method'=>"open",'action'=>"bip32",'attr'=>array('class'=>'form-horizontal','name'=>'authorizeForm')),$_smarty_tpl);?>

                    <legend>Using Onchain.io's transaction signer</legend>
                    <div class="row">
                        <div class="col-9">
                            <p align="justify">Onchain.io is a multi-signature wallet service which provides a general purpose Android app for creating BIP32 keys and signing transactions by scanning a QR code. This also adds two-factor protection to your funds, as keys are stored on a separate device.</p>
                            <p align="justify">Download the Onchain.io transaction signer from Google Play Store, scan the QR and refresh!</p>
                        </div>
                        <div class="col-3">
                            <?php if ($_smarty_tpl->tpl_vars['display_onchain_qr']->value == TRUE) {?>
                            <img src='data:image/png;base64,<?php echo $_smarty_tpl->tpl_vars['onchain_mpk']->value['qr'];?>
' style="width:100%">
                            <?php }?>
                        </div>
                    </div>
                </form>
                <div class="col-12">&nbsp;</div>
-->
                <?php echo smarty_function_form(array('method'=>"open",'action'=>"bip32",'attr'=>array('class'=>'form-horizontal','name'=>'authorizeForm')),$_smarty_tpl);?>

                    <hr/><legend>Using an external wallet</legend><hr/>
                    <p align="justify">Using an external wallet is only recommended for advanced users, because most wallets don't support BIP32 yet. You can create BIP32 master keys on websites like <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"http://bip32.org/",'text'=>"BIP32.org",'attr'=>'title="BIP32.org"'),$_smarty_tpl);?>
, and importing the necessary private keys into Monero Core to add a signature.</p>
                    <hr/><p align="justify">The BIP32 website can be downloaded and run securely on an offline computer if you wish!</p><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="manual_public_key">Extended public key:</label>
                            <div class="col-row">
                                <input type="text" class="form-control text-center" placeholder="Extend public key" name="manual_public_key" value="" />
                            </div><br/>
                            <div class="col-row">
                                <input type="submit" name="manual_submit" value="Submit" class="btn btn-primary"/>
                            </div>
                        </div>
                        <div class="col-row"><div class="text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"manual_public_key"),$_smarty_tpl);?>
</div></div>
                    </div>

                </form>
            </div></div></blockquote>
<?php }
}
