<?php
/* Smarty version 3.1.30, created on 2018-03-06 15:27:41
  from "/var/www/html/shop/application/views/smarty_templates/items/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9ef9bd54acf0_21745739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c57140745898dbb79efa202653259c3783ebe95f' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/items/index.tpl',
      1 => 1520346091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9ef9bd54acf0_21745739 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_rating')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.rating.php';
?>
            <div class="col-row">
                <blockquote class="blockquote text-center"><div class="col-row">
                    <div class="col-row">
                        <div class='form'>
                            <?php echo $_smarty_tpl->tpl_vars['links']->value;?>

                        </div>
                        <h2><?php if (isset($_smarty_tpl->tpl_vars['custom_title']->value) == TRUE) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['custom_title']->value, ENT_QUOTES, 'UTF-8', true);?>

                            <?php } else { ?>Items<?php }?></h2><hr/>
                    </div>
                </div>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php if (is_array($_smarty_tpl->tpl_vars['items']->value) && count($_smarty_tpl->tpl_vars['items']->value) > 0) {?>
                    <?php $_smarty_tpl->_assignInScope('c', 0);
?>
                    <div class="col-row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_item_img", null, null);
?>
<img src='data:image/jpeg;base64,<?php echo $_smarty_tpl->tpl_vars['item']->value['main_image']['encoded'];?>
' title='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
'><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_item_url", null, null);
?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_item_vendor_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['item']->value['vendor']['user_hash'];
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

                            <div class="col-row">
                                <div class="card bg-light card-body mb-3">
                                    <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable1=ob_get_clean();
echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_img'),'attr'=>"title='".$_prefixVariable1."'"),$_smarty_tpl);?>

                                    <hr/><div class="capture">
                                        <h4><?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable2=ob_get_clean();
echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true),'attr'=>"title='".$_prefixVariable2."'"),$_smarty_tpl);?>

                                        </h4>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['price_f'];?>
<hr/><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_vendor_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['vendor']['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>

                                    </div>
                                    <div class="ratings">
                                        <p class="form"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_reviews_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_reviews_str'),'attr'=>''),$_smarty_tpl);?>
</p>
                                        <p><?php echo smarty_function_rating(array('rating'=>$_smarty_tpl->tpl_vars['item']->value['average_rating']),$_smarty_tpl);?>
</p>
                                    </div>
                                </div>
                            </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>

                <?php } else { ?>
                    There are no items at present, please try again later!
                <?php }?>
            </div></blockquote>
<?php }
}
