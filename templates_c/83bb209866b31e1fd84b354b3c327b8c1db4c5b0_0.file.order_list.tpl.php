<?php
/* Smarty version 3.1.30, created on 2018-03-07 07:20:41
  from "/var/www/html/shop/application/views/smarty_templates/orders/order_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9fd91913d785_84771102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83bb209866b31e1fd84b354b3c327b8c1db4c5b0' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/orders/order_list.tpl',
      1 => 1520425239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9fd91913d785_84771102 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="col-row" id="my-orders">
                <blockquote class="blockquote text-center">
                <h2><?php if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Vendor') {?>My Orders<?php } else { ?>My Purchases<?php }?></h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php if ($_smarty_tpl->tpl_vars['orders']->value == TRUE) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_order_details_url', null, null);
if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Buyer') {?>purchases/details/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];
} else { ?>orders/details/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_vendor_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['order']->value['vendor']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_buyer_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['order']->value['vendor']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_dispute_url', null, null);
if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Buyer') {?>purchases/dispute/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];
} else { ?>orders/dispute/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_order_id_fmt', null, null);
?>
#<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <!-- Order Box : Buyer : 1-->
                        <?php echo smarty_function_form(array('method'=>'open','action'=>'purchases','attr'=>'class="form-horizontal"'),$_smarty_tpl);?>

                        <div class="col-row">

                            <!-- Order Header: Buyer, Items, Buttons -->
                            <div class="col-row">
                                <div class="col-row">
                                    <!--<div class="row">
                                        <div class="col-4"><strong>ID</strong></div>
                                        <div class="col-8"><a href='#'>1</a></div>
                                    </div>-->

                                    <?php if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Buyer') {?>
                                    <div class="form">
                                        <div class="col-row"><strong>Vendor</strong></div>
                                        <div class="col-row" style='word-wrap: break-word;'><?php echo smarty_function_url(array('type'=>'anchor','url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_vendor_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['vendor']['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
</div>
                                    </div><hr/>
                                    <?php } else { ?>
                                    <div class="form">
                                        <div class="col-row"><strong>Buyer</strong></div>
                                        <div class="col-row" style='word-wrap: break-word;'><?php echo smarty_function_url(array('type'=>'anchor','url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_buyer_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['buyer']['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
</div>
                                    </div><hr/>
                                    <?php }?>

                                    <div class="form">
                                        <div class="col-row"><strong>Price</strong></div>
                                        <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['current_user']->value['currency']['symbol'];
echo $_smarty_tpl->tpl_vars['order']->value['price_l'];?>
</div>
                                    </div><hr/>

                                    <div class="form">
                                        <div class="col-row"><strong>Updated</strong></div>
                                        <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['order']->value['time_f'];?>
</div>
                                    </div>
                                </div><hr/>

                                   <div class="form">
                                    <div class="col-row"><strong>Items</strong></div>
                                    <div class="col-row">
                                        <ul>
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

                                                <?php if ($_smarty_tpl->tpl_vars['order']->value['progress'] == '0') {?>
                                                    <select name="quantity[<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];?>
]" autocomplete="off">
                                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (0) : 0-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                                            <option value='<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['item']->value['quantity']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                        <?php }
}
?>

                                                    </select> -
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['hash'] == 'removed') {?>
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php } else { ?>
                                                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>

                                                    <?php }?>
                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
 x <?php if ($_smarty_tpl->tpl_vars['item']->value['hash'] == 'removed') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);
} else {
echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);
}?>
                                                <?php }?>
                                                <br />
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </ul>
                                    </div>
                                </div>
                            </div><hr/>
                            <div class="col-row">
                                <?php if ($_smarty_tpl->tpl_vars['order']->value['progress'] == 0) {?>

                                    <input type="submit" class="btn btn-primary btn-block" name="recount" value="Update" />
                                    <input type="submit" class="btn btn-success btn-block" name="place_order" value="Confirm" />
                                    <input type="hidden" name="recount_order_id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" />
                                    <input type="hidden" name="place_order_id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" />
                                <?php } else { ?>
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_order_details_url'),'text'=>"Details",'attr'=>'class="btn btn-primary btn-block"'),$_smarty_tpl);?>

                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Buyer' && $_smarty_tpl->tpl_vars['order']->value['progress'] == '1') {?>
                                    <input type="submit" class="btn btn-primary btn-block" name="cancel_order" value="Cancel" />
                                    <input type="hidden" name="cancel_order_id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" />
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Vendor' && $_smarty_tpl->tpl_vars['order']->value['progress'] == 1) {?>
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_accept_url", null, null);
?>
orders/accept/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_accept_url'),'text'=>"Accept Order",'attr'=>'class="btn btn-success btn-block"'),$_smarty_tpl);?>

                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['order']->value['progress'] >= 3 && $_smarty_tpl->tpl_vars['order']->value['progress'] < 6) {?>
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_dispute_url'),'text'=>"Raise Dispute",'attr'=>'class="btn btn-default btn-block"'),$_smarty_tpl);?>

                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Buyer' && $_smarty_tpl->tpl_vars['order']->value['progress'] == 5 && $_smarty_tpl->tpl_vars['order']->value['vendor_selected_upfront'] == TRUE) {?>
                                    <input type="submit" class="btn btn-primary btn-block" name="received_upfront_order" value="Received" />
                                    <input type="hidden" name="received_upfront_order_id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" />
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['order']->value['progress'] == 6) {?>
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_dispute_url'),'text'=>"View Dispute",'attr'=>'class="btn btn-danger btn-block"'),$_smarty_tpl);?>

                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['review_auth']->value[$_smarty_tpl->tpl_vars['order']->value['id']]) == TRUE) {?>
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_review_form_url', null, null);
?>
reviews/form/<?php echo $_smarty_tpl->tpl_vars['review_auth']->value[$_smarty_tpl->tpl_vars['order']->value['id']];?>
/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                    <?php echo smarty_function_url(array('type'=>'anchor','url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_review_form_url'),'text'=>'Leave Feedback','attr'=>'class="btn btn-success btn-block"'),$_smarty_tpl);?>

                                <?php }?>
                            </div>

                            <div class="row">&nbsp;
                            </div>
                            <!-- Order Body -->
                            <div class="form">
                                <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['order']->value['progress_message'];?>
</div>
                                <div class="form">
                                    <div class=" bs-wizard" style="border-bottom:0;">
                                        <div class=" bs-wizard-step <?php if ($_smarty_tpl->tpl_vars['order']->value['progress'] > 1) {?>complete<?php } else { ?>active<?php }?>">
                                            <div class="text-center bs-wizard-stepnum">Step 1</div>
                                            <div class="progress"><div class="progress-bar"></div></div>
                                            <a href="#" class="bs-wizard-dot"></a>
                                            <div class="bs-wizard-info text-center">Order accepted</div>
                                        </div>

                                        <div class=" bs-wizard-step <?php if ($_smarty_tpl->tpl_vars['order']->value['progress'] > 2) {?>complete<?php } else { ?>disabled<?php }?>"><!-- complete -->
                                            <div class="text-center bs-wizard-stepnum">Step 2</div>
                                            <div class="progress"><div class="progress-bar"></div></div>
                                            <a href="#" class="bs-wizard-dot"></a>
                                            <div class="bs-wizard-info text-center">Payment made</div>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['order']->value['refund_time'] !== '') {?>
                                            <div class=" bs-wizard-step <?php if ($_smarty_tpl->tpl_vars['order']->value['progress'] == 7) {?>complete<?php } else { ?>disabled<?php }?>">
                                                <div class="text-center bs-wizard-stepnum">Step 3</div>
                                                <div class="progress"><div class="progress-bar"></div></div>
                                                <a href="#" class="bs-wizard-dot"></a>
                                                <div class="bs-wizard-info text-center">Refund complete</div>
                                            </div>
                                        <?php } else { ?>
                                            <div class=" bs-wizard-step <?php if ($_smarty_tpl->tpl_vars['order']->value['progress'] > 4) {?>complete<?php } else { ?>disabled<?php }?>"><!-- complete -->
                                                <div class="text-center bs-wizard-stepnum">Step 3</div>
                                                <div class="progress"><div class="progress-bar"></div></div>
                                                <a href="#" class="bs-wizard-dot"></a>
                                                <div class="bs-wizard-info text-center">Item dispatched</div>
                                            </div>

                                            <div class=" bs-wizard-step <?php if ($_smarty_tpl->tpl_vars['order']->value['progress'] == 7) {?>complete<?php } else { ?>disabled<?php }?>"><!-- active -->
                                                <div class="text-center bs-wizard-stepnum">Step 4</div>
                                                <div class="progress"><div class="progress-bar"></div></div>
                                                <a href="#" class="bs-wizard-dot"></a>
                                                <div class="bs-wizard-info text-center">Order complete</div>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">&nbsp;
                        </div>
                        </form>
                        <hr>
                        <!-- End Order Box -->
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php } else { ?>
                    <p>You have no orders at present!</p>
                <?php }?>
            </div></blockquote>
<?php }
}
