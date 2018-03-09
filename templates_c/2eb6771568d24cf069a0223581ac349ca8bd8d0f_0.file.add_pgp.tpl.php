<?php
/* Smarty version 3.1.30, created on 2018-03-06 23:55:16
  from "/var/www/html/shop/application/views/smarty_templates/accounts/add_pgp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9f70b4cf57a1_64493665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eb6771568d24cf069a0223581ac349ca8bd8d0f' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/accounts/add_pgp.tpl',
      1 => 1520369786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9f70b4cf57a1_64493665 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="col-row" id="add-public-key">
                <blockquote class="blockquote text-center">
                
                <h2>Add PGP Public Key</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <div class="text-warning"><?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>
</div>

                <?php echo smarty_function_form(array('method'=>"open",'action'=>"pgp/add",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="public_key">Public Key</label>
                            <div class="form">
                                <textarea name="public_key" id="public_key" class="form-control text-center" rows="13" ></textarea>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>'form_error','field'=>'public_key'),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                                <input type="submit" value="Submit" class="btn btn-primary" />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account",'text'=>"Cancel",'attr'=>'title="Cancel" class="btn btn-danger"'),$_smarty_tpl);?>

                        </div>
                    </div>

                </form>
            </div></blockquote>
<?php }
}
