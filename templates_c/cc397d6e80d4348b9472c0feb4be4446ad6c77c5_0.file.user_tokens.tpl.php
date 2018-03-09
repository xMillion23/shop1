<?php
/* Smarty version 3.1.30, created on 2018-03-01 16:06:57
  from "/var/www/html/shop/application/views/smarty_templates/admin/user_tokens.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a986b714f5ab0_85616524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc397d6e80d4348b9472c0feb4be4446ad6c77c5' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/user_tokens.tpl',
      1 => 1519938412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a986b714f5ab0_85616524 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
?>
           <div class="container-fluid" id="registration-tokens">
           <blockquote class="blockquote text-center">
           <div class="col-row">

                <h2><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'admin/users','text'=>'Back','attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>
<br/>Registration Invites</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <legend>Create Registration Invites</legend>
                <?php echo smarty_function_form(array('method'=>"open",'action'=>'admin/tokens','attr'=>'class="form-horizontal"'),$_smarty_tpl);?>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="user_role">Details:</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <span class="input-group-addon"><i>Role</i></span>
                                    <select class="form-control" id="user_role" name="user_role">
                                        <option value=""></option>
                                        <option value="1">Buyer</option>
                                        <option value="2">Vendor</option>
                                        <option value="3">Administrator</option>
                                    </select>
                                </div>
                            </div><br/>
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' class='form-control text-center' name='entry_payment' value='default' placeholder="Cost"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>'user_role'),$_smarty_tpl);
echo smarty_function_form(array('method'=>"form_error",'field'=>'entry_payment'),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row">Comment:</label>
                            <div class="col-row">
                                <input type="text" name="token_comment" value="" class="form-control text-center" placeholder="Optional. This will not be shown to the user." />
                            </div>
                        </div>
                        <div class="col-row"></div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" name="create_token" value="Create" class="btn btn-primary" />
                            </p>
                        </div>
                    </div>
                </form>

                <?php if ($_smarty_tpl->tpl_vars['tokens']->value == TRUE) {?>
                <table class='table' cellspacing='0'>
                    <thead>
                    <tr>
                        <th>Link</th>
                        <th>Delete</th>
                        <th>Role</th>
                        <th>Fee</th>
                        <th>Comment</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tokens']->value, 'token');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['token']->value) {
?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_registration_url", null, null);
?>
register/<?php echo $_smarty_tpl->tpl_vars['token']->value['token_content'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/user_tokens",'attr'=>''),$_smarty_tpl);?>

                        <tr>
                            <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_registration_url'),'text'=>"Right click to copy",'attr'=>'class="btn btn-default btn-sm"'),$_smarty_tpl);?>
</td>
                            <td><input type="submit" name="delete_token" value="Delete Token" class="btn btn-danger btn-sm" />
                                <input type="hidden" name="delete_token_content" value="<?php echo $_smarty_tpl->tpl_vars['token']->value['token_content'];?>
" />
                            <td><?php echo $_smarty_tpl->tpl_vars['token']->value['role'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['coin']->value['symbol'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value['entry_payment'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                        </tr>
                        </form>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>
                <?php }?>
            </div></div></blockquote>
<?php }
}
