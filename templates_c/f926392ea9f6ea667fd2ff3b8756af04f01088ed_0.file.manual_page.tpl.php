<?php
/* Smarty version 3.1.30, created on 2018-03-08 04:51:03
  from "/var/www/html/shop/application/views/smarty_templates/bip32/manual_page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa10787469ab5_32172306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f926392ea9f6ea667fd2ff3b8756af04f01088ed' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/bip32/manual_page.tpl',
      1 => 1520502661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa10787469ab5_32172306 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
?>
            <div class="col-row">
            <blockquote class="blockquote text-center">
                <h2>Public Key</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <p align="justify">You have set up a BIP32 extended key generated from another wallet. You will need to sign raw transactions manually and paste them back onto the website. Key indexes (eg, m/0'/0/10) are displayed so you know which private key to use to sign.</p>

                <hr/><div class="panel panel-default" id="bip32panel">
                    <div class="panel-heading" id="bip32panelheading">BIP32 key (watch only)</div><hr/>
                    <textarea class="form-control text-center" rows="3" id="bip32key" name="bip32key" readonly><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value['key'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                </div><hr/>

                <?php echo $_smarty_tpl->tpl_vars['key_usage_html']->value;?>

            </div></blockquote>
<?php }
}
