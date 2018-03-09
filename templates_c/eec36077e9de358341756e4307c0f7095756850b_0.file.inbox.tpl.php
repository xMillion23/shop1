<?php
/* Smarty version 3.1.30, created on 2018-03-02 06:50:19
  from "/var/www/html/shop/application/views/smarty_templates/messages/inbox.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a993a7b499440_88882780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eec36077e9de358341756e4307c0f7095756850b' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/messages/inbox.tpl',
      1 => 1519991416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a993a7b499440_88882780 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
                <div class="col-row" id="inbox">
                <blockquote class="blockquote text-center">
                            <h2>Inbox <?php if ($_smarty_tpl->tpl_vars['count_unread_messages']->value > 0) {?><br/><hr/><small>( <?php echo $_smarty_tpl->tpl_vars['count_unread_messages']->value;?>
 New messages! )</small><?php } else { ?><br/><hr/><small>( No new message! )</small><?php }?></h2>

                    <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                    <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                    <?php if (is_array($_smarty_tpl->tpl_vars['messages']->value) == TRUE) {?>
                    <table class="table col-row">
                        <thead>
                            <tr>
                                <th>From</th>
                                <th>Subject</th>
                                <th>Time</th>
                                <th></th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
?>
                            <?php echo smarty_function_form(array('method'=>"open",'action'=>"inbox",'class'=>"form-horizontal"),$_smarty_tpl);?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_from_user_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['message']->value['from']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_msg_url", null, null);
?>
message/<?php echo $_smarty_tpl->tpl_vars['message']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_msg_send_url", null, null);
?>
message/send/<?php echo $_smarty_tpl->tpl_vars['message']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_msg_delete_url", null, null);
?>
message/delete/<?php echo $_smarty_tpl->tpl_vars['message']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_msg_subject", null, null);
if ($_smarty_tpl->tpl_vars['message']->value['viewed'] == FALSE) {?><strong><?php }
if (strlen($_smarty_tpl->tpl_vars['message']->value['subject']) > 35) {
echo substr(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['subject'], ENT_QUOTES, 'UTF-8', true),0,35);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['subject'], ENT_QUOTES, 'UTF-8', true);
}
if ($_smarty_tpl->tpl_vars['message']->value['viewed'] == FALSE) {?></strong><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                            <tr<?php if ($_smarty_tpl->tpl_vars['message']->value['viewed'] == FALSE) {?> class='info'<?php }?>>
                                <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_from_user_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['from']['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
</td>
                                <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_msg_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_msg_subject'),'attr'=>''),$_smarty_tpl);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['message']->value['time_f'];?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['message']->value['encrypted'] == '1') {?><a title="PGP encrypted"><span class="fas fa-lock"></span></a><?php }?> <?php if ($_smarty_tpl->tpl_vars['message']->value['remove_on_read'] == '1') {?><a title="Will be deleted once read"><span class="fab fa-gripfire"></span></a><?php }?></td>
                                <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_msg_url'),'text'=>"View",'attr'=>'class="btn btn-success"'),$_smarty_tpl);?>

                                <?php if ($_smarty_tpl->tpl_vars['message']->value['viewed'] == '1') {?>
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_msg_send_url'),'text'=>'Reply','attr'=>'class="btn btn-primary"'),$_smarty_tpl);?>

                                    <input type='submit' name='delete_message' value='Delete' class="btn btn-danger"/>
                                    <input type='hidden' name="delete_message_hash" value="<?php echo $_smarty_tpl->tpl_vars['message']->value['hash'];?>
" />
                                <?php }?></td>
                            </tr>
                            </form>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                    <?php }?>

                    <?php echo smarty_function_form(array('method'=>"open",'action'=>"inbox",'class'=>"form-horizontal"),$_smarty_tpl);?>


                        <div class="form">
                            <label class="form-control-label col-row" for="submit"></label>
                            <div class="col-row">
                               
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"message/send",'text'=>"Compose",'attr'=>'class="btn btn-warning"'),$_smarty_tpl);?>

                                    <?php if ($_smarty_tpl->tpl_vars['messages']->value > 0) {?>
                                    <input type='submit' name='delete_all_messages' value='Delete All' class="btn btn-danger"/>
                                    <input type='hidden' name="delete_message" value="all" />
                                    <?php }?>
                                
                        </div>
                    </form>
                        </div></blockquote>
<?php }
}
