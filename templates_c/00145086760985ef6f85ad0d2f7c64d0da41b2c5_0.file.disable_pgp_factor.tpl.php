<?php
/* Smarty version 3.1.30, created on 2018-03-01 04:15:14
  from "/var/www/html/shop/application/views/smarty_templates/accounts/disable_pgp_factor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a97c4a28a4d66_93989460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00145086760985ef6f85ad0d2f7c64d0da41b2c5' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/accounts/disable_pgp_factor.tpl',
      1 => 1519895711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a97c4a28a4d66_93989460 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="container-fluid">
            <div class="col-row">
            <blockquote class="blockquote text-center">
                <h2>Disable Two Factor Authentication</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', "Decrypt the following PGP message to remove two factor challenge on login:");
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php echo smarty_function_form(array('method'=>"open",'action'=>"account/disable_2fa",'attr'=>array('class'=>'form-horizontal')),$_smarty_tpl);?>


                    <hr/><div class="form">
                        <label class="control-label col-row" for="challenge"></label>
                        <div class="col-row">
                            <div class="form"><textarea class="form-control text-center" rows="13"><?php echo $_smarty_tpl->tpl_vars['challenge']->value;?>
</textarea></div>
                        </div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="answer">Token</label>
                            <div class="col-row">
                                <input type="text" id="answer" class="form-control text-center" placeholder="Token" name="answer" />
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"answer"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" class="btn btn-primary" name="disable_pgp" value="Continue" />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account/two_factor",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                            </p>
                        </div>
                    </div>

                </form>
    		</div></div></blockquote>
<?php }
}
