<?php
/* Smarty version 3.1.30, created on 2018-03-01 12:23:26
  from "/var/www/html/shop/application/views/smarty_templates/admin/log.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98370ed68089_11818868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd05d5fa6369ea85436d16523d087951266bfa63' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/log.tpl',
      1 => 1519925003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a98370ed68089_11818868 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
?>
            <div class="container-fluid" id="admin-dispute-form">
            <blockquote class="blockquote text-center">
            <div class="col-row">
                <h2><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/logs",'text'=>"Back",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>
<br/>Log Record: <?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
</h2><hr/>
                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>

               <div class="form">
                    <div class="col-row">
                        <div class="col-row">Warning Level</div>
                        <div class="col-row"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value['info_level'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">Time</div>
                        <div class="col-row"><?php echo $_smarty_tpl->tpl_vars['log']->value['time_f'];?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">By</div>
                        <div class="col-row"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value['caller'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    </div><hr/>

                    <div class="form">
                        <div class="col-row">Message</div>
                        <div class="col-row card bg-light card-body mb-3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['log']->value['message'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    </div>
                </div>
            </div></div></blockquote>
<?php }
}
