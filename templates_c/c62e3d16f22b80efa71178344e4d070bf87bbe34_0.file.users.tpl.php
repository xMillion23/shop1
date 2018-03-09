<?php
/* Smarty version 3.1.30, created on 2018-03-01 16:10:51
  from "/var/www/html/shop/application/views/smarty_templates/admin/users.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a986c5b7091c0_59014730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c62e3d16f22b80efa71178344e4d070bf87bbe34' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/users.tpl',
      1 => 1519938648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a986c5b7091c0_59014730 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="container-fluid" id="admin-users-panel">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>


                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <div class="form">
                    <div class="col-row"><strong>User Count</strong></div>
                    <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['user_count']->value;?>
 (<?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/users/list",'text'=>"User list",'attr'=>''),$_smarty_tpl);?>
)</div>
                </div><hr/>

                <div class="form">
                    <div class="col-row"><strong>Request Emails</strong></div>
                    <div class="col-row"><?php if ($_smarty_tpl->tpl_vars['config']->value['request_emails'] == TRUE) {?>Enabled<?php } else { ?>Disabled<?php }?></div>
                </div><hr/>

                <div class="form">
                    <div class='col-row'><strong>Session Timeout</strong></div>
                    <div class='col-row'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['login_timeout'], ENT_QUOTES, 'UTF-8', true);?>
 minutes</div>
                </div><hr/>

                <div class="form">
                    <div class='col-row'><strong>Captcha Length</strong></div>
                    <div class='col-row'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['captcha_length'], ENT_QUOTES, 'UTF-8', true);?>
 characters</div>
                </div><hr/>

                <div class="form">
                    <div class='col-row'><strong>Registration Allowed?</strong></div>
                    <div class='col-row'>
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['registration_allowed'] == TRUE) {?>
                            Enabled
                        <?php } else { ?>
                            Disabled
                        <?php }?>
                    </div>
                </div><hr/>

                <div class="form">
                    <div class='col-row'><strong>Vendor Registration Allowed?</strong></div>
                    <div class='col-row'>
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['vendor_registration_allowed'] == TRUE) {?>
                            Enabled
                        <?php } else { ?>
                            Disabled
                        <?php }?>
                    </div>
                </div><hr/>

                <div class="form">
                    <div class="col-row"><strong>Vendor Registration Fee:</strong></div>
                    <div class="col-row">
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['entry_payment_vendor'] > 0) {?>
                            <?php echo $_smarty_tpl->tpl_vars['coin']->value['symbol'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['entry_payment_vendor'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                            Not Required
                        <?php }?>
                    </div>
                </div><hr/>

                <div class="form">
                    <div class="col-row"><strong>Buyer Registration Fee:</strong></div>
                    <div class="col-row">
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['entry_payment_buyer'] > 0) {?>
                            <?php echo $_smarty_tpl->tpl_vars['coin']->value['symbol'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['entry_payment_buyer'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                            Not Required
                        <?php }?>
                    </div>
                </div><hr/>

                <div class="form">
                    <div class="col-row"><strong>Registration Tokens</strong></div>
                    <div class="col-row"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/user_tokens",'text'=>"Manage",'attr'=>''),$_smarty_tpl);?>
</div>
                </div><hr/>

                <div class="form">
                    <div class='col-row'><strong>Encrypted PM's</strong></div>
                    <div class='col-row'>
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['encrypt_private_messages'] == TRUE) {?>
                            Enabled
                        <?php } else { ?>
                            Disabled
                        <?php }?>
                    </div>
                </div><hr/>

                <div class="form">
                    <div class='col-row'><strong>Force Vendor PGP?</strong></div>
                    <div class='col-row'>
                        <?php if ($_smarty_tpl->tpl_vars['config']->value['force_vendor_pgp'] == TRUE) {?>
                            Enabled
                        <?php } else { ?>
                            Disabled
                        <?php }?>
                    </div>
                </div>
            </div></div></blockquote>
<?php }
}
