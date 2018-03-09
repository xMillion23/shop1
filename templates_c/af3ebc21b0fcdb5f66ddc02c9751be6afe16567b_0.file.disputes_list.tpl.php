<?php
/* Smarty version 3.1.30, created on 2018-03-02 06:43:29
  from "/var/www/html/shop/application/views/smarty_templates/admin/disputes_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9938e19af7c4_41125739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af3ebc21b0fcdb5f66ddc02c9751be6afe16567b' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/disputes_list.tpl',
      1 => 1519990665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9938e19af7c4_41125739 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
?>
            <div class="col-row" id="admin-disputes-list">
            <blockquote class="blockquote text-center">
            <div class="col-row">
	    <h2><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin",'text'=>"Back",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>
<br/>Disputes</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php if ($_smarty_tpl->tpl_vars['disputes']->value !== TRUE) {?>
                <table class="table col-row">
                    <thead>
                    <tr>
                        <th>Order</th>
                        <th>Disputing User</th>
                        <th>Issue</th>
                        <th>Other User</th>
                        <th>Last Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['disputes']->value, 'dispute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dispute']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_order_url", null, null);
?>
admin/order/<?php echo $_smarty_tpl->tpl_vars['dispute']->value['order_id'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_order_str", null, null);
?>
#<?php echo $_smarty_tpl->tpl_vars['dispute']->value['order_id'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_dispute_url", null, null);
?>
admin/dispute/<?php echo $_smarty_tpl->tpl_vars['dispute']->value['order_id'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_dispute_str", null, null);
echo substr(htmlspecialchars($_smarty_tpl->tpl_vars['dispute']->value['dispute_message'], ENT_QUOTES, 'UTF-8', true),0,100);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_disputing_user_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['dispute']->value['disputing_user']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_other_user_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['dispute']->value['other_user']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <tr>
                            <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_order_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_order_str'),'attr'=>''),$_smarty_tpl);?>
</td>
                            <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_disputing_user_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['dispute']->value['disputing_user']['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
</td>
                            <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_dispute_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_dispute_str'),'attr'=>''),$_smarty_tpl);?>
</td>
                            <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_other_user_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['dispute']->value['other_user']['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['dispute']->value['last_update_f'];?>
</td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>
                <?php } else { ?>
                    There are no disputes at this time.
                <?php }?>
            
            </div></div></blockquote>
<?php }
}
