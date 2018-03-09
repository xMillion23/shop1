<?php
/* Smarty version 3.1.30, created on 2018-03-01 12:25:06
  from "/var/www/html/shop/application/views/smarty_templates/admin/logs_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a983772619e18_62470972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b2877f1f5c7441886ba0309749e4dc5d78cc87d' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/logs_list.tpl',
      1 => 1519925103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a983772619e18_62470972 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="container-fluid" id="admin-logs-list">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>


                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php if ($_smarty_tpl->tpl_vars['logs']->value == TRUE) {?>
                <table class='table'>
                    <thead>
                    <tr>
                        <th>Time</th>
                        <th>Level</th>
                        <th>Title</th>
                        <th>Called By</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logs']->value, 'log');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_log_url", null, null);
?>
admin/logs/<?php echo $_smarty_tpl->tpl_vars['log']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['log']->value['time_f'];?>
</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value['info_level'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                            <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_log_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['log']->value['title'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value['caller'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                            <td></td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>
                <?php } else { ?>
                    There are no logs at this time.
                <?php }?>

            </div></div></blockquote>
<?php }
}
