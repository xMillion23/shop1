<?php
/* Smarty version 3.1.30, created on 2018-03-01 12:33:06
  from "/var/www/html/shop/application/views/smarty_templates/admin/maintenance.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a983952aa7e25_32300519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '609ce0e4b3708713cbd9186131ffe3b128f2ece1' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/maintenance.tpl',
      1 => 1519925583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a983952aa7e25_32300519 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="container-fluid" id="admin_maintenance">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                <h2>Maintenance Settings</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <p>You can use this panel to put the website into maintenance mode. Guests will not be able to view the site, and non-administrative users will be logged out. Once re-enabled, your previous settings will be restored.</p>

                <hr/><p>If maintenance mode has been triggered by the monero daemon, or due to an alert reported on github, a message will be disabled informing you of the reason and giving advice.</p>

                <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/maintenance",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>

                    <hr/><div class="panel panel-<?php if ($_smarty_tpl->tpl_vars['config']->value['maintenance_mode'] == TRUE) {?>danger<?php } else { ?>success<?php }?>">
                        <div class="panel-heading">Current Status: <?php if ($_smarty_tpl->tpl_vars['config']->value['maintenance_mode'] == TRUE) {?>site offline<?php } else { ?>site online<?php }?></div>
                        <div class="panel-body">

                            <div class="form">
                                <div class="col-row">
                                    <div class='col-row'></div>
                                    <div class='col-row'>
                                        <div class="input-group">
                                            <select name='maintenance_mode' class="form-control" autocomplete='off'>
                                                <option value=''></option>
                                                <option value='0'<?php if ($_smarty_tpl->tpl_vars['config']->value['maintenance_mode'] == '1') {?> selected="selected"<?php }?>>Deactivate maintenance mode</option>
                                                <option value='1'<?php if ($_smarty_tpl->tpl_vars['config']->value['maintenance_mode'] == '0') {?> selected="selected"<?php }?>>Activate maintenance mode</option>
                                            </select>
                                        </div>
                                    </div><br/>
                                    <div class='col-row'><input type='submit' name='set_maintenance_mode' value='Update' class="btn btn-primary" />
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>
</div>
                                </div>
                                <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"maintenance_mode"),$_smarty_tpl);?>
</div>
                            </div>

                        </div>
                    </div>
                </form>
            </div></div></blockquote>
<?php }
}
