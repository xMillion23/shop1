<?php
/* Smarty version 3.1.30, created on 2018-03-05 10:08:11
  from "/var/www/html/shop/application/views/smarty_templates/listings/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9d5d5bbea7d2_26730429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e28837db39f55711abf0bfe1ddb77059226e8e89' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/listings/edit.tpl',
      1 => 1520152612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9d5d5bbea7d2_26730429 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_form_action', null, null);
?>
listings/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_shipping_url', null, null);
?>
listings/shipping/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


            <div class="container-fluid" id="manage_items">
            <blockquote class="blockquote text-center"><div class="col-row">
                <h2>Edit Item</h2><hr/>
                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>

                </div>
                <?php echo smarty_function_form(array('method'=>"open",'action'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_form_action'),'attr'=>array('class'=>'form-horizontal')),$_smarty_tpl);?>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="name">Name</label>
                            <div class="col-row">
                                <input type='text' name='name' id="name" class='form-control' value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"name"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="description">Description</label>
                            <div class="col-row">
                                <textarea name='description' id="description" class='form-control' rows='6'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"description"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="category">Category</label>
                            <div class="col-row">
                                <?php echo $_smarty_tpl->tpl_vars['categories']->value;?>

                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"category"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="price">Price</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <span class="input-group-addon"><i><?php echo $_smarty_tpl->tpl_vars['item']->value['currency']['code'];?>
</i></span>
                                    <input type='text' class="form-control" name='price' value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['price'], ENT_QUOTES, 'UTF-8', true);?>
" />
                                </div>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"price"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="currency">Currency</label>
                            <div class="col-row">
                                <select name='currency' id="currency" class='form-control' autocomplete="off">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['currency']['id'] == $_smarty_tpl->tpl_vars['currency']->value['id']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol'];?>
)</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </select>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"currency"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="ship_from">Ship From</label>
                            <div class="col-row">
                                <?php echo $_smarty_tpl->tpl_vars['item_location_select']->value;?>

                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"ship_from"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="shipping_costs">Shipping Costs</label>
                            <div class="col-row">
                                <label class='help-inline'><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_shipping_url'),'text'=>"Configure",'attr'=>'class="btn"'),$_smarty_tpl);?>
</label>
                            </div>
                        </div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="hidden">Invisible Listing</label>
                            <div class="col-row">
                                <select name="hidden" id="hidden" class="form-control" autocomplete="off">
                                    <option value=''></option>
                                    <option value='0' <?php if ($_smarty_tpl->tpl_vars['item']->value['hidden'] == '0') {?>selected="selected" <?php }?>>No</option>
                                    <option value='1' <?php if ($_smarty_tpl->tpl_vars['item']->value['hidden'] == '1') {?>selected="selected" <?php }?>>Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"hidden"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="prefer_upfront">Prefer up-front payment?</label>
                            <div class="col-row">
                                <select name="prefer_upfront" id="prefer_upfront" class="form-control" autocomplete="off">
                                    <option value=""></option>
                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['item']->value['prefer_upfront'] == '0') {?>selected="selected" <?php }?>>No</option>
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value['prefer_upfront'] == '1') {?>selected="selected" <?php }?>>Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-row"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"prefer_upfront"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" value="Update" class="btn btn-primary" />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"listings",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                            </p>
                        </div>
                    </div>
                </form>
            </div></blockquote>
<?php }
}
