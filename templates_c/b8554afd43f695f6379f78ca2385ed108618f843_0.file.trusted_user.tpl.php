<?php
/* Smarty version 3.1.30, created on 2018-03-01 15:37:41
  from "/var/www/html/shop/application/views/smarty_templates/admin/trusted_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a986495127d05_10874609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8554afd43f695f6379f78ca2385ed108618f843' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/trusted_user.tpl',
      1 => 1519936657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a986495127d05_10874609 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
?>
                    <div class="container-fluid" id="admin-trusted-user">
                    <blockquote class="blockquote text-center">
                    <div class="col-row">
                <h3><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/items",'text'=>"Back",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>
<br/>Trusted User Settings</h3><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                   <div class="col-row">
                    <p align='justify'>This form allows you to define what makes a 'trusted user'. This is used to determine if a vendor should be allowed to request up-front payment for particular items, or early finalization of escrow orders. </p><hr/>
                    <p align='justify'>To ignore a particular attribute simply set it to zero.</p><hr/>
                   </div><hr/>


                <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/trusted_user",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="trusted_user_rating">Required rating:</label>
                            <div class="col-row">
                                <input type='text' class='form-control text-center' id='trusted_user_rating' name='trusted_user_rating' value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['trusted_user_rating'], ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"trusted_user_rating"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="review_count">Review count:</label>
                            <div class="col-row">
                                <input type='text' class='form-control text-center' id='review_count' name='trusted_user_review_count' value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['trusted_user_review_count'], ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>'trusted_user_review_count'),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="completed_orders">Minimum complete orders:</label>
                            <div class="col-row">
                                <input type='text' class='form-control text-center' id='completed_orders' name='trusted_user_order_count' value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['trusted_user_order_count'], ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>'trusted_user_order_count'),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" name='trusted_user_update' value="Update" class="btn btn-primary" />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/items",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                            </p>
                        </div>
                    </div>
                </form>
            </div></div></blockquote>
<?php }
}
