<?php
/* Smarty version 3.1.30, created on 2018-03-01 10:59:17
  from "/var/www/html/shop/application/views/smarty_templates/admin/edit_items.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a982355a4a916_07141851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb11370d5e90b5b44df037b453776bdb37d5079b' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/edit_items.tpl',
      1 => 1519919954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a982355a4a916_07141851 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
?>
            <div class="container-fluid" id="edit_general">
            <blockquote class="blockquote text-center">
            <div class="col-row">
                <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>


                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <legend>Categories</legend><hr/>
                <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/edit/items",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>


                    <div class="form">

                        <div class="col-row">
                            <label class="control-label col-row">Add:</label>
                            <div class="col-row">
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Name</i></span>
                                        <input type='text' class="form-control" name='create_name' value='' />
                                    </div>
                                </div>
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Parent</i></span>
                                        <?php echo $_smarty_tpl->tpl_vars['categories_add_select']->value;?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-row"><input type='submit' name='add_category' value='Add' class='btn btn-primary btn-block' /></div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"create_name"),$_smarty_tpl);?>

                            <?php echo smarty_function_form(array('method'=>"form_error",'field'=>"category_parent"),$_smarty_tpl);?>
</div>
                    </div><hr/>


                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row">Rename:</label>
                            <div class="col-row">
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Name</i></span>
                                        <?php echo $_smarty_tpl->tpl_vars['categories_rename_select']->value;?>

                                    </div>
                                </div>
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>New</i></span>
                                        <input type='text' name='category_name' class="form-control" value='' />
                                    </div>
                                </div>
                            </div>
                            <div class="col-row"><input type='submit' name='rename_category' value='Rename' class='btn btn-primary btn-block' /></div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"rename_id"),$_smarty_tpl);?>

                            <?php echo smarty_function_form(array('method'=>'form_error','field'=>'category_name'),$_smarty_tpl);?>
</div>

                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row">Delete:</label>
                            <div class="col-row">
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Name</i></span>
                                        <?php echo $_smarty_tpl->tpl_vars['categories_delete_select']->value;?>

                                    </div>
                                </div>
                                <div class="col-row">

                                </div>
                            </div>
                            <div class="col-row"><input type='submit' name='delete_category' value='Delete' class='btn btn-danger btn-block' /></div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"delete_id"),$_smarty_tpl);?>
</div>
                    </div>

                </form>
            </div></div></blockquote>
<?php }
}
