<?php
/* Smarty version 3.1.30, created on 2018-03-02 06:59:14
  from "/var/www/html/shop/application/views/smarty_templates/messages/read.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a993c92349b03_41317032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c75f4495ef3136d27ac59649965c339aabebfe6' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/messages/read.tpl',
      1 => 1519991950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a993c92349b03_41317032 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_from_user_url', null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['message']->value['from']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_msg_reply_url', null, null);
?>
message/send/<?php echo $_smarty_tpl->tpl_vars['message']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_msg_delete_url', null, null);
?>
message/delete/<?php echo $_smarty_tpl->tpl_vars['message']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


            <?php if ($_smarty_tpl->tpl_vars['message']->value['encrypted'] == TRUE) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_message', null, null);
?>
<pre><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message'], ENT_QUOTES, 'UTF-8', true);?>
</pre><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php } else { ?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_message', null, null);
echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message'], ENT_QUOTES, 'UTF-8', true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php }?>

            <div class="col-row" id="read-message">
                <blockquote class="blockquote text-center">
                <h2>View Message</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                   
                    <div class="form">
                        <div class="col-row"><strong>From</strong></div>
                        <div class="col-row"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_from_user_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['from']['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
</div>
                        <br>
                   </div>

                    <div class="form">
                        <div class="col-row"><strong>Subject</strong></div>
                        <div class="col-row"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['subject'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <br>
                    </div>

                    <div class="form">
                        <div class="col-row"><strong>Time</strong></div>
                        <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['message']->value['time_f'];?>
</div>
                        <br>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['message']->value['remove_on_read'] == TRUE) {?>
                    <div class="form">
                        <div class="col-row">This message will now self-destruct..</div>
                    </div>
                    <?php }?>

                    <div class="form">
                        <div class="col-row"><strong>Message</strong></div>

                   <div class="card bg-light card-body"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_message');?>
</div>
                    </div>
                

                <div class="form">
                    <label class="control-label col-row" for="submit"></label>
                    <div class="col-row">
                        <p align="center">
                            <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_msg_reply_url'),'text'=>"Reply",'attr'=>'class="btn btn-primary"'),$_smarty_tpl);?>

                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"inbox",'text'=>"Back",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                        </p>
                    </div>
                </div>
            </div></blockquote>
<?php }
}
