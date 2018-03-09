<?php
/* Smarty version 3.1.30, created on 2018-03-07 09:31:17
  from "/var/www/html/shop/application/views/smarty_templates/welcome_message.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9ff7b55ad523_93945233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c781de763e0c130b3a8173b8c8bdea588ddc998' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/welcome_message.tpl',
      1 => 1520430721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9ff7b55ad523_93945233 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
?>
            <div class="col-row" id="homepage">
            <blockquote class="blockquote text-center">
                <h2>Annularis</h2><hr/>
                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <div class='alert alert-danger'>Do not trust messages from other users, they might contain phishing links.<br/>Staff members will not send you any links.</div>

                <p>Set up your own Monero marketplace, independent of other payment processing services.</p>
                <p>Completely avoid the barrier of entry to the Monero Market, and take part in the Monero revolution!</p>
                <p>Highly customizable, allowing you to tailor the site's configuration for your users requirements.</p>
                <p>The project is open source, and well-reviewed, so rest assured people are working hard to keep your software secure.</p>
                <p align='center'><a class="btn btn-success btn-medium" href="https://www.github.com/Annularis/shop">Check out our source code on GitHub!</a> </p>
                        <div class='form'>
                            <h3>Fit for all Purposes</h3>
                            <p>Maybe you want to solely sell your own products on the marketplace, or want to be the next BitMit. Annularis is built for all purposes, and won't get in the way of what you'd like to do.</p>
                        </div><hr/>

                        <div class='form'>
                            <h3>Innovative Security</h3>
                            <p>Upload a PGP key for secure client-side encryption of messages, and to enable features like PGP Two-Factor login to stop attackers dead in their tracks. </p>
                        </div><hr/>

                        <div class='form'>
                            <h3>Be your own Bank</h3>
                            <p>Monero eliminate's the need for 3rd party payment processors, so no more per-transaction charges to use an online currency.</p>
                        </div><hr/>

                        <div class='form'>
                            <h3>The code is Free! (Gratis & Libre)</h3>
                            <p>as in free speech and free beer! Annularis is released under the MIT License - it's use is unencumbered by restrictions (and warrantees). The code is yours to deploy in a marketplace, or to release your own, way better version.</p>
                        </div><hr/>

                        <div class='form'>
                            <h3>Deal in your local currency</h3>
                            <p>Annularis gathers exchange rates for Monero, against USD, GBP, and EUR from some of the leading Price Index API's. Currently comes with built-in support for CoinDesk and many others. With this feature, you can set prices in your local currency, and charge users based on the current value of Monero.</p>
                        </div><hr/>

                        <div class='form'>
                            <h3>We're Privacy Conscious</h3>
                            <p>Annularis takes the privacy of it's users seriously. All uploaded images are stripped of GPS information, and other meta-data. Private Messages are encrypted using RSA encryption, and completely unreadable until you login and enter your PIN. This presents a barrier to attackers and even nosy administrators.</p>
                        </div>
                    </div></blockquote>
<?php }
}
