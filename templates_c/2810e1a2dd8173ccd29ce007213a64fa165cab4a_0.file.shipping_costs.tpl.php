<?php
/* Smarty version 3.1.30, created on 2018-03-04 03:28:18
  from "/var/www/html/shop/application/views/smarty_templates/listings/shipping_costs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9bae223ab420_12155940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2810e1a2dd8173ccd29ce007213a64fa165cab4a' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/listings/shipping_costs.tpl',
      1 => 1520152095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9bae223ab420_12155940 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_form_action', null, null);
?>
listings/shipping/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_form_cancel', null, null);
?>
listings/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_alter_form_errors', null, null);
echo smarty_function_form(array('method'=>"validation_errors"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


                <div class="container-fluid" id="manage_items">
                <blockquote class="blockquote text-center">
            <div class="col-row">
                            <h2>Shipping Costs: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php if ($_smarty_tpl->tpl_vars['shipping_costs']->value == TRUE) {?>
                <?php echo smarty_function_form(array('method'=>"open",'action'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_form_action'),'attr'=>array('class'=>'form-horizontal')),$_smarty_tpl);?>

                    <div class='container'>
                        <div class="card bg-light card-body form">

                            <?php if (strlen($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_alter_form_errors')) > 0) {?>
                            <div class="alert alert-danger"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_alter_form_errors');?>
</div>
                            <?php }?>
                            <h4>Review Shipping Costs</h4><hr/>

                            <div class='form'>
                            <div class='col-row'><label class="control-label col-row" for="title_dest">Destination cost offered:</label></div>
                            </div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_costs']->value, 'cost');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cost']->value) {
?>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_cost_field", null, null);
?>
cost[<?php echo $_smarty_tpl->tpl_vars['cost']->value['id'];?>
][cost]<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_enabled_field", null, null);
?>
cost[<?php echo $_smarty_tpl->tpl_vars['cost']->value['id'];?>
][enabled]<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                <div class="form">
                                    <div class="col-row">
                                        <div class='col-row'><label class="control-label col-row" for="add_price"><?php echo $_smarty_tpl->tpl_vars['cost']->value['destination_f'];?>
</label></div>
                                        <div class="col-row">
                                            <div class="input-group">
                                                <input type="text" class='form-control text-center' name="<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_cost_field');?>
" value="0.0001" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['currency']['code'];?>
"/>
                                            </div>
                                        </div>
                                        <div class="col-row"><input type="checkbox" name="<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_enabled_field');?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['cost']->value['enabled'] == '1') {?>checked<?php }?> /></div>
                                    </div><hr/>
                                    <div class="col-row text-warning">
                                        <?php echo smarty_function_form(array('method'=>"form_error",'field'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_cost_field')),$_smarty_tpl);?>

                                        <?php echo smarty_function_form(array('method'=>"form_error",'field'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_enabled_field')),$_smarty_tpl);?>

                                    </div>
                                </div>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                            <div class="form">
                                <label class="control-label col-row" for="submit"></label>
                                <div class="col-row">
                                    <p align="center">
                                        <input type='submit' name='update_shipping_cost' value='Update' class='btn btn-primary' />
                                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"listings",'text'=>"Cancel",'attr'=>'title="Cancel" class="btn btn-danger"'),$_smarty_tpl);?>

                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <?php }?>

                <?php echo smarty_function_form(array('method'=>"open",'action'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_form_action'),'attr'=>array('class'=>'form-horizontal')),$_smarty_tpl);?>

                <hr/><div class='container'>
                        <div class="card bg-light card-body form">
                        <h4>New Shipping Cost</h4>
                        <hr/>

                        <div class="form">
                            <label class="control-label col-row" for="add_location">Destination</label>
                            <div class="col-row">
                                <?php echo $_smarty_tpl->tpl_vars['locations']->value;?>

                            </div>
                            <span class="help-inline text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"add_location"),$_smarty_tpl);?>
</span>
                        </div><br/>

                        <div class="form">
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' name='add_price' class="form-control text-center" id="add_price" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['currency']['code'];?>
"/>
                                </div>
                            </div>
                            <span class="help-inline text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"add_price"),$_smarty_tpl);?>
</span>
                        </div><hr/>

                        <div class="form">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type='submit' name='add_shipping_cost' value='Add' class='btn btn-primary' />
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_form_cancel'),'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                                </p>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
        </div></blockquote>

<?php }
}
