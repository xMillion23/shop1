<?php
/* Smarty version 3.1.30, created on 2018-03-07 00:00:17
  from "/var/www/html/shop/application/views/smarty_templates/accounts/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9f71e1173657_33755762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '202d4b3e8086fd86a73fcad49218948b41289d4a' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/accounts/edit.tpl',
      1 => 1520398815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9f71e1173657_33755762 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="col-row" id="edit-account">
                <blockquote class="blockquote text-center">
                
                <h2>Edit Account</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php echo smarty_function_form(array('method'=>"open",'action'=>"account/edit",'attr'=>array('class'=>'form-horizontal')),$_smarty_tpl);?>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="location">Location</label>
                            <div class="col-row">
                                <?php echo $_smarty_tpl->tpl_vars['location_select']->value;?>

                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"location"),$_smarty_tpl);?>
</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="local_currency">Local Currency</label>
                            <div class="col-row">
                                <select name="local_currency" class="form-control" id="local_currency" >
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['currency']->value['id'] == $_smarty_tpl->tpl_vars['user']->value['local_currency']) {?> selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol'];?>
)</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </select>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"local_currency"),$_smarty_tpl);?>
</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="display_login_time">Display login activity?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' class="radio" name='display_login_time' value='0' <?php if ($_smarty_tpl->tpl_vars['user']->value['display_login_time'] == '0') {?>checked<?php }?> /> Disabled
                                </label>

                                <label class="radio-inline">
                                    <input type='radio' class="radio" name='display_login_time' value='1' <?php if ($_smarty_tpl->tpl_vars['user']->value['display_login_time'] == '1') {?>checked<?php }?> /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"display_login_time"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="email_updates">Forward messages to email?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' class="radio" name='email_updates' value='0' <?php if ($_smarty_tpl->tpl_vars['user']->value['email_updates'] == '0') {?>checked<?php }?> /> Disabled
                                </label>

                                <label class="radio-inline">
                                    <input type='radio' class="radio" name='email_updates' value='1' <?php if ($_smarty_tpl->tpl_vars['user']->value['email_updates'] == '1') {?>checked<?php }?> /> Enabled
                                </label>
                            </div>
                        </div>
                    </div>

                    <?php if (isset($_smarty_tpl->tpl_vars['user']->value['pgp']) == TRUE) {?>
                    <div class="form">
                        <label class="control-label col-row" for="pgp_key">PGP Fingerprint</label>
                        <div class="col-row">
                            <label class="control-label col-row"><?php echo $_smarty_tpl->tpl_vars['user']->value['pgp']['fingerprint'];?>
</label>
                        </div>
                        <div class="col-row">
                            <?php if ($_smarty_tpl->tpl_vars['option_replace_pgp']->value == TRUE) {?>
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"pgp/replace",'text'=>"Replace",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                            <?php } else { ?>
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"pgp/delete",'text'=>"Delete",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                            <?php }?>
                        </div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="force_pgp_messages">Force PGP Messages</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' name='force_pgp_messages' value='0' <?php if ($_smarty_tpl->tpl_vars['user']->value['force_pgp_messages'] == '0') {?>checked<?php }?> /> Disabled
                                </label>

                                <label class="radio-inline">
                                    <input type='radio' name='force_pgp_messages' value='1' <?php if ($_smarty_tpl->tpl_vars['user']->value['force_pgp_messages'] == '1') {?>checked<?php }?> /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"force_pgp_messages"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="block_non_pgp">Block non-PGP Messages</label>
                            <div class="col-row">

                                <label class="radio-inline">
                                    <input type='radio' name='block_non_pgp' value='0' <?php if ($_smarty_tpl->tpl_vars['user']->value['block_non_pgp'] == '0') {?>checked<?php }?> /> Disabled
                                </label>

                                <label class="radio-inline">
                                    <input type='radio' name='block_non_pgp' value='1' <?php if ($_smarty_tpl->tpl_vars['user']->value['block_non_pgp'] == '1') {?>checked<?php }?> /> Enabled
                                </label>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"block_non_pgp"),$_smarty_tpl);?>
</div>
                    </div>
                    <?php } else { ?>
                    <h5><div class="form">
                      <div class="col-row">
                        <label class="control-label col-row" for="pgp">PGP Features</label>
                        <div class="col-row">
                            <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"pgp/add",'text'=>"Add a PGP key",'attr'=>''),$_smarty_tpl);?>
 to enable features such as two-factor authentication, or automatic encryption of messages.
                        </div>
                    </div>
                </div><h5/>
                    <?php }?>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type='submit' value='Update' class='btn btn-primary' />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                            </p>
                        </div>
                    </div>

                </form>
            </div></blockquote>
<?php }
}
