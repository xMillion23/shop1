<?php
/* Smarty version 3.1.30, created on 2018-03-01 12:18:40
  from "/var/www/html/shop/application/views/smarty_templates/admin/locations.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9835f0615bb2_67269641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf6be77872de9d78b2b7a071fbd9b42186260222' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/locations.tpl',
      1 => 1519924714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9835f0615bb2_67269641 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
?>
            <div class="container-fluid" id="admin-locations-form">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                <h2><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'admin','text'=>'Back','attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>
<br/>Locations</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <div class="form">
                    <div class="col-row">
                        When users are entering locations on the site, they can use the
                        default country list, or you can configure the site to a specific
                        area.
                    </div>
                </div><hr/>

                <legend>Location List</legend>

                <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/locations",'attr'=>'class="form form-horizontal"'),$_smarty_tpl);?>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="location_source">List</label>
                            <div class="col-row">
                                <select name="location_source" id="location_source" class="form-control">
                                    <option value=""></option>
                                    <option value="Default"<?php if ($_smarty_tpl->tpl_vars['list_source']->value == 'Default') {?> selected="selected"<?php }?>>Default</option>
                                    <option value="Custom"<?php if ($_smarty_tpl->tpl_vars['list_source']->value == 'Custom') {?> selected="selected"<?php }?>>Custom</option>
                                </select>
                            </div>
                            <div class="col-row"></div>
                            <br/><div class="col-row"><input type='submit' name='update_location_list_source' value='Submit' class="btn btn-primary"/></div>
                        </div>
                        <div class='col-row text-warning'>
                            <?php echo smarty_function_form(array('method'=>"form_error",'field'=>"location_source"),$_smarty_tpl);?>

                        </div>
                    </div>
                </form><hr/>

                <legend>Custom Locations</legend>
                <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/locations",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>


                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="location_source">Add:</label>
                            <div class="col-row">
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Name</i></span>
                                        <input type='text' class="form-control" name='create_location' value='' />
                                    </div>
                                </div>
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Parent</i></span>
                                        <?php echo $_smarty_tpl->tpl_vars['locations_parent']->value;?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-row"><input type='submit' name='add_custom_location' value='Submit' class="btn btn-primary"/></div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"create_location"),$_smarty_tpl);
echo smarty_function_form(array('method'=>'form_error','field'=>'location'),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="location_delete">Delete:</label>
                            <div class="col-row">
                                <div class="col-row">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i>Name</i></span>
                                        <?php echo $_smarty_tpl->tpl_vars['locations_delete']->value;?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-row"><input type="submit" name="delete_custom_location" value="Submit" class="btn btn-primary" /></div>
                        </div>
                        <div class='col-row text-warning'><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"location_delete"),$_smarty_tpl);?>
</div>
                    </div>
                </form>

                <legend>List Preview</legend>
                    <?php echo $_smarty_tpl->tpl_vars['locations_human_readable']->value;?>


            </div></div></blockquote>
<?php }
}
