<?php
/* Smarty version 3.1.30, created on 2018-03-01 11:56:18
  from "/var/www/html/shop/application/views/smarty_templates/admin/fees.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9830b2eb65c4_04872228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de43855b9080e4b46d5d5201f9cdb238d15917e8' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/fees.tpl',
      1 => 1519923365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9830b2eb65c4_04872228 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
?>
            <div class="container-fluid" id="admin_fees_panel">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                <h2><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/items",'text'=>"Back",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>
<br/>Fees Configuration</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/items/fees",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>

                    <h3>Basic Settings</h3><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="minimum_fee">Minimum Fee:</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <span class="input-group-addon"><i><?php echo $_smarty_tpl->tpl_vars['coin']->value['symbol'];?>
</i></span>
                                    <input type="text" name="minimum_fee" id="minimum_fee" class="form-control text-center" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['minimum_fee'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"minimum_fee"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="default_rate">Default Rate</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <span class="input-group-addon"><i>%</i></span>
                                    <input type="text" class="form-control text-center" name="default_rate" id="default_rate" value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['default_rate'], ENT_QUOTES, 'UTF-8', true);?>
' placeholder="%"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"default_rate"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="escrow_rate">Escrow Rate</label>
                            <div class="col-row">
                                <div class="input-group">
                                    <span class="input-group-addon"><i>%</i></span>
                                    <input type='text' class="form-control text-center" name='escrow_rate' id="escrow_rate" value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['escrow_rate'], ENT_QUOTES, 'UTF-8', true);?>
' placeholder="%"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"escrow_rate"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type="submit" name="update_config" value="Update" class="btn btn-primary" />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/items",'text'=>"Cancel",'attr'=>'title="Cancel" class="btn btn-danger"'),$_smarty_tpl);?>

                            </p>
                        </div>
                    </div>
                </form><hr/>

                <h3>Fee Ranges</h3>
                <?php if ($_smarty_tpl->tpl_vars['fees']->value == TRUE) {?>
                    <div class="col-row">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Lower Limit</th>
                                <th>Upper Limit</th>
                                <th>% Rate</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fees']->value, 'fee');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fee']->value) {
?>
                                <?php echo smarty_function_form(array('method'=>"open",'action'=>'admin/items/fees'),$_smarty_tpl);?>

                                <tr>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fee']->value['low'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fee']->value['high'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fee']->value['rate'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td><input type="submit" class="form-control btn btn-danger" name="delete_rate[<?php echo $_smarty_tpl->tpl_vars['fee']->value['id'];?>
]" value="Delete"  /></td>
                                </tr>
                                </form>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </tbody>
                        </table>
                    </div><hr/>
                <?php }?>

                <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/items/fees",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>

                    <h4>Create Fee Range:</h4>

                    <div class="form">
                        <label class="control-label col-row" for="lower_limit">Lower Limit:</label>
                        <div class="col-row">
                            <div class="input-group">
                                <span class="input-group-addon"><i><?php echo $_smarty_tpl->tpl_vars['coin']->value['symbol'];?>
</i></span>
                                <input type="text" name="lower_limit" id="lower_limit" class="form-control text-center" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
"/>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"lower_limit"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <label class="control-label col-row" for="upper_limit">Upper Limit</label>
                        <div class="col-row">
                            <div class="input-group">
                                <span class="input-group-addon"><i><?php echo $_smarty_tpl->tpl_vars['coin']->value['symbol'];?>
</i></span>
                                <input type="text" class="form-control text-center" name="upper_limit" id="upper_limit" value='' placeholder="<?php echo $_smarty_tpl->tpl_vars['coin']->value['code'];?>
"/>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"upper_limit"),$_smarty_tpl);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <label class="control-label col-row" for="percentage_fee">% Fee</label>
                        <div class="col-row">
                            <div class="input-group">
                                <span class="input-group-addon"><i>%</i></span>
                                <input type='text' class="form-control text-center" name='percentage_fee' id="percentage_fee" value='' placeholder="%"/>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"percentage_fee"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                            <p align="center">
                                <input type='submit' name='create_fee' value='Add' class='btn btn-primary' />
                            </p>
                        </div>
                    </div>
                </form>

            </div></div></blockquote>
<?php }
}
