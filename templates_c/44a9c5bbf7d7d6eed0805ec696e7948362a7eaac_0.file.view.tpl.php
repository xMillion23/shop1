<?php
/* Smarty version 3.1.30, created on 2018-03-07 01:24:17
  from "/var/www/html/shop/application/views/smarty_templates/accounts/view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9f8591577191_79247277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44a9c5bbf7d7d6eed0805ec696e7948362a7eaac' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/accounts/view.tpl',
      1 => 1520403855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9f8591577191_79247277 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_rating')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.rating.php';
?>
            <div class="col-row">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_message_user_url', null, null);
?>
message/send/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_ban_user_txt', null, null);
if ($_smarty_tpl->tpl_vars['user']->value['banned'] == '0') {?>Ban User<?php } else { ?>Unban User<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_ban_user_page', null, null);
?>
admin/ban_user/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


                <blockquote class="blockquote text-center"><div class="col-row">
                <div class="col-row" id="view-account">
                    <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                    <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>

                    <div class="col-row">
                        <div class="col-row">
                            <h2>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['user']->value['banned'] == TRUE) {?><small>(banned)</small><?php }?>
                       <br/><br/><?php if ($_smarty_tpl->tpl_vars['current_user']->value['logged_in'] == TRUE && $_smarty_tpl->tpl_vars['current_user']->value['user_id'] !== $_smarty_tpl->tpl_vars['user']->value['id']) {?>
                            <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_message_user_url'),'text'=>"Message",'attr'=>'class="btn btn-warning"'),$_smarty_tpl);?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Admin' && $_smarty_tpl->tpl_vars['user']->value['user_role'] !== 'Admin') {?>
                            <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_ban_user_page'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_ban_user_txt'),'attr'=>'class="btn btn-warning"'),$_smarty_tpl);?>

                            <?php }?></h2>
                        </div>
                    </div>
           </div>
                    <hr/><div class="col-row">
                    
                        <div class="col-row"><strong>Location</strong></div>
                        <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['user']->value['location_f'];?>
</div>
                    </div>

                    <div class="col-row">
                    <div class="row">&nbsp;</div>
                        <div class="col-row"><strong>Registered</strong></div>
                        <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['user']->value['register_time_f'];?>
</div>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['user']->value['display_login_time'] == '1') {?>

                    <div class="col-row">
                    <div class="row">&nbsp;</div>
                        <div class="col-row"><strong>Last Activity</strong></div>
                        <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['user']->value['login_time_f'];?>
</div>
                    </div>
                    <?php }?>

                    <div class="col-row">
                    <div class="row">&nbsp;</div>
                        <div class="col-row"><strong>Average Rating</strong></div>
                        <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['average_rating']->value;?>
</div>
                    </div>

                    <div class="col-row">
                    <div class="row">&nbsp;</div>
                        <div class='col-row'><strong>Completed Orders</strong></div>
                        <div class='col-row'><?php echo $_smarty_tpl->tpl_vars['user']->value['completed_order_count'];?>
</div>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['reviews']->value == TRUE) {?>
                        <div class="card bg-light card-body mb-3" style="background:white">
                            <legend>Recent Reviews</legend>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_user_all_reviews_url', null, null);
?>
reviews/view/user/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_all_reviews_str', null, null);
?>
[All Reviews: <?php echo $_smarty_tpl->tpl_vars['review_count']->value['all'];?>
]<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_user_p_reviews_url', null, null);
?>
reviews/view/user/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_hash'];?>
/0<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_p_reviews_str', null, null);
?>
[Positive: <?php echo $_smarty_tpl->tpl_vars['review_count']->value['positive'];?>
]<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_user_d_reviews_url', null, null);
?>
reviews/view/user/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_hash'];?>
/1<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_d_reviews_str', null, null);
?>
[Disputed: <?php echo $_smarty_tpl->tpl_vars['review_count']->value['disputed'];?>
]<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


                            <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_user_all_reviews_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_all_reviews_str'),'attr'=>''),$_smarty_tpl);?>

                            <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_user_p_reviews_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_p_reviews_str'),'attr'=>''),$_smarty_tpl);?>

                            <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_user_d_reviews_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_d_reviews_str'),'attr'=>''),$_smarty_tpl);?>


                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
                                
                                <div class="row">
                                    <div class="col-row">
                                        <div class="col-row">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['review']->value['rating'], 'rating', false, 'quality');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['quality']->value => $_smarty_tpl->tpl_vars['rating']->value) {
?>
                                                <div class="col-row">
                                                    <div class="col-row"><?php echo ucfirst($_smarty_tpl->tpl_vars['quality']->value);?>
</div>
                                                    <div class="col-row"><?php echo smarty_function_rating(array('rating'=>$_smarty_tpl->tpl_vars['rating']->value),$_smarty_tpl);?>
</div>
                                                </div>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            <div class="col-row">
                                                <div class="col-row">Average</div>
                                                <div class="col-row"><?php echo smarty_function_rating(array('rating'=>$_smarty_tpl->tpl_vars['review']->value['average_rating']),$_smarty_tpl);?>
</div>
                                            </div>
                                        </div>
                                        <div class="col-row"></div>

                                        <span class="float-right"><?php echo $_smarty_tpl->tpl_vars['review']->value['time_f'];?>
</span>
                                        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['comments'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                    <?php }?>

                    <?php if (isset($_smarty_tpl->tpl_vars['items']->value) && count($_smarty_tpl->tpl_vars['items']->value) > 0) {?>
                    <div class="card bg-light card-body mb-3" style="background:white">
                        <legend>Latest Listings</legend>
                        <?php $_smarty_tpl->_assignInScope('c', 0);
?>
                        <?php $_smarty_tpl->_assignInScope('last', count($_smarty_tpl->tpl_vars['items']->value)-1);
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_item_url", null, null);
?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                            <?php $_smarty_tpl->_assignInScope('cal', $_smarty_tpl->tpl_vars['c']->value%4);
?>
                        <?php if ($_smarty_tpl->tpl_vars['cal']->value == 0) {?><div class="row"><?php }?>
                        <div class='col-row'><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['cal']->value == 3 || $_smarty_tpl->tpl_vars['c']->value == $_smarty_tpl->tpl_vars['last']->value) {?></div><?php }?>
                            <?php $_smarty_tpl->_assignInScope('c', $_smarty_tpl->tpl_vars['c']->value+1);
?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>
                    <?php }?>

                    <?php if (isset($_smarty_tpl->tpl_vars['user']->value['pgp']) == TRUE) {?>
                    <hr/><div class="col-row">
                    <div style="word-wrap: break-word;">
                        <div class="col-row"><strong>PGP Fingerprint</strong></div>
                        <div class="col-row"><?php echo substr($_smarty_tpl->tpl_vars['user']->value['pgp']['fingerprint'],0,-8);?>
<b><?php echo substr($_smarty_tpl->tpl_vars['user']->value['pgp']['fingerprint'],-8);?>
</b></div>
                    </div></div>

                    <div class="form">
                    <div class="row">&nbsp;</div>
                        <div class="col-row"><strong>PGP Public Key</strong></div>
                        <div class="col-row">
                            <pre id="publicKeyBox" class="card bg-light card-body form text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['pgp']['public_key'], ENT_QUOTES, 'UTF-8', true);?>
</pre>
                        </div>
                    </div>
                    <?php }?>
            </div></div></blockquote>
<?php }
}
