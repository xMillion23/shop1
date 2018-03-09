<?php
/* Smarty version 3.1.30, created on 2018-03-01 17:38:10
  from "/var/www/html/shop/application/views/smarty_templates/users/pgp_factor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9880d263b327_13600945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fb5a9f04bcf3329cade3a0318a4c4aee6d09873' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/users/pgp_factor.tpl',
      1 => 1519943771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9880d263b327_13600945 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
          <div class="col-row">
            <blockquote class="blockquote text-center">
				<h2>Two Factor Authentication</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', "Decrypt the following PGP text and enter it below: ");
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php echo smarty_function_form(array('method'=>"open",'action'=>"login/pgp_factor",'attr'=>array('class'=>'form-horizontal','name'=>'pgp_factor')),$_smarty_tpl);?>

                    <hr/><fieldset>
                        <div class="form">
                            <div class="control-label col-row" for="challenge"></div>
                            <div class="col-row">
                                <div class="form"><textarea class="form-control text-center" rows="13"><?php echo $_smarty_tpl->tpl_vars['challenge']->value;?>
</textarea></div>
                            </div>
                        </div><hr/>

					    <div class="form">
                            <div class="col-row">
                                <label class="control-label col-row" for="answer">Token</label>
                                <div class="col-row">
                                    <input type="text" id="answer" class="form-control text-center" placeholder="Token" name='answer' size='12'/>
                                </div>
                            </div>
                            <div class="col-row"><div class="text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"answer"),$_smarty_tpl);?>
</div></div>
                        


                        <div class="form">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                    <input type="submit" class="btn btn-primary "name="submit_pgp_token" value="Continue" />
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"logout",'text'=>"Cancel",'attr'=>'title="Cancel" class="btn btn-danger"'),$_smarty_tpl);?>

                            </div>
                        </div>

				    </fieldset>
				</form>
			</div></blockquote>
<?php }
}
