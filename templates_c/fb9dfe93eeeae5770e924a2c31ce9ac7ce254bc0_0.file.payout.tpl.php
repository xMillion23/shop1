<?php
/* Smarty version 3.1.30, created on 2018-03-07 00:14:18
  from "/var/www/html/shop/application/views/smarty_templates/accounts/payout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9f752a2e58e1_48962454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb9dfe93eeeae5770e924a2c31ce9ac7ce254bc0' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/accounts/payout.tpl',
      1 => 1520399653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9f752a2e58e1_48962454 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <div class="col-row" id="vendor_public_keys">    
            <blockquote class="blockquote text-center">
            
            <h2><?php echo $_smarty_tpl->tpl_vars['coin']->value['name'];?>
 Payout Address</h2><hr/>

            <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
            <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


            <p>Your payout address is where funds should be sent when they are ready to be moved from the order address. Be sure to double check before you set this!</p>

            <?php if (is_array($_smarty_tpl->tpl_vars['address']->value) == TRUE) {?>
                <hr/><p>Your earnings are being sent to <a class="text-primary"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
</a> (as of <?php echo $_smarty_tpl->tpl_vars['address']->value['time_f'];?>
)</p>
            <?php }?>

            <?php echo smarty_function_form(array('method'=>"open",'action'=>"accounts/payout",'attr'=>array('class'=>'form-horizontal')),$_smarty_tpl);?>

            <hr/>
                <div class='form'>
                    <div class="col-row">
                        <label for="address" class="control-label col-row"><?php echo $_smarty_tpl->tpl_vars['coin']->value['name'];?>
 Address</label>
                        <div class="col-row">
                            <input type='text' class="form-control text-center" placeholder="Payout Address" name='address' value='' />
                        </div>
                    </div>
                    <div class="col-row text-warning">
                        <?php echo smarty_function_form(array('method'=>"form_error",'field'=>"address"),$_smarty_tpl);?>

                    </div>
                </div><br/>

                <div class='form'>
                    <div class="col-row">
                        <label for="address" class="control-label col-row">Password</label>
                        <div class="col-row">
                            <input type='password' class="form-control text-center" placeholder="Password" name='password' value='' />
                        </div>
                    </div>
                    <div class="col-row text-warning">
                         <?php echo smarty_function_form(array('method'=>"form_error",'field'=>"password"),$_smarty_tpl);?>

                    </div>
                </div>

                <div class="form">
                    <label class="control-label col-row" for="submit"></label>
                    <div class="col-row">
                        <p align="center">
                            <input type='submit' name='submit_payout_address' value='Submit' class='btn btn-primary' />
                            <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                        </p>
                    </div>
                </div>
            </form>

        </div></blockquote>
<?php }
}
