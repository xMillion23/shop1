<?php
/* Smarty version 3.1.30, created on 2018-02-20 00:42:39
  from "/var/www/html/shop/application/views/smarty_templates/admin/order_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8bb54f163b53_88220490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef896e9cac2d4e4ff61444d10fdb46f0839f2f86' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/order_list.tpl',
      1 => 1519059429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8bb54f163b53_88220490 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
?>
           <div class="col-lg-9 mainContent" id="admin-order-list">

                <h2><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin",'text'=>"Back",'attr'=>'class="btn btn-default"'),$_smarty_tpl);?>
 Order List</h2>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php if (is_array($_smarty_tpl->tpl_vars['orders']->value) == TRUE) {?>
                    <div class="col-lg-10 mx-lg-auto col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Vendor</td>
                                    <td>Buyer</td>
                                    <td>Price</td>
                                    <td>Step</td>
                                    <td>Confirmed Date</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_order_url", null, null);
?>
admin/order/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_order_str", null, null);
?>
#<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_vendor_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['order']->value['vendor']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_buyer_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['order']->value['buyer']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


                                <tr>
                                    <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_order_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_order_str'),'attr'=>''),$_smarty_tpl);?>
</td>
                                    <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_vendor_url'),'text'=>$_smarty_tpl->tpl_vars['order']->value['vendor']['user_name'],'attr'=>''),$_smarty_tpl);?>
</td>
                                    <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_buyer_url'),'text'=>$_smarty_tpl->tpl_vars['order']->value['buyer']['user_name'],'attr'=>''),$_smarty_tpl);?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['coin']->value['symbol'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['order']->value['order_price'],8);?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value['progress'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value['time_f'];?>
</td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </tbody>
                        </table>
                    </div>

                <?php } else { ?>
                    There are no orders at this time
                <?php }?>
                </div>
<?php }
}
