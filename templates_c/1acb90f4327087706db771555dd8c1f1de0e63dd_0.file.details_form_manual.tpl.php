<?php
/* Smarty version 3.1.30, created on 2018-03-08 05:00:50
  from "/var/www/html/shop/application/views/smarty_templates/orders/details_form_manual.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa109d27f17a1_80536148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1acb90f4327087706db771555dd8c1f1de0e63dd' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/orders/details_form_manual.tpl',
      1 => 1520020781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa109d27f17a1_80536148 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>

                                            <!-- Display Unsigned/Partially signed transaction -->
                                            <div class='row'>
                                                <label class="col-xs-3" for="display_transaction"><?php if ($_smarty_tpl->tpl_vars['order']->value['partially_signed_transaction'] !== '') {?>Partially Signed Transaction<?php } else { ?>Unsigned Transaction<?php }?></label>
                                                <div class="col-xs-9">
                                                    <textarea id="display_transaction" class="form-control"><?php if ($_smarty_tpl->tpl_vars['order']->value['partially_signed_transaction'] !== '') {
echo $_smarty_tpl->tpl_vars['order']->value['partially_signed_transaction'];?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['json_inputs'];
} else {
echo $_smarty_tpl->tpl_vars['order']->value['unsigned_transaction'];
echo $_smarty_tpl->tpl_vars['order']->value['json_inputs'];
}?></textarea>

                                                    <?php if ($_smarty_tpl->tpl_vars['order']->value['partially_signed_transaction'] !== '') {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['order']->value['partially_signing_user_id'] !== $_smarty_tpl->tpl_vars['current_user']->value['user_id']) {?>
                                                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_partially_signed_user_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['signer']->value['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                                        <div class="col-xs-12">
                                                            Signed by <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_partially_signed_user_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['signer']->value['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['partially_signed_time_f'];?>
. Sign and broadcast to complete payment.
                                                        </div>
                                                        <?php } else { ?>
                                                            You signed this transaction <?php echo $_smarty_tpl->tpl_vars['order']->value['partially_signed_time_f'];?>
.
                                                        <?php }?>
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['display_sign_form']->value == TRUE) {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['strange_address']->value == TRUE) {?>
                                                    <div class="col-xs-12">
                                                        <div class="col-xs-8">
                                                            Warning! This transaction has been tampered with, do not sign, message an admin.
                                                        </div>
                                                    </div>
                                                        <?php }?>
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <!-- End Display Unsigned/Partially signed transaction -->

                                            <!-- Paste Signed Transaction Row -->
                                            <div class='row'>
                                                <?php if ($_smarty_tpl->tpl_vars['display_sign_form']->value == TRUE) {?>
                                                <label class="col-xs-3" for="paste_transaction">Paste Signed Transaction</label>
                                                <div class="col-xs-9">
                                                    <textarea name="partially_signed_transaction" id="paste_transaction" class="form-control"></textarea>
                                                    Sign with private key: m/0'/0/<?php echo $_smarty_tpl->tpl_vars['my_multisig_key']->value['key_index'];?>

                                                </div>
                                                <?php } else { ?>
                                                <?php if ($_smarty_tpl->tpl_vars['order']->value['partially_signed_transaction'] == null || $_smarty_tpl->tpl_vars['order']->value['partially_signing_user_id'] == $_smarty_tpl->tpl_vars['current_user']->value['user_id']) {?>
                                                <label class="col-xs-3" for="message"></label>
                                                <div class="col-xs-9">
                                                    Waiting on the other user to sign.
                                                </div>
                                                <?php }?>
                                                <?php }?>
                                            </div>
                                            <!-- End Paste Signed Transaction Row -->

                                            <!-- Buttons -->
                                            <div class="row">
                                                <label class="col-xs-3" for="submit"></label>
                                                <div class="col-xs-9">
                                                    <?php if ($_smarty_tpl->tpl_vars['display_sign_form']->value == TRUE) {?><input type="submit" name="submit_signed_transaction" class="btn btn-primary" value="Submit Transaction" /><?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['can_refund']->value == TRUE) {?>
                                                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_refund_url', null, null);
?>
orders/refund/<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_refund_url'),'text'=>'Issue Refund','attr'=>'class="btn btn-success"'),$_smarty_tpl);?>

                                                    <?php }?>
                                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->tpl_vars['cancel_page']->value,'text'=>"Back",'attr'=>'title="Back" class="btn btn-default"'),$_smarty_tpl);?>

                                                </div>
                                            </div>
                                            <!-- End Buttons -->
<?php }
}
