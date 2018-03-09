<?php
/* Smarty version 3.1.30, created on 2018-03-06 15:54:12
  from "/var/www/html/shop/application/views/smarty_templates/accounts/change_password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9efff4117d90_04079301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c05704db32f8a303cb457155f91befdc3bf834b' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/accounts/change_password.tpl',
      1 => 1520369645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9efff4117d90_04079301 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="col-row" id="add-public-key">
            <blockquote class="blockquote text-center">
            
                <h2>Change Password</h2><hr/>
                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <p align="justify">You should always set a strong, unique passphrase for each website. Passphrases should be memorable sentences that only you could know - make it funny, make it rhyme, but ultimately it should be extremely hard for anyone to guess.</p><hr/>

                <?php echo smarty_function_form(array('method'=>"open",'action'=>"accounts/password",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="new_password0">New Password</label>
                            <div class="col-row">
                                <input type="password" class="form-control text-center" placeholder="New Password" name="new_password0" id="new_password0" value="" />
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>'form_error','field'=>'new_password0'),$_smarty_tpl);?>
</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="new_password1">Confirm Password</label>
                            <div class="col-row">
                                <input type="password" class="form-control text-center" placeholder="Confirm New Password" name="new_password1" id="new_password1" value="" />
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>'form_error','field'=>'new_password1'),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="current_password">Password</label>
                            <div class="col-row">
                                <input type="password" class="form-control text-center" placeholder="Password" name="current_password" id="current_password" value="" />
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>'form_error','field'=>'current_password'),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" name="change_password" value="Change Password" class="btn btn-primary" />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account",'text'=>"Cancel",'attr'=>'title="Cancel" class="btn btn-danger"'),$_smarty_tpl);?>

                            </p>
                        </div>
                    </div>
                </form>
            </div></blockquote>
<?php }
}
