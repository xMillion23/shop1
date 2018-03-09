<?php
/* Smarty version 3.1.30, created on 2018-03-01 15:25:51
  from "/var/www/html/shop/application/views/smarty_templates/admin/tos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9861cf5d4349_24888543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab57e446e7a5022c9d30ed53fdf89cc70a7d6d31' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/tos.tpl',
      1 => 1519935947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9861cf5d4349_24888543 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
?>
            <div class="container-fluid" id="admin-tos-form">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                <h2><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'admin','text'=>'Back','attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>
 <br/>Terms Of Service</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <div class="form">
                    <div class="col-row">Here you can set whether a terms of service must be agreed to before
                        users can register an account. Once the setting is enabled, the terms of service
                        agreement can be edited.
                    </div>
                </div><hr/>

                <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/tos",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>

                    <div class="form">
                        <div class="col-row">
                            <label for="terms_of_service" class="control-label col-row">Terms of Service</label>
                            <div class="col-row"><textarea class="form-control" name="terms_of_service" id="terms_of_service" rows="7" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tos']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea></div>
                        </div>
                        <div class="col-row">
                            <?php echo smarty_function_form(array('method'=>"form_error",'field'=>"terms_of_service"),$_smarty_tpl);?>

                        </div>
                    </div>

                    <div class='form'>
                        <div class="col-roe">
                            <label for="terms_of_service_toggle" class="control-label col-row">Display TOS?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type="radio" id="terms_of_service_toggle" name="terms_of_service_toggle" value="0" <?php if ($_smarty_tpl->tpl_vars['config']->value['terms_of_service_toggle'] == FALSE) {?>checked="checked"<?php }?> /> Disabled
                                </label>

                                <label class="radio-inline">
                                    <input type='radio' id="terms_of_service_toggle" name='terms_of_service_toggle' value='1' <?php if ($_smarty_tpl->tpl_vars['config']->value['terms_of_service_toggle'] == TRUE) {?>checked="checked"<?php }?>/> Enabled
                                </label>
                            </div>
                        </div>
                        <div class="col-row">
                            <?php echo smarty_function_form(array('method'=>"form_error",'field'=>"terms_of_service_toggle"),$_smarty_tpl);?>

                        </div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type='submit' name='tos_update' value='Update' class='btn btn-primary' />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/edit",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                            </p>
                        </div>
                    </div>
                </form>
            </div></div></blockquote>
<?php }
}
