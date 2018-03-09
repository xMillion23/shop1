<?php
/* Smarty version 3.1.30, created on 2018-03-09 07:54:51
  from "/var/www/html/shop/application/views/smarty_templates/users/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa2841b685a47_32308293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01bbc62072835a4028ae454fdef1d19bb1cea6d4' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/users/login.tpl',
      1 => 1520600088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa2841b685a47_32308293 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
              <div class="col-row">
                <blockquote class="blockquote text-center"><h2>Login</h2><hr/>
                <?php $_smarty_tpl->_assignInScope('defaultMessage', "Enter your details to continue: ");
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>

                <?php echo smarty_function_form(array('method'=>"open",'action'=>"login",'attr'=>array('class'=>'form-horizontal','name'=>'loginForm')),$_smarty_tpl);?>

                    </div>
                     <fieldset>
                        <div class="form">
                           <div class="col-row">
                                <h5><label for="control-label col-row" for="user_name">Username</label></h5>
                                  <div class="col-row">
                                    <input type='text' class="form-control text-center" placeholder="Username" name='user_name' value="<?php echo smarty_function_form(array('method'=>"set_value",'field'=>"user_name"),$_smarty_tpl);?>
" />
                                </div>
                            </div>
                            <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"user_name"),$_smarty_tpl);?>
</div>
                        </div><br/>

                        <div class="form">
                            <div class="col-row">
                                <h5><label for="control-label col-row" for="password">Password</label></h5>
                                <div class="col-row">
                                    <input type='password' class="form-control text-center" placeholder="Password" name='password' value='' autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"password"),$_smarty_tpl);?>
</div>
                        </div><br/>

                       <?php if ($_smarty_tpl->tpl_vars['display_captcha']->value == TRUE) {?><!-- Captcha -->
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
                                    <input type="text" class="form-control text-center" id="captcha" name="captcha" placeholder="Please verify that you are human"/>
                              
                            </div>
                            <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"captcha"),$_smarty_tpl);?>
</div>
                        </div></div>
                        <?php }?><!-- /Captcha -->

                        <noscript><div style="display:none"><input type='hidden' name='js_disabled' value='1' /></div></noscript>

                        <div class="form">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type="submit" class="btn btn-success" value="Login" />
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"register",'text'=>"Register",'attr'=>'title="Register" class="btn btn-primary"'),$_smarty_tpl);?>

                                 </p>
                             </div>
                         </div>
                </fieldset>
            </div></blockquote>
<?php }
}
