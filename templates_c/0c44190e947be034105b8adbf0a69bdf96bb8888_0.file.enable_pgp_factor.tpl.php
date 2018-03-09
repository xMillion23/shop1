<?php
/* Smarty version 3.1.30, created on 2018-03-07 01:36:56
  from "/var/www/html/shop/application/views/smarty_templates/accounts/enable_pgp_factor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9f8888505219_02179262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c44190e947be034105b8adbf0a69bdf96bb8888' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/accounts/enable_pgp_factor.tpl',
      1 => 1520399351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9f8888505219_02179262 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="col-row">
                <blockquote class="blockquote text-center">
                
                <h2>Two Factor Authentication</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', "To activate two factor authentication, decrypt the following challenge and paste it in the box below:");
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php echo smarty_function_form(array('method'=>"open",'action'=>"account/pgp_factor",'attr'=>array('class'=>'form-horizontal','name'=>'loginForm')),$_smarty_tpl);?>


                    <hr/><div class="form">
                        <div class="control-label col-row" for="challenge"></div>
                        <div class="col-row">
                            <textarea name="public_key" id="public_key" class="form-control text-center" rows="13" >
                            <?php echo $_smarty_tpl->tpl_vars['challenge']->value;?>
</textarea>
                        </div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="answer">Token</label>
                            <div class="col-row">
                                <input type="text" id='answer' class="form-control text-center" placeholder="Token" name='answer'/>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"answer"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                                <input type="submit" name="submit_pgp_token" class="btn btn-primary" value="Continue" />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account/two_factor",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                        </div>
                    </div>
                </form>
            </div></blockquote>
<?php }
}
