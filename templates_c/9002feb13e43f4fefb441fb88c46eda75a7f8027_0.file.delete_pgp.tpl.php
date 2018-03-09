<?php
/* Smarty version 3.1.30, created on 2018-03-01 04:01:44
  from "/var/www/html/shop/application/views/smarty_templates/accounts/delete_pgp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a97c1782909b6_76161832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9002feb13e43f4fefb441fb88c46eda75a7f8027' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/accounts/delete_pgp.tpl',
      1 => 1519894899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a97c1782909b6_76161832 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="container-fluid" id="delete-pgp">
            <div class="col-row">
            <blockquote class="blockquote text-center">

                <h2>Delete PGP Key</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php echo smarty_function_form(array('method'=>"open",'action'=>"pgp/delete",'attr'=>array('class'=>'form-horizontal')),$_smarty_tpl);?>

                    Your PGP key can be used to protect your account with two-factor authentication, and for automatic encryption of private messages. Removing your PGP key will disable these features. Confirm that you wish to delete your key:

                    <hr/><div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="delete">Are you sure?</label>
                            <div class="col-row">
                                <label class="radio-inline">
                                    <input type="radio" name="delete" value="0" checked /> No
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="delete" value="1" /> Yes
                                </label>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"delete"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" value="Update" class="btn btn-primary" />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                            </p>
                        </div>
                    </div>

                </form>
            </div></div></blockquote>
<?php }
}
