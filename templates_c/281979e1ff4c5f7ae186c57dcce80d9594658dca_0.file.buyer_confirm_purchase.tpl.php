<?php
/* Smarty version 3.1.30, created on 2018-03-08 04:23:50
  from "/var/www/html/shop/application/views/smarty_templates/orders/buyer_confirm_purchase.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa101260e8040_25808018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '281979e1ff4c5f7ae186c57dcce80d9594658dca' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/orders/buyer_confirm_purchase.tpl',
      1 => 1520426664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa101260e8040_25808018 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
?>
           <div class="col-row" id="my-orders">
                <blockquote class="blockquote text-center">
                                <h2>Review Order</h2><hr/>

                    <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                    <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php if ($_smarty_tpl->tpl_vars['order_type']->value == "upfront") {?>
<p align="justify"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['vendor']['user_name'], ENT_QUOTES, 'UTF-8', true);?>
 has requested this order is paid up-front. After
payment is made to the order address, you will need authorize release of the funds before the
order is dispatched.</p>
                    <?php } else { ?>
<p align="justify">This order is proceeding via <u><strong> escrow.</u></strong> Once the payment has been processed the vendor will notify you once the order has been dispatched. When received you can release the funds to the vendor.
</p>
<?php }?><hr/>

                    <p align="justify">Review the order details, and enter your address if you are happy to proceed. Once confirmed, you will be able to pay to the order address.</p><hr/>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_purchase_url', null, null);
?>
purchases/confirm/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_vendor_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['order']->value['vendor']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


                    <div class="col-row">

                        <div class="col-row">
                            <div class="table-responsive">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Order with <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_vendor_url'),'text'=>$_smarty_tpl->tpl_vars['order']->value['vendor']['user_name'],'attr'=>''),$_smarty_tpl);?>
:</div><br/>

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
 x</td>
                                                <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['quantity']*$_smarty_tpl->tpl_vars['item']->value['price_b'],8);?>
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
 <?php echo $_smarty_tpl->tpl_vars['fees']->value['shipping_cost'];?>
</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Fees</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
 <?php echo $_smarty_tpl->tpl_vars['fees']->value['fee'];?>
</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><strong>Total</strong></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div><hr/>

                    <div class="col-row">

                    <?php echo smarty_function_form(array('method'=>"open",'action'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_purchase_url'),'attr'=>array('name'=>'placeOrderForm','id'=>'placeOrderForm','class'=>'form-horizontal')),$_smarty_tpl);?>


                        <div class="col-row">
                            <div class="form-group">
                                <div class="col-row">
                                    <label class="control-label col-row" for="buyer_address">Shipping Address:</label>
                                    <div class="col-row">
                                        <textarea name='buyer_address' rows='5' class='form-control'></textarea>
                                    </div>
                                </div>
                                <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>'form_error','field'=>'buyer_address'),$_smarty_tpl);?>
</div>
                            </div>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['buyer_payout']->value == FALSE) {?>
                        <hr/>

                        <div class="form">
                            <div class="col-row">
                                <div class="col-row">You don't have a refund address set up at the moment. Please enter one now, along with your password, in case you need a refund at any point.</div>
                            </div><hr/>
                            <div class="form">
                                <div class="col-row">
                                    <label class="control-label col-row" for="buyer_payout">Refund Address:</label>
                                    <div class="col-row">
                                        <input type="text" name="buyer_payout" id="buyer_payout" class="form-control text-center" value="" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>'form_error','field'=>'buyer_payout'),$_smarty_tpl);?>
</div>
                            </div><br/>
                            <div class="form">
                                <div class="col-row">
                                    <label class="control-label col-row" for="password">Password:</label>
                                    <div class="col-row">
                                        <input type="password" name="password" id="password" class="form-control text-center" value="" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>'form_error','field'=>'password'),$_smarty_tpl);?>
</div>
                            </div>
                        </div>
                        <?php }?>

                        <?php if (isset($_smarty_tpl->tpl_vars['order']->value['vendor']['pgp']) == TRUE) {?>
                        <textarea style="display:none;" name="public_key"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['vendor']['pgp']['public_key'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        <?php }?>

                        <div class="form">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type="submit" class="btn btn-success" value='Place Order' <?php if (isset($_smarty_tpl->tpl_vars['order']->value['vendor']['pgp']) == TRUE) {?>onclick='messageEncrypt()'<?php }?> />
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>'purchases','text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                                </p>
                            </div>
                        </div>

                    </form>
                </div></blockquote>
<?php }
}
