<?php
/* Smarty version 3.1.30, created on 2018-03-01 11:22:55
  from "/var/www/html/shop/application/views/smarty_templates/admin/edit_users.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9828df997b36_46156841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '427ccb27ad6153fc796f997d98e4c197a37e2a7a' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/edit_users.tpl',
      1 => 1519921369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9828df997b36_46156841 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_modifier_escape')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="container-fluid" id="admin_edit_users">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>


                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/edit/users",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>


                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="login_timeout">Session Timeout</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' class='form-control text-center' name='login_timeout' value='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['config']->value['login_timeout'], "HTML", "UTF-8");?>
' placeholder="Minutes"/>
                                </div>
                            </div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"login_timeout"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="request_emails">Request Emails?</label>
                            <div class="col-row">
                                <div class="col-row">
                                    <label class="radio-inline">
                                        <input type='radio' name='request_emails' value='0' <?php if ($_smarty_tpl->tpl_vars['config']->value['request_emails'] == '0') {?>checked<?php }?> /> Disabled
                                    </label>
                                    <label class="radio-inline">
                                        <input type='radio' name='request_emails' value='1' <?php if ($_smarty_tpl->tpl_vars['config']->value['request_emails'] == '1') {?>checked<?php }?> /> Enabled
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"login_timeout"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="captcha_length">Captcha Length</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' class='form-control text-center' id='captcha_length' name='captcha_length' value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['captcha_length'], ENT_QUOTES, 'UTF-8', true);?>
' placeholder="Characters"/>
                                </div>
                            </div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"captcha_length"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="registration_allowed">Registration Allowed?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' name='registration_allowed' value='0' <?php if ($_smarty_tpl->tpl_vars['config']->value['registration_allowed'] == '0') {?>checked<?php }?> /> Disabled
                                </label>
                                <label class="radio-inline">
                                    <input type='radio' name='registration_allowed' value='1' <?php if ($_smarty_tpl->tpl_vars['config']->value['registration_allowed'] == '1') {?>checked<?php }?> /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"registration_allowed"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="vendor_registration_allowed">Vendor Registration Allowed?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' name='vendor_registration_allowed' value='0' <?php if ($_smarty_tpl->tpl_vars['config']->value['vendor_registration_allowed'] == '0') {?>checked<?php }?> /> Disabled
                                </label>
                                <label class="radio-inline">
                                    <input type='radio' name='vendor_registration_allowed' value='1' <?php if ($_smarty_tpl->tpl_vars['config']->value['vendor_registration_allowed'] == '1') {?>checked<?php }?> /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"vendor_registration_allowed"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="entry_payment_vendor">Vendor Registration Fee</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' class='form-control text-center' name='entry_payment_vendor' value='<?php if ($_smarty_tpl->tpl_vars['config']->value['entry_payment_vendor'] > 0) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['entry_payment_vendor'], ENT_QUOTES, 'UTF-8', true);
}?>' placeholder="<?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
"/>
                                </div>
                            </div>
                            <div class="col-row"><input type='checkbox' name='entry_payment_vendor_disabled'<?php if ($_smarty_tpl->tpl_vars['config']->value['entry_payment_vendor'] == 0) {?> checked <?php }?> value="1"/> Disabled</div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"entry_payment_vendor"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="entry_payment_buyer">Buyer Registration Fee</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' class='form-control text-center' name='entry_payment_buyer' value='<?php if ($_smarty_tpl->tpl_vars['config']->value['entry_payment_buyer'] > 0) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['entry_payment_buyer'], ENT_QUOTES, 'UTF-8', true);
}?>' placeholder="<?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
"/>
                                </div>
                            </div>
                            <div class="col-row"><input type='checkbox' name='entry_payment_buyer_disabled'<?php if ($_smarty_tpl->tpl_vars['config']->value['entry_payment_buyer'] == 0) {?> checked <?php }?> value="1"/> Disabled</div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"entry_payment_buyer"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="encrypt_private_messages">Encrypt Private Messages?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' name='encrypt_private_messages' value='0' <?php if ($_smarty_tpl->tpl_vars['config']->value['encrypt_private_messages'] == '0') {?>checked<?php }?> /> Disabled
                                </label>
                                <label class="radio-inline">
                                    <input type='radio' name='encrypt_private_messages' value='1' <?php if ($_smarty_tpl->tpl_vars['config']->value['encrypt_private_messages'] == '1') {?>checked<?php }?> /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"encrypt_private_messages"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="force_vendor_pgp">Force Vendor PGP?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' name='force_vendor_pgp' value='0' <?php if ($_smarty_tpl->tpl_vars['config']->value['force_vendor_pgp'] == '0') {?>checked<?php }?> /> Disabled
                                </label>
                                <label class="radio-inline">
                                    <input type='radio' name='force_vendor_pgp' value='1' <?php if ($_smarty_tpl->tpl_vars['config']->value['force_vendor_pgp'] == '1') {?>checked<?php }?> /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"force_vendor_pgp"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type='submit' value='Update' class='btn btn-primary' />
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/users",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div></div></blockquote>
<?php }
}
