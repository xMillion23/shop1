<?php
/* Smarty version 3.1.30, created on 2018-02-28 11:08:19
  from "/var/www/html/shop/application/views/smarty_templates/admin/ban_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a96d3f3aea4e8_16034285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43a45930331b4418d68ec8dd614e7f18e0635015' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/ban_user.tpl',
      1 => 1519834097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a96d3f3aea4e8_16034285 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_ban_user_url", null, null);
?>
admin/ban_user/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_user_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


            <div class="container-fluid" id="admin_ban_user">
            <blockquote class="blockquote text-center">
                <h2>Ban User</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php echo smarty_function_form(array('method'=>"open",'action'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_ban_user_url'),'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>

                    <p>Please confirm you wish to flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_name'], ENT_QUOTES, 'UTF-8', true);?>
 as <?php if ($_smarty_tpl->tpl_vars['user']->value['banned'] == '1') {?>un<?php }?>banned.</p>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="ban_user">Are you sure?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type='radio' name='ban_user' value='0' /> No
                                </label>
                                <label class="radio-inline">
                                    <input type='radio' name='ban_user' value='1' /> Yes
                                </label>
                            </div>
                        </div>
                        <span class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>'ban_user'),$_smarty_tpl);?>
</span>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type='submit' name="submit_ban_toggle" value="Submit" class="btn btn-primary">
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_user_url'),'text'=>'Cancel','attr'=>'title="Cancel" class="btn btn-danger"'),$_smarty_tpl);?>

                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div></blockquote>
<?php }
}
