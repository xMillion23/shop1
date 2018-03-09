<?php
/* Smarty version 3.1.30, created on 2018-03-08 06:45:18
  from "/var/www/html/shop/application/views/smarty_templates/orders/details.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa1224e54f887_28925331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55064c7255d96e4faacc2443285e185cf508b1a4' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/orders/details.tpl',
      1 => 1520509516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa1224e54f887_28925331 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_vendor_url', null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['order']->value['vendor']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_buyer_url', null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['order']->value['buyer']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


            <div class="col-row" id="order-details">            <blockquote class="blockquote text-center">
                <h2>Order Details: #<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <div class="row">
                    <!-- Display Order Items, Shipping Info, Fees -->
                    <div class="col-row">
                        <div class="table-responsive">
                            <div class="panel panel-dark">
                                <div class="card-header">
                                <?php if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Admin') {?>
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_buyer_url'),'text'=>$_smarty_tpl->tpl_vars['order']->value['buyer']['user_name'],'attr'=>''),$_smarty_tpl);?>
's order with <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_vendor_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['vendor']['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Buyer') {?>
                                    Order with <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_vendor_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['vendor']['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
:
                                <?php } elseif ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Vendor') {?>
                                    Order with <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_buyer_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['buyer']['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
:
                                <?php }?>
                                </div>

                                <table class="table table-striped">
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['items'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_item_url", null, null);
?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                        <tr>
                                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['quantity'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                            <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
 <?php echo number_format(($_smarty_tpl->tpl_vars['item']->value['quantity']*$_smarty_tpl->tpl_vars['item']->value['price_b']),8);?>
</td>
                                        </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <tr>
                                            <td></td>
                                            <td>Shipping to <?php echo $_smarty_tpl->tpl_vars['order']->value['buyer']['location_f'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
 <?php echo number_format(htmlspecialchars($_smarty_tpl->tpl_vars['fees']->value['shipping_cost'], ENT_QUOTES, 'UTF-8', true),8);?>
</td>
                                        </tr>
                                    <?php if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Vendor') {?>
                                        <tr>
                                            <td></td>
                                            <td>Fees</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
 <?php echo number_format(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['vendor_fees'], ENT_QUOTES, 'UTF-8', true),8);?>
</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><strong>Earnings</strong></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
 <?php echo number_format(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_price'], ENT_QUOTES, 'UTF-8', true),8);?>
</td>
                                        </tr>
                                    <?php } else { ?>
                                        <tr>
                                            <td></td>
                                            <td>Fees</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
 <?php echo number_format(htmlspecialchars($_smarty_tpl->tpl_vars['fees']->value['fee'], ENT_QUOTES, 'UTF-8', true),8);?>
</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><strong>Total</strong></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
 <?php echo number_format(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_price'], ENT_QUOTES, 'UTF-8', true),8);?>
</td>
                                        </tr>
                                    <?php }?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- End Display Order Items, Shipping Info, Fees -->
                        </div>
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['order']->value['address'] == TRUE) {?>
                <div class="form">
                    <div class="col-row">
                        <div class="panel panel-dark">
                            <div class="card-header">Payment Details</div>
                            <div class="card-body">
                                <div class="form">
                                    <div class="col-row">
                                        <label class="control-label col-row" for="address">Address</label>
                                        <div class="form"><?php echo $_smarty_tpl->tpl_vars['order']->value['address'];?>
</div>
                                    </div><hr/>
                                    <div class="form">
                                        <label class="col-row" for="redeem_script">Redeem Script</label>
                                        <div class="col-row"><textarea id="redeem_script" class="form-control text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['redeemScript'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></div>
                                    </div><hr/>
                                    <?php if ($_smarty_tpl->tpl_vars['my_multisig_key']->value['provider'] == 'Manual') {?>
                                    <div class="form">
                                        <label class="col-row" for="import_command">Import Command</label>
                                        <div class="col-row">
                                            <textarea id="import_command" class="form-control text-center">addmultisigaddress 2 '["<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redeem_script']->value['keys'][0], ENT_QUOTES, 'UTF-8', true);?>
","<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redeem_script']->value['keys'][1], ENT_QUOTES, 'UTF-8', true);?>
","<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redeem_script']->value['keys'][2], ENT_QUOTES, 'UTF-8', true);?>
"]'</textarea>
                                        </div>
                                    </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['my_multisig_key']->value['provider'] == 'JS') {?>
                                    <noscript>
                                        <div class="form">
                                            <label class="col-row" for="import_command">Import Command</label>
                                            <div class="col-row">
                                                <textarea id="import_command" class="form-control text-center">addmultisigaddress 2 '["<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redeem_script']->value['keys'][0], ENT_QUOTES, 'UTF-8', true);?>
","<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redeem_script']->value['keys'][1], ENT_QUOTES, 'UTF-8', true);?>
","<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redeem_script']->value['keys'][2], ENT_QUOTES, 'UTF-8', true);?>
"]'</textarea>
                                            </div>
                                        </div>
                                    </noscript>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['order']->value['final_transaction_id'] !== '') {?>
                                    <div class="form">
                                        <label class="col-row" for="import_command">Final Transaction</label>
                                        <div class="col-row">
                                            <?php echo $_smarty_tpl->tpl_vars['order']->value['final_transaction_id'];?>

                                        </div>
                                    </div>
                                    <?php }?>
                                </div><hr/>
                                <div class="col-row">
                                    <?php if (isset($_smarty_tpl->tpl_vars['qr']->value) == TRUE) {?>
                                        Scan to Pay: <a href='<?php echo $_smarty_tpl->tpl_vars['payment_url']->value;?>
'><img style="width:50%" src='data:image/png;base64,<?php echo $_smarty_tpl->tpl_vars['qr']->value;?>
' /></a>
                                        <?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];
echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_price'], ENT_QUOTES, 'UTF-8', true);?>

                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['order']->value['paid_time'] !== '' && $_smarty_tpl->tpl_vars['order']->value['final_transaction_id'] == null) {?>
                <div class="form">
                    <?php echo smarty_function_form(array('method'=>"open",'action'=>$_smarty_tpl->tpl_vars['action_page']->value,'attr'=>'class="form-horizontal" name="sign_transaction" id="sign_transaction"'),$_smarty_tpl);?>

                        <div class="col-row">
                            <div class="table-responsive">
                                <div class="panel panel-dark">
                                    <div class="card-header">Add Signature</div>
                                    <div class="card-body">
                                        <div class="col-row">
                                            <!-- Display Tx Info -->
                                            <div class='form'>
                                                <label class="col-row" for="paying">Paying:</label>
                                                <div class='col-row'>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['raw_tx']->value['vout'], 'arr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
?>
                                                        <div class='form'>

                                                        <?php $_smarty_tpl->_assignInScope('addr', $_smarty_tpl->tpl_vars['arr']->value['scriptPubKey']['addresses'][0]);
?>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['addrs']->value[$_smarty_tpl->tpl_vars['addr']->value]) == FALSE) {?>
                                                            <div class='col-row'>Unknown!</div>
                                                            <div class='col-row'><?php echo $_smarty_tpl->tpl_vars['coin']->value['symbol'];?>
 <?php echo $_smarty_tpl->tpl_vars['arr']->value['value'];?>
</div>
                                                            <div class='col-row'><?php echo $_smarty_tpl->tpl_vars['addr']->value;?>
</div>
                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['addrs']->value[$_smarty_tpl->tpl_vars['addr']->value] == 'admin') {?>
                                                                <div class='col-row'>Fees</div>
                                                                <div class='col-row'><?php echo $_smarty_tpl->tpl_vars['coin']->value['symbol'];?>
 <?php echo $_smarty_tpl->tpl_vars['arr']->value['value'];?>
</div>
                                                                <div class='col-row'><?php echo $_smarty_tpl->tpl_vars['addr']->value;?>
</div>
                                                            <?php } elseif (in_array($_smarty_tpl->tpl_vars['addrs']->value[$_smarty_tpl->tpl_vars['addr']->value],array('buyer','vendor'))) {?>
                                                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_pay_user_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->tpl_vars['addrs']->value[$_smarty_tpl->tpl_vars['addr']->value]]['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_pay_user_name", null, null);
echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->tpl_vars['addrs']->value[$_smarty_tpl->tpl_vars['addr']->value]]['user_name'], ENT_QUOTES, 'UTF-8', true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                                                <div class='col-row'><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_pay_user_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_pay_user_name'),'attr'=>''),$_smarty_tpl);?>
</div>
                                                                <div class='col-row'><?php echo $_smarty_tpl->tpl_vars['coin']->value['symbol'];?>
 <?php echo $_smarty_tpl->tpl_vars['arr']->value['value'];?>
</div>
                                                                <div class='col-row'><?php echo $_smarty_tpl->tpl_vars['addr']->value;?>
</div>
                                                            <?php } else { ?>
                                                                <div class='col-row'>Unknown</div>
                                                            <?php }?>
                                                        <?php }?>


                                                        </div>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                </div>
                                            </div>
                                            <!-- End Tx Info -->
                                            <?php if (isset($_smarty_tpl->tpl_vars['invalid_transaction_error']->value) == TRUE) {?>
                                            <div class='form'>
                                                <div class="col-row">
                                                    <?php echo $_smarty_tpl->tpl_vars['invalid_transaction_error']->value;?>

                                                </div>
                                            </div>
                                            <?php }?>

                                            <?php echo $_smarty_tpl->tpl_vars['sign_form_output']->value;?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <?php }?>
            </div></blockquote>
<?php }
}
