<?php
/* Smarty version 3.1.30, created on 2018-03-02 06:43:26
  from "/var/www/html/shop/application/views/smarty_templates/authorize/password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9938de2d4763_49330115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54d4dff75055fcc66511f19440b257484e42510d' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/authorize/password.tpl',
      1 => 1519990993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9938de2d4763_49330115 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
                <div class="col-row">
                <blockquote class="blockquote text-center">
                <div class="col-row">
                <h2>Authorize Request</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', "As this page has heightened security, you must enter your login details to continue.");
?>
                <div class="text-warning"><?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>
</div>

                <?php echo smarty_function_form(array('method'=>"open",'action'=>"authorize",'attr'=>array('class'=>'form-horizontal','name'=>'authorizeForm')),$_smarty_tpl);?>


                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="password">Password</label>
                            <div class="col-row">
                                <input type="password" class="form-control text-center" placeholder="Password" name="password" value="" />
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"password"),$_smarty_tpl);?>
</div>
                    </div><br/>

                    <!-- Captcha -->
                    <div class="form">
                        <label class="control-label col-row" for="captcha_img">Captcha</label>
                        <div class="col-row">
                            <p align="center">
                                <?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>

                            </p>
                        </div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="captcha"></label>
                            <div class="col-row">
                                <input type="text" class="form-control text-center" placeholder="Please verify that you are human" id="captcha" name="captcha" />
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"captcha"),$_smarty_tpl);?>
</div>
                    </div>
                    <!-- /Captcha -->

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" class="btn btn-primary" value="Continue" />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                            </p>
                        </div>
                    </div>

                </form>
            </div></div></blockquote>
<?php }
}
