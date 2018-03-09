<?php
/* Smarty version 3.1.30, created on 2018-03-09 07:55:23
  from "/var/www/html/shop/application/views/smarty_templates/users/register_no_pin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa2843b2d5611_12122150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae079af57c8428ae554685302d870d9b6afaad2a' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/users/register_no_pin.tpl',
      1 => 1520600119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa2843b2d5611_12122150 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
             <div class="col-row">
               <blockquote class="blockquote text-center">
               <h2>Register</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', "Enter your details to register an account: ");
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>

                <?php echo smarty_function_form(array('method'=>"open",'action'=>"register",'attr'=>array('class'=>'form-horizontal','name'=>'registerForm')),$_smarty_tpl);?>


                    </div><fieldset>

                            <div class="form">
                            <div class="col-row">
                            <h5><label class="control-label col-row" for="user_name">Username</label></h5>
                            <div class="col-row">
                                <input type='text' class="form-control text-center" id="user_name" placeholder="Your desired username" name='user_name' value="<?php echo smarty_function_form(array('method'=>"set_value",'field'=>"user_name"),$_smarty_tpl);?>
" size='12' />
                            </div>
                            </div>
                            <div class="col-row"><div class="text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"user_name"),$_smarty_tpl);?>
</div></div>
                        </div><br/>

                        <?php if ($_smarty_tpl->tpl_vars['request_emails']->value == TRUE) {?>
                            <div class="form">
                                <div class="col-row">
                                    <h5><label class="control-label col-row" for="email_address">Email Address</label></h5>
                                    <div class="col-row">
                                        <input type='email_address' class="form-control" id="email_address" name='email_address' value='' autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col-row"><div class="text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"email_address"),$_smarty_tpl);?>
</div></div>
                            </div><br/>
                        <?php }?>

                        <div class="form">
                            <div class="col-row">
                                <h5><label class="control-label col-row" for="password0">Password</label></h5>
                                <div class="col-row">
                                    <input type='password' class="form-control text-center" id="password0" placeholder="Password" name='password0' value='' autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-row"><div class="text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"password0"),$_smarty_tpl);?>
</div></div>
                        </div><br/>

                        <div class="form">
                            <div class="col-row">
                            <h5><label class="control-label col-row" for="password1">Password</label></h5>
                            <div class="col-row">
                                <input type='password' class="form-control text-center" id="password1" placeholder="Confirm password" name='password1' value='' autocomplete="off" />
                            </div>
                            </div>
                            <div class="col-row"><div class="text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"password1"),$_smarty_tpl);?>
</div></div>
                        </div><br/>

<?php if (isset($_smarty_tpl->tpl_vars['token_info']->value) && is_array($_smarty_tpl->tpl_vars['token_info']->value)) {?>
                        <div class="form">
                            <div class="col-row">
                                <h5><label class="control-label col-row" for="user_type">Role</label></h5>
                                <div class="col-row">
                                    <label class='control-label'><?php echo $_smarty_tpl->tpl_vars['token_info']->value['user_type']['txt'];?>
</label>
                                    <input type='hidden' id="user_type" name='user_type' value='<?php echo $_smarty_tpl->tpl_vars['token_info']->value['user_type']['int'];?>
' />
                                </div>
                            </div>
                        </div><br/>
<?php } else { ?>
                        <div class="form">
                            <div class="col-row">
                                <h5><label class="control-label col-row" for="user_type">Role</label></h5>
                                <div class="col-row">
                                    <select name='user_type' id="user_type" class="form-control">
                                        <option value=''></option>
                                        <option value='1'>Buyer</option>
                                        <?php if ($_smarty_tpl->tpl_vars['vendor_registration_allowed']->value == TRUE) {?><option value='2'>Vendor</option><?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-row">
                                <div class="text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"user_type"),$_smarty_tpl);?>

                            </div></div>
        				</div><br/>
<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['vendor_registration_allowed']->value == TRUE && $_smarty_tpl->tpl_vars['force_vendor_pgp']->value == TRUE) {?>
                        <div class="form">
                            <label class="control-label col-row" for="force_pgp_warning"></label>
                            <div class="col-row">
                                If you are registering as a vendor, it is required you upload a PGP public key. Please have one ready on your first login.
                            </div>
                        </div><br/>
                        <?php }?>

                        <div class="form">
                            <div class="col-row">
                                <h5><label class="control-label col-row" for="location">Location</label></h5>
                                <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['locations_select']->value;?>
</div>
                            </div>
                            <div class="col-row">
                                <div class="text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"location"),$_smarty_tpl);?>

                            </div></div>
                        </div><br/>
                
                        <div class="form">
                            <div class="col-row">
                               <h5><label class="control-label col-row" for="local_currency">Local Currency</label></h5>
                                <div class="col-row">
                                    <select name='local_currency' class="form-control">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
                                            <option value='<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
'<?php if ($_smarty_tpl->tpl_vars['currency']->value['id'] == '0') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-row"><div class="text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"local_currency"),$_smarty_tpl);?>
</div></div>
                        </div><br/>

                        <?php if (is_string($_smarty_tpl->tpl_vars['terms_of_service']->value) == TRUE) {?>
                        <div class="form">
                            <div class="col-row">
                                <h5><label class="control-label col-row" for="terms_of_service">Terms of Service</label></h5>
                                <div class="col-row">
                                    <textarea class='form-control text-center' cols='6' rows='7' readonly><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['terms_of_service']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                    <br/>
                                    <input type='checkbox' name='tos_agree' value='1' /> Click to agree to the terms of service.
                                </div>
                            </div>
                        </div><br/>
                        <?php }?>

                        <!-- Captcha -->
                        <div class="form">
                            <div class="col-row">
                            <h5><label class="control-label col-row" for="captcha_img">Captcha</label></h5>
                            <div class="col-row">
                                <p align="center">
                                    <?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>

                                </p>
                            </div>
                        </div></div>

                        <div class="form">
                            <div class="col-row">
                                <label class="control-label col-row" for="captcha"></label>
                                <div class="col-row">
                                    <input type="text" class="form-control text-center" id="captcha" placeholder="Please verify that you are human" name="captcha" />
                                </div>
                            </div>
                            <div class="col-row"><div class="text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"captcha"),$_smarty_tpl);?>
</div></div>
                        </div>
                        <!-- /Captcha -->

			            <noscript><div style="display:none"><input type='hidden' name='js_disabled' value='1' /></div></noscript>

                        <div class="form">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type='submit' name='register_user' class="btn btn-primary" value="Register" />
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"login",'text'=>"Cancel",'attr'=>'title="Cancel" class="btn btn-danger"'),$_smarty_tpl);?>

                                </p>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div></blockquote>
<?php }
}
