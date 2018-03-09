<?php
/* Smarty version 3.1.30, created on 2018-03-07 06:57:00
  from "/var/www/html/shop/application/views/smarty_templates/accounts/two_factor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9fd38c813326_81041728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58f01e95f4c835168847cfec66f889d9b0f3b4da' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/accounts/two_factor.tpl',
      1 => 1520399887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9fd38c813326_81041728 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
?>
            <div class="col-row">
                <blockquote class="blockquote text-center">
                <h2>Two Factor Authentication</h2><hr/>   

                <div class="card bg-light card-body mb-3">
                    <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                    <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                    <div class='form'>
                        <div class='col-row'><strong>Current Setting</strong></div>
                        <div class='col-row'><u><?php if ($_smarty_tpl->tpl_vars['two_factor_setting']->value == TRUE) {?>Enabled<?php } else { ?>Disabled<?php }?></u></div>
                    </div>
                    <hr/>

                    <div class='form'>
                        <div class='col-row'>
                            <div class='col-row'>
                                <strong>Time-based Two Factor Tokens</strong>

                                <?php if ($_smarty_tpl->tpl_vars['two_factor']->value['totp'] == TRUE) {?>
                                <div class="col-row">
                                    You are currently using time based two-factor tokens to authorize logins.<br />
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account/disable_2fa",'text'=>"Click here to disable this!",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                                </div>
                                <?php } else { ?>

                                <?php echo smarty_function_form(array('method'=>"open",'action'=>"account/two_factor",'attr'=>array('class'=>'form-horizontal','name'=>'totp_form')),$_smarty_tpl);?>

                                    <div class='form'>
                                        <p>Time-based two factor authentication restricts access to your account by asking you for a token from your Authenticator app on each sign-in. Follow these two steps to get set up:</p>
                                        <p>1 - Scan the QR code to import it your app. Write down the secret key in case you lose your device.</p>
                                        <div class='col-row'><img src='data:image/png;base64,<?php echo $_smarty_tpl->tpl_vars['qr']->value;?>
'></div>
                                        <br><div class='col-row'>Secret Key: <?php echo $_smarty_tpl->tpl_vars['secret']->value;?>
</div>
                                        <br><p>2 - Enter the generated token and your password to confirm:</p>
                                    </div>

                                    <div class="form">
                                        <div class="col-row">
                                            <label class="control-label col-row" for="password"></label>
                                            <div class="col-row">
                                                <input type='password' id='password' class="form-control text-center" name='password' placeholder="Password" />
                                            </div>
                                        </div>
                                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"password"),$_smarty_tpl);?>
</div>
                                    </div>

                                    <div class="form">
                                        <div class="col-row">
                                            <label class="control-label col-row" for="token"></label>
                                            <div class="col-row">
                                                <input type='text' class="form-control text-center" name='totp_token' value='' placeholder="Token" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"totp_token"),$_smarty_tpl);?>
</div>
                                    </div>

                                    <div class="form">
                                        <label class="control-label col-row" for="submit"></label>
                                        <div class="col-row">
                                                <input type='submit' class='btn btn-primary' name='submit_totp_token' value='Setup' />
                                        </div>
                                    </div>
                                </form>
                                <?php }?>
                            </div>
                        </div>

                        <br><div class='col-row'>
                            <div class='col-row'>
                                <?php if (isset($_smarty_tpl->tpl_vars['two_factor']->value['pgp']) == TRUE) {?>
                                <strong>PGP Two Factor Authentication</strong>

                                <div class='form'>
                                    <?php if ($_smarty_tpl->tpl_vars['two_factor']->value['pgp'] == TRUE) {?>
                                        You are currently using PGP two-factor challences to authorize logins. <br />
                                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account/disable_2fa",'text'=>"Click here to disable this!",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                                    <?php } else { ?>
                                        <div class='col-row'>PGP-based two factor challenges ensure that your account can only be accessed by someone able to decrypt messages encrypted with your PGP public key.</div>
                                        <br/><div class='col-row'><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account/pgp_factor",'text'=>"Setup",'attr'=>'class="btn btn-primary"'),$_smarty_tpl);?>
</div>
                                    <?php }?>
                                </div>
                                <?php } else { ?>
                                <i>Add a PGP key to enable PGP two factor authentication!</i>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div></blockquote>
<?php }
}
