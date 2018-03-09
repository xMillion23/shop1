<?php
/* Smarty version 3.1.30, created on 2018-03-01 10:57:51
  from "/var/www/html/shop/application/views/smarty_templates/admin/edit_bitcoin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9822ff4c1b55_08152196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fea885345f94ef18501aec5cc08ec208f3d98df1' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/edit_bitcoin.tpl',
      1 => 1519919867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9822ff4c1b55_08152196 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="container-fluid" id="edit-bitcoin">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>


                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/edit/bitcoin",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>


                    <div class="form">
                        <div class="col-row">
                            <div class="control-label col-row" for="price_index">Use A <?php echo $_smarty_tpl->tpl_vars['coin']->value['name'];?>
 Price Index?</div>
                            <div class="col-row">
                                <select name='price_index' class="form-control" autocomplete="off">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config']->value['price_index_config'], 'index_config', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['index_config']->value) {
?>
                                        <option value='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['config']->value['price_index']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </select>
                            </div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"price_index"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="bip32_mpk">BIP32 Extended Key</label>
                            <div class="col-row">
                                <input type='text' name='bip32_mpk' class="form-control" value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['bip32_mpk'], ENT_QUOTES, 'UTF-8', true);?>
' />
                            </div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"bip32_mpk"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="bip32_iteration">Address Index</label>
                            <div class="col-row">
                                <input type='text' name='bip32_iteration' class="form-control text-center" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['bip32_iteration'], ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"bip32_iteration"),$_smarty_tpl);?>
</div>
                        <div class="col-row text-warning">Only change this if you know what you're doing!</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type='submit' name='submit_edit_bitcoin' value='Update' class='btn btn-primary' />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/bitcoin",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                            </p>
                        </div>
                    </div>
                </form>
            </div></div></blockquote>
<?php }
}
