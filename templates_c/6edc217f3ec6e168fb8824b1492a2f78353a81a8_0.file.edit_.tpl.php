<?php
/* Smarty version 3.1.30, created on 2018-03-01 12:17:27
  from "/var/www/html/shop/application/views/smarty_templates/admin/edit_.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9835a71ff016_44199849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6edc217f3ec6e168fb8824b1492a2f78353a81a8' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/edit_.tpl',
      1 => 1519919718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9835a71ff016_44199849 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="container-fluid" id="edit_general">
            <blockquote class="blockquote text-center">
            <div class="col-row">
                <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>


                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/edit",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>

                    <fieldset>
                        <div class='form'>
                            <label class="control-label col-row" for="site_title">Site Status</label>
                            <div class='col-row'>
                                <label class='control-label'>
                                <?php if ($_smarty_tpl->tpl_vars['config']->value['maintenance_mode'] == TRUE) {?>
                                    maintenance mode
                                <?php } else { ?>
                                    online
                                <?php }?>
                                    - <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/maintenance",'text'=>"Configure",'attr'=>''),$_smarty_tpl);?>

                                </label>
                            </div>
                        </div><hr/>

                        <div class="form">
                            <label class="control-label col-row" for="site_title">Site Title</label>
                            <div class="col-row">
                                <input type="text" name="site_title" id="site_title" class="form-control text-center" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['site_title'], ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                            <div class='col-row'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"site_title"),$_smarty_tpl);?>
</div>
                        </div><hr/>

                        <div class="form">
                            <label class="control-label col-row" for="site_description">Site Description</label>
                            <div class='col-row'>
                                <div class="col-row">
                                    <input type="text" name="site_description" id="site_description" class='form-control text-center' value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['site_description'], ENT_QUOTES, 'UTF-8', true);?>
" />
                                </div>
                            </div>
                            <div class='col-row'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"site_description"),$_smarty_tpl);?>
</div>
                        </div><hr/>

                        <div class="form">
                            <div class='col-row'></div>
                                <label class="control-label col-row" for="location_settings">Location Settings</label>
                                <div class="col-row">
                                <label class='control-label'>
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/locations",'text'=>"Configure",'attr'=>''),$_smarty_tpl);?>

                                </label>
                            </div>
                        </div><hr/>

                        <div class="form">
                            <label class="control-label col-row" for="terms_of_service">Terms Of Service</label>
                            <div class="col-row">
                                <label class='control-label'>
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/tos",'text'=>"Configure",'attr'=>''),$_smarty_tpl);?>

                                </label>
                            </div>
                        </div><hr/>

                        <div class="form">
                            <div class="col-row">
                                <label class="control-label col-row" for="allow_guests">Allow Guests to Browse?</label>
                                <div class="col-row">
                                    <label class="radio-inline">
                                        <input type='radio' name='allow_guests' value='0' <?php if ($_smarty_tpl->tpl_vars['config']->value['allow_guests'] == '0') {?>checked<?php }?> /> Disabled
                                    </label>

                                    <label class="radio-inline">
                                        <input type='radio' name='allow_guests' value='1' <?php if ($_smarty_tpl->tpl_vars['config']->value['allow_guests'] == '1') {?>checked<?php }?> /> Enabled
                                    </label>
                                </div>
                            </div>
                            <div class='col-row'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"allow_guests"),$_smarty_tpl);?>
</div>
                        </div><hr/>

                        <div class="form">
                            <div class="col-row">
                                <label class="control-label col-row" for="openssl_keysize">OpenSSL Keysize</label>
                                <div class="col-row">
                                    <select name="openssl_keysize" class="form-control">
                                        <option value='1024' <?php if ($_smarty_tpl->tpl_vars['config']->value['openssl_keysize'] == '1024') {?>selected="selected"<?php }?>>1024</option>
                                        <option value='2048' <?php if ($_smarty_tpl->tpl_vars['config']->value['openssl_keysize'] == '2048') {?>selected="selected"<?php }?>>2048</option>
                                        <option value='4096' <?php if ($_smarty_tpl->tpl_vars['config']->value['openssl_keysize'] == '4096') {?>selected="selected"<?php }?>>4096</option>
                                    </select>
                                </div>
                            </div>
                            <div class='col-row'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"openssl_keysize"),$_smarty_tpl);?>
</div>
                        </div><hr/>

                        <div class="form">
                            <div class="col-row">
                                <label class="control-label col-row" for="global_proxy">Global Proxy</label>
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Type</i></span>
                                        <select name="global_proxy_type" class="form-control">
                                            <option value=''></option>
                                            <option value='HTTP' <?php if ($_smarty_tpl->tpl_vars['config']->value['global_proxy_type'] == 'HTTP') {?>selected="selected"<?php }?>>HTTP</option>
                                            <option value='SOCKS5' <?php if ($_smarty_tpl->tpl_vars['config']->value['global_proxy_type'] == 'SOCKS5') {?>selected="selected"<?php }?>>SOCKS5</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>URL</i></span>
                                        <input type='text' name='global_proxy_url' class="form-control" value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['global_proxy_url'], ENT_QUOTES, 'UTF-8', true);?>
' />
                                    </div>
                                </div>
                                <div class="col-row">
                                    <label class="radio-inline">
                                        <input type='checkbox' name='global_proxy_disabled' value='1' <?php if ($_smarty_tpl->tpl_vars['config']->value['global_proxy_type'] == 'Disabled') {?>checked<?php }?> /> Disabled
                                    </label>
                                </div>
                            </div>
                            <div class='col-row'><span class="help-inline">
                                    <?php if (isset($_smarty_tpl->tpl_vars['proxy_error']->value) == TRUE) {
echo $_smarty_tpl->tpl_vars['proxy_error']->value;
}?>
                                    <?php echo smarty_function_form(array('method'=>"form_error",'field'=>"global_proxy_type"),$_smarty_tpl);?>
 <?php echo smarty_function_form(array('method'=>"form_error",'field'=>"global_proxy_url"),$_smarty_tpl);?>

                            </span></div>
                        </div>

                        <div class="form">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type='submit' value='Update' class='btn btn-primary' />
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                                </p>
                            </div>
                        </div>
                    </fieldset>
                </form>

            </div></div></blockquote>
<?php }
}
