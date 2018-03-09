<?php
/* Smarty version 3.1.30, created on 2018-02-28 03:43:37
  from "/var/www/html/shop/application/views/smarty_templates/listings/add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a966bb90f9519_70628874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eba982eee43d2af1cbc03d57aef963ec1080bc7c' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/listings/add.tpl',
      1 => 1519807415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a966bb90f9519_70628874 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="col-row" id="add_item">
                <blockquote class="blockquote text-center">
                <h2>Add Item</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php echo smarty_function_form(array('method'=>"open",'action'=>"listings/add",'attr'=>array('class'=>'form-horizontal')),$_smarty_tpl);?>

                    <div class="form">
                        <div class="col-row">
                            <label for="name" class="control-label col-row">Name</label>
                            <div class="col-row">
                                <input type="text" class="form-control text-center" name="name" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"name"),$_smarty_tpl);?>
</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label for="name" class="control-label col-row">Description</label>
                            <div class="col-row">
                                <textarea class="form-control text-center" name='description' placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"description"),$_smarty_tpl);?>
</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="price">Price</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <input type='text' class="form-control text-center" placeholder="<?php echo $_smarty_tpl->tpl_vars['current_user']->value['currency']['code'];?>
" name='price' value="<?php echo smarty_function_form(array('method'=>"set_value",'field'=>"price"),$_smarty_tpl);?>
" />
                                </div>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"price"),$_smarty_tpl);?>
</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label for="name" class="control-label col-row">Category</label>
                            <div class="col-row">
                                <?php echo $_smarty_tpl->tpl_vars['categories']->value;?>

                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"category"),$_smarty_tpl);?>
</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="ship_from">Ship From</label>
                            <div class="col-row">
                                <?php echo $_smarty_tpl->tpl_vars['locations']->value;?>

                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"ship_from"),$_smarty_tpl);?>
</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="hidden">Invisible Listing</label>
                            <div class="col-row">
                                <select name='hidden' class='form-control' autoselection='off'>
                                    <option value=''></option>
                                    <option value='0'>No</option>
                                    <option value='1'>Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"hidden"),$_smarty_tpl);?>
</div>
                    </div><br/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="prefer_upfront">Prefer up-front payment?</label>
                            <div class="col-row">
                                <select name='prefer_upfront' class="form-control" autoselection='off'>
                                    <option value=''></option>
                                    <option value='0'>No</option>
                                    <option value='1'>Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"prefer_upfront"),$_smarty_tpl);?>
</div>
                    </div><br/>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" value="Create" class="btn btn-primary" />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"listings",'text'=>"Cancel",'attr'=>'title="Cancel" class="btn btn-danger"'),$_smarty_tpl);?>

                            </p>
                        </div>
                    </div>
                </form>
            </div></blockquote>
<?php }
}
