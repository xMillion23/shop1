<?php
/* Smarty version 3.1.30, created on 2018-03-05 10:21:14
  from "/var/www/html/shop/application/views/smarty_templates/listings/manage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9d606abeeb88_40797333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b8e2757e75398022d3c2cd693c4e34ffddcdbed' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/listings/manage.tpl',
      1 => 1520263272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9d606abeeb88_40797333 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
        <div class="col-row" id="manage_items">
            <blockquote class="blockquote text-center">
            <h2>Listings</h2><hr/>

            <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
            <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


            <?php if ($_smarty_tpl->tpl_vars['items']->value == TRUE) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <?php echo smarty_function_form(array('method'=>"open",'action'=>"listings"),$_smarty_tpl);?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_item_url', null, null);
?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_listing_edit_url', null, null);
?>
listings/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_listing_images_url', null, null);
?>
listings/images/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_listing_delete_url', null, null);
?>
listings/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_item_img', null, null);
?>
<img src='data:image/jpeg;base64,<?php echo $_smarty_tpl->tpl_vars['item']->value['main_image']['encoded'];?>
' title='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
'><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                    <div class="card bg-light card-body">
                        <div class="form">
                            <label class='col-row'><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_img'),'attr'=>''),$_smarty_tpl);?>
</label>
                            <div class='col-row'><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_item_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
<br/><?php echo $_smarty_tpl->tpl_vars['item']->value['price_f'];?>
 <br /> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['description_s'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class='col-row'>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['hidden'] == '1') {?>[hidden]<?php }?>
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_listing_edit_url'),'text'=>'Edit','attr'=>'class="btn btn-primary btn-block"'),$_smarty_tpl);?>

                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_listing_images_url'),'text'=>'Images','attr'=>'class="btn btn-primary btn-block"'),$_smarty_tpl);?>

                                <input type="submit" name="delete_listing" value="Delete" class="btn btn-danger btn-block">
                                <input type="hidden" name="delete_listing_hash" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];?>
" />
                            </div>
                        </div>
                    </div>
                    </form>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php } else { ?>
                You have no listings!
            <?php }?>

            <br />

            <div class="form">
                <label class="control-label col-row" for="submit"></label>
                <div class="col-row">
                    <p align="center">
                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"listings/add",'text'=>"Add a listing",'attr'=>'class="btn btn-primary"'),$_smarty_tpl);?>

                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>'','text'=>"Cancel",'attr'=>'title="Cancel" class="btn btn-danger"'),$_smarty_tpl);?>

                    </p>
                </div>
            </div>
        </div></blockquote>
<?php }
}
