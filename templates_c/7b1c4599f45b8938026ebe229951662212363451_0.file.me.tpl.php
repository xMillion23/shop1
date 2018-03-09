<?php
/* Smarty version 3.1.30, created on 2018-03-08 06:49:24
  from "/var/www/html/shop/application/views/smarty_templates/accounts/me.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa12344782994_41187634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b1c4599f45b8938026ebe229951662212363451' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/accounts/me.tpl',
      1 => 1520502955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa12344782994_41187634 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
?>
            <div class="col-row">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_profile_url', null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


            <blockquote class="blockquote text-center">
            <div class="col-row" id="own-account"><div class="col-row">
                     <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_name'], ENT_QUOTES, 'UTF-8', true);?>

                           <br/> <hr/>
                               <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account/edit",'text'=>"Edit Account",'attr'=>'class="btn btn-default"'),$_smarty_tpl);?>

                               <?php if ($_smarty_tpl->tpl_vars['request_emails']->value == TRUE) {?>
                                   <?php if ($_smarty_tpl->tpl_vars['user']->value['email_address'] == NULL) {?>
                                       <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"accounts/email",'text'=>"Set Email",'attr'=>'class="btn btn-default"'),$_smarty_tpl);?>

                                   <?php } else { ?>
                                       <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"accounts/email",'text'=>"Update Email",'attr'=>'class="btn btn-default"'),$_smarty_tpl);?>

                                   <?php }?>
                               <?php }?><br/>
                               <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"accounts/password",'text'=>"Change Password",'attr'=>'class="btn btn-default"'),$_smarty_tpl);?>

                           
                       <hr/></h2>
                    </div>
                </div>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>

                <div class="col-row">
                    <div class="col-row"><strong>Profile URL</strong></div>
                    <div class="col-row"><div style="word-wrap: break-word;"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_profile_url'),'text'=>'','attr'=>'class="text text-primary"'),$_smarty_tpl);?>
</div>
                </div></div>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Location</strong></div>
                    <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['user']->value['location_f'];?>
</div>
                </div>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Local Currency</strong></div>
                    <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['user']->value['currency']['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['user']->value['currency']['symbol'];?>
)</div>
                </div>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Display Login Activity?</strong></div>
                    <div class="col-row"><?php if ($_smarty_tpl->tpl_vars['user']->value['display_login_time'] == '1') {?>Enabled<?php } else { ?>Disabled<?php }?></div>
                </div>

                <hr/>
                <legend>Private Settings </legend>
                <?php if ($_smarty_tpl->tpl_vars['request_emails']->value == TRUE) {?>
                <div class="row">
                    <div class="col-row"><strong>Email Address</strong></div>
                    <div class="col-row"><?php if ($_smarty_tpl->tpl_vars['user']->value['email_address'] == '') {?>none<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email_address'], ENT_QUOTES, 'UTF-8', true);
}?></div>
                </div>

                <div class="row">
                    <div class="col-row"><strong>Forward messages to email?</strong></div>
                    <div class="col-row"><?php if ($_smarty_tpl->tpl_vars['user']->value['email_updates'] == TRUE && (($_smarty_tpl->tpl_vars['user']->value['email_address'] == '') == FALSE)) {?>Enabled<?php } else { ?>Disabled<?php }?></div>
                </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['user']->value['user_role'] !== 'Admin') {?>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Monero Public Keys</strong></div>
                    <div class="col-row">
                        <?php if ($_smarty_tpl->tpl_vars['bip32']->value == FALSE) {?>Not set up - <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"bip32",'text'=>"Do so now!",'attr'=>''),$_smarty_tpl);?>

                        <?php } else { ?>Provider: <?php echo $_smarty_tpl->tpl_vars['bip32']->value['provider'];?>
 - <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"bip32",'text'=>"Settings",'attr'=>''),$_smarty_tpl);?>

                        <?php }?>
                    </div>
                </div>

                <div class"col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong><?php if ($_smarty_tpl->tpl_vars['user']->value['user_role'] == 'Vendor') {?>Payout<?php } else { ?>Refund<?php }?> Address</strong></div>
                    <div class="col-row"><div style="word-wrap: break-word;">
                        <?php if (is_array($_smarty_tpl->tpl_vars['payout']->value)) {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payout']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"accounts/payout",'text'=>"Settings",'attr'=>''),$_smarty_tpl);?>

                        <?php } else { ?>
                            Not set up - <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"accounts/payout",'text'=>"Do so now!",'attr'=>''),$_smarty_tpl);?>

                        <?php }?>
                    </div></div>
                </div>
                <?php }?>

                <hr/>
                <legend>Security</legend>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Two Factor Authentication</strong></div>
                    <div class="col-row">
                        <?php if ($_smarty_tpl->tpl_vars['two_factor_setting']->value == TRUE) {?>
                            <?php if ($_smarty_tpl->tpl_vars['two_factor']->value['totp'] == TRUE) {?>
                                Enabled (Mobile App)
                            <?php } else { ?>
                                Enabled (PGP)
                            <?php }?>
                        <?php } else { ?>
                            Disabled
                        <?php }?>

                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account/two_factor",'text'=>"Configure",'attr'=>''),$_smarty_tpl);?>

                    </div>
                </div>


                <?php if (isset($_smarty_tpl->tpl_vars['user']->value['pgp']['public_key']) == TRUE) {?>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>PGP Fingerprint</strong></div>
                    <div style="word-wrap: break-word;">
                    <div class="col-row"><?php echo substr($_smarty_tpl->tpl_vars['user']->value['pgp']['fingerprint'],0,-8);?>
<b><?php echo substr($_smarty_tpl->tpl_vars['user']->value['pgp']['fingerprint'],-8);?>
</b></div></div>
                </div>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Force PGP Messages?</strong></div>
                    <div class="col-row"><?php if ($_smarty_tpl->tpl_vars['user']->value['force_pgp_messages'] == '1') {?>Enabled<?php } else { ?>Disabled<?php }?></div>
                </div>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>Block non-PGP messages?</strong></div>
                    <div class="col-row"><?php if ($_smarty_tpl->tpl_vars['user']->value['block_non_pgp'] == '1') {?>Enabled<?php } else { ?>Disabled<?php }?></div>
                </div>
                <?php } else { ?>

                <div class="col-row">
                <div class="row">&nbsp;</div>
                    <div class="col-row"><strong>PGP Features</strong></div>
                    <div class="col-row"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"pgp/add",'text'=>"Add a PGP key",'attr'=>''),$_smarty_tpl);?>
 to enable features such as two-factor authentication, or automatic encryption of messages.</div>
                </div>
                <?php }?>

           </div></blockquote>
<?php }
}
