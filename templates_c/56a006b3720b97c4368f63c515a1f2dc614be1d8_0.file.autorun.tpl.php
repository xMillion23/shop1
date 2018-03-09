<?php
/* Smarty version 3.1.30, created on 2018-03-01 10:48:02
  from "/var/www/html/shop/application/views/smarty_templates/admin/autorun.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9820b2dff1d0_93634320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56a006b3720b97c4368f63c515a1f2dc614be1d8' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/autorun.tpl',
      1 => 1519919279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9820b2dff1d0_93634320 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="container-fluid" id="admin_edit_items">
            <blockquote class="blockquote text-center">
            <div clas="col-row">

                <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>


                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php if ($_smarty_tpl->tpl_vars['jobs']->value == FALSE) {?>
                <p>There are no autorun jobs. These are stored in ./application/libraries/Autorun. Either
                    this folder is empty or you have not configured your cron daemon to trigger
                    the jobs. Add this following line to your users crontab to activate the jobs:</p>
                <pre><?php echo $_smarty_tpl->tpl_vars['autorun_cmd']->value;?>
</pre>
                <?php } else { ?>

                <p>Jobs can be added to the Autorun system by placing them in ./application/libraries/Autorun. From there, you can choose to change the frequency or disable it altogether. To disable a job, check the box beside it and click Update.</p>

                <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/autorun",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>

                    <?php echo smarty_function_form(array('method'=>"validation_errors"),$_smarty_tpl);?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs']->value, 'job', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['job']->value) {
?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_jobs_interval_field", null, null);
?>
jobs[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


                        <?php if ($_smarty_tpl->tpl_vars['index']->value == 'price_index' && $_smarty_tpl->tpl_vars['config']->value['price_index'] == 'Disabled') {?>
                        <?php } else { ?>
                            <div class="panel panel-<?php if ($_smarty_tpl->tpl_vars['job']->value['interval'] == '0') {?>warning<?php } else { ?>success<?php }?>">
                                <div class="panel-heading">
                                    <span class="<?php if ($_smarty_tpl->tpl_vars['job']->value['interval'] == '0') {?>fas fa-times<?php } else { ?>fas fa-check<?php }?>"></span>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['job']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                    <div class="pull-right">Last Run: <?php echo strtolower($_smarty_tpl->tpl_vars['job']->value['time_f']);?>
</div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-row"><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['job']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</i></div>
                                    </div>
                                    <div class="form">
                                        <div class="col-row">
                                            <div class="col-row">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i>Run every</i></span>
                                                    <input type="text" name="<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_jobs_interval_field');?>
" class="form-control" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['job']->value['interval'], ENT_QUOTES, 'UTF-8', true);?>
" />
                                                    <span class="input-group-addon"><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['job']->value['interval_type'], ENT_QUOTES, 'UTF-8', true);?>
</i></span>
                                                </div>
                                            </div>

                                            <div class="col-row">
                                                <div class="checkbox-inline">
                                                    <input type='checkbox' name='disabled_jobs[<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
]' value='1' <?php if ($_smarty_tpl->tpl_vars['job']->value['interval'] == '0') {?>checked <?php }?>/> Disabled
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                    <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="submit"></label>
                            <div class="col-row">
                                <p align="center">
                                    <input type='submit' value='Update' class='btn btn-primary' />
                                    <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/autorun",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                                </p>
                            </div>
                        </div>
                    </div>
                </form>
                <?php }?>
            </div></div></blockquote>
<?php }
}
