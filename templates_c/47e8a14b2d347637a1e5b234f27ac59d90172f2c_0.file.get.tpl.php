<?php
/* Smarty version 3.1.30, created on 2018-03-07 07:22:59
  from "/var/www/html/shop/application/views/smarty_templates/items/get.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9fd9a34ed9c6_66440421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47e8a14b2d347637a1e5b234f27ac59d90172f2c' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/items/get.tpl',
      1 => 1520425368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9fd9a34ed9c6_66440421 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_modifier_escape')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/modifier.escape.php';
if (!is_callable('smarty_function_rating')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.rating.php';
?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_message_vendor_url', null, null);
?>
message/send/<?php echo $_smarty_tpl->tpl_vars['item']->value['vendor']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_item_delete_url', null, null);
?>
admin/delete_item/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_item_purchase_url', null, null);
?>
purchase/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_item_url", null, null);
?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_vendor_url', null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['item']->value['vendor']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_vendor_reviews_url', null, null);
?>
reviews/view/user/<?php echo $_smarty_tpl->tpl_vars['item']->value['vendor']['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_reviews_url", null, null);
?>
reviews/view/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_reviews_str", null, null);
echo $_smarty_tpl->tpl_vars['item']->value['review_count'];?>
 reviews<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


        <div class="col-row" id="item_detail">
        <blockquote class="blockquote text-center">

            <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
            <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


            <?php if ($_smarty_tpl->tpl_vars['current_user']->value['logged_in'] == TRUE && $_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Buyer') {?>
            <?php echo smarty_function_form(array('method'=>"open",'action'=>"purchases",'attr'=>''),$_smarty_tpl);?>

            <?php }?>

            <div class="card bg-light card-body mb-3">
                <?php if ($_smarty_tpl->tpl_vars['item']->value['main_image']['hash'] !== 'default') {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_img_uri", null, null);
?>
image/<?php echo $_smarty_tpl->tpl_vars['item']->value['main_image']['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_img", null, null);
echo smarty_function_url(array('type'=>"site",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_img_uri')),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_item_img", null, null);
?>
<img class="img-fluid" src='<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_img');?>
' title='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
'><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_item_url", null, null);
?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_img'),'attr'=>'title="{$item.name|escape:"html":"UTF-8"}"'),$_smarty_tpl);?>

                <?php }?><hr/>
                    <div class="caption-full">       
                    <h4><?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable1=ob_get_clean();
echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true),'attr'=>"title='".$_prefixVariable1."'"),$_smarty_tpl);?>
<br/><br/><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['price_f'], "none");?>
</h4><hr/>
                    <div class="form">
                        <?php if ($_smarty_tpl->tpl_vars['current_user']->value['logged_in'] == TRUE) {?>
                            <?php if ($_smarty_tpl->tpl_vars['current_user']->value['user_hash'] != $_smarty_tpl->tpl_vars['item']->value['vendor']['user_hash']) {
echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_message_vendor_url'),'text'=>"Message",'attr'=>'class="btn btn-warning"'),$_smarty_tpl);
}?>
                            <?php if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Buyer') {?>
                                <input type="hidden" name="item_hash" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];?>
" style="display:none"/>
                                <input type="submit" name="submit_purchase" value="Purchase" class="btn btn-success">
                            <?php }?>
                        <?php }?>
                    </div><hr/>
                    <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['description'], ENT_QUOTES, 'UTF-8', true));?>
</p><hr/>
                    <p>By <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_vendor_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['vendor']['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
 <span class="rating">(<?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_vendor_reviews_url'),'text'=>$_smarty_tpl->tpl_vars['vendor_rating']->value,'attr'=>''),$_smarty_tpl);?>
)</p>
                    <p>Added: <?php echo $_smarty_tpl->tpl_vars['item']->value['add_time_f'];?>
</p>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['update_time'] == TRUE) {?>
                        <p>Updated: <?php echo $_smarty_tpl->tpl_vars['item']->value['add_time_f'];?>
</p>
                    <?php }?>
                </div>

                <div class="ratings">
                    <p class="form">
                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_reviews_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_reviews_str'),'attr'=>''),$_smarty_tpl);?>

                    
                        <?php echo smarty_function_rating(array('rating'=>$_smarty_tpl->tpl_vars['item']->value['average_rating']),$_smarty_tpl);?>
</p>
                </div><hr/>

                <?php if ($_smarty_tpl->tpl_vars['shipping_costs']->value == TRUE) {?>
                <div class="caption-full">
                    <div class="form">
                        <strong>Shipping Cost</strong>
                    </div>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_costs']->value, 'shipping_charge');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['shipping_charge']->value) {
?>
                    <div class="form">
                        <?php echo $_smarty_tpl->tpl_vars['shipping_charge']->value['destination_f'];?>

                        <div class='form'>
                            <?php if ($_smarty_tpl->tpl_vars['current_user']->value['currency']['id'] !== '0') {?>
                                <?php echo $_smarty_tpl->tpl_vars['current_user']->value['currency']['symbol'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['shipping_charge']->value['cost']*$_smarty_tpl->tpl_vars['current_user']->value['currency']['rate'],2);?>
 /
                            <?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['coin']->value['symbol'];?>
 <?php echo number_format(htmlspecialchars($_smarty_tpl->tpl_vars['shipping_charge']->value['cost'], ENT_QUOTES, 'UTF-8', true),8);?>

                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
                <?php }?>
            </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                <div class="col-row">
                    <div class="thumbnail">
                        <img class="productImg" src="data:image/jpeg;base64,<?php echo $_smarty_tpl->tpl_vars['image']->value['encoded'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            <?php if ($_smarty_tpl->tpl_vars['reviews']->value == TRUE) {?>
            <div class="card bg-light card-body mb-3">
                <h4>Recent Reviews</h4>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_item_all_reviews_url', null, null);
?>
reviews/view/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_all_reviews_str', null, null);
?>
[All Reviews: <?php echo $_smarty_tpl->tpl_vars['review_count']->value['all'];?>
]<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_item_p_reviews_url', null, null);
?>
reviews/view/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];?>
/0<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_p_reviews_str', null, null);
?>
[Positive: <?php echo $_smarty_tpl->tpl_vars['review_count']->value['positive'];?>
]<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_item_d_reviews_url', null, null);
?>
reviews/view/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];?>
/1<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_d_reviews_str', null, null);
?>
[Disputed: <?php echo $_smarty_tpl->tpl_vars['review_count']->value['disputed'];?>
]<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_all_reviews_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_all_reviews_str'),'attr'=>''),$_smarty_tpl);?>

                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_p_reviews_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_p_reviews_str'),'attr'=>''),$_smarty_tpl);?>

                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_d_reviews_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_d_reviews_str'),'attr'=>''),$_smarty_tpl);?>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
                    <hr/>
                <div class="col-row">
                    <div class="col-row">
                        <div class="col-row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['review']->value['rating'], 'rating', false, 'quality');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['quality']->value => $_smarty_tpl->tpl_vars['rating']->value) {
?>
                            <div class="col-row">
                                <div class="col-row">
                                    <?php echo ucfirst($_smarty_tpl->tpl_vars['quality']->value);?>

                                </div>
                                <div class="col-row">
                                    <?php echo smarty_function_rating(array('rating'=>$_smarty_tpl->tpl_vars['rating']->value),$_smarty_tpl);?>

                                </div>
                            </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            <div class="col-row">
                                <div class="col-row">
                                    Average
                                </div>
                                <div class="col-row">
                                    <?php
$_smarty_tpl->tpl_vars['var1'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var1']->step = 1;$_smarty_tpl->tpl_vars['var1']->total = (int) ceil(($_smarty_tpl->tpl_vars['var1']->step > 0 ? $_smarty_tpl->tpl_vars['review']->value['average_rating']+1 - (1) : 1-($_smarty_tpl->tpl_vars['review']->value['average_rating'])+1)/abs($_smarty_tpl->tpl_vars['var1']->step));
if ($_smarty_tpl->tpl_vars['var1']->total > 0) {
for ($_smarty_tpl->tpl_vars['var1']->value = 1, $_smarty_tpl->tpl_vars['var1']->iteration = 1;$_smarty_tpl->tpl_vars['var1']->iteration <= $_smarty_tpl->tpl_vars['var1']->total;$_smarty_tpl->tpl_vars['var1']->value += $_smarty_tpl->tpl_vars['var1']->step, $_smarty_tpl->tpl_vars['var1']->iteration++) {
$_smarty_tpl->tpl_vars['var1']->first = $_smarty_tpl->tpl_vars['var1']->iteration == 1;$_smarty_tpl->tpl_vars['var1']->last = $_smarty_tpl->tpl_vars['var1']->iteration == $_smarty_tpl->tpl_vars['var1']->total;?><span class="fas fa-star"></span><?php }
}
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars['var1']->value) : $_smarty_tpl->tpl_vars['var1']->value-(5)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = $_smarty_tpl->tpl_vars['var1']->value, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?><span class="far fa-star"></span><?php }
}
?>

                                </div>
                            </div>
                        </div>
                        <div class="col-row"></div>

                        <span class="col-row"><?php echo $_smarty_tpl->tpl_vars['review']->value['time_f'];?>
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
            <?php if ($_smarty_tpl->tpl_vars['current_user']->value['logged_in'] == TRUE && $_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Buyer') {?>
            </form>
            <?php }?>
        </div></div></blockquote>
<?php }
}
