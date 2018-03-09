<?php
/* Smarty version 3.1.30, created on 2018-03-01 12:15:07
  from "/var/www/html/shop/application/views/smarty_templates/admin/key_usage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98351b4ae6c7_08767164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f3d7a6236888ba6e479b0029ee4fa8745343332' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/key_usage.tpl',
      1 => 1519924504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a98351b4ae6c7_08767164 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
           <div class="container-fluid" id="admin-key-usage">
           <blockquote class="blockquote text-center">
           <div class="col-row">

                <h3>Key Usage</h3><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <div class='col-row'>
                    <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
                    <div class="panel panel-success">
                        <div class="panel-heading">Created Addresses: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</div>
                        <div class="panel-body">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Usage</th>
                                    <th>Address</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'record');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['record']->value) {
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['record']->value['iteration'];?>
</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['record']->value['usage'] == 'order') {?>
                                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_order_url", null, null);
?>
admin/order/<?php echo $_smarty_tpl->tpl_vars['record']->value['order_id'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_order_name", null, null);
?>
Order #<?php echo $_smarty_tpl->tpl_vars['record']->value['order_id'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_order_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_order_name'),'attr'=>''),$_smarty_tpl);?>

                                            <?php } else { ?>
                                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_user_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['record']->value['fees_user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_user_url'),'text'=>"Registration Fee",'attr'=>''),$_smarty_tpl);?>

                                            <?php }?></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['record']->value['address'];?>
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
                    </div>

                    <?php } else { ?>
                    <div class="panel panel-danger">
                        <div class="panel-heading">No addresses created yet.</div>
                    </div>
                    <?php }?>
                </div>
            </div></div></blockquote>
<?php }
}
