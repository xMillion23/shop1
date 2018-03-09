<?php
/* Smarty version 3.1.30, created on 2018-03-02 06:57:46
  from "/var/www/html/shop/application/views/smarty_templates/messages/send.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a993c3ab79c17_86426961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31d78626c180f0a45e9c7e18a3f0d66901a2ad33' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/messages/send.tpl',
      1 => 1519991845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a993c3ab79c17_86426961 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
             <div class="col-row" id="send-message">
             <blockquote class="blockquote text-center"><h2>Send Message</h2><hr/>
             <div class="col-row">

                <?php $_smarty_tpl->_assignInScope('defaultMessage', "Enter your message below: ");
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php echo smarty_function_form(array('method'=>"open",'action'=>$_smarty_tpl->tpl_vars['action_uri']->value,'attr'=>array('class'=>'form-horizontal','name'=>'sendMessageForm')),$_smarty_tpl);?>

                       <div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="recipient">Recipient</label>
                            <div class="col-row">
                                <input type='text' class="form-control text-center" id='recipient' name='recipient' value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['to_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"recipient"),$_smarty_tpl);?>
</div>
                    </div>

                    <br/><div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="subject">Subject</label>
                            <div class="col-row">
                                <input type='text' class="form-control text-center" id='subject' name='subject' value="<?php if (isset($_smarty_tpl->tpl_vars['subject']->value) == TRUE) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['subject']->value, ENT_QUOTES, 'UTF-8', true);
}?>" />
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"subject"),$_smarty_tpl);?>
</div>
                    </div>

                    <br/><div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="message">Message</label>
                            <div class="col-row">
                                <textarea name="message" class="form-control" id='message' rows='6'><?php echo smarty_function_form(array('method'=>"set_value",'field'=>"message"),$_smarty_tpl);?>
</textarea>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"message"),$_smarty_tpl);?>
</div>
                    </div>


                    <br/><div class="form">
                        <div class="col-row">
                            <label class="control-label col-row" for="delete_on_read">Delete After Reading?</label>
                            <div class="col-row">
                                <div class="checkbox-inline">
                                    <label class="checkbox inline">
                                        <input type='checkbox' id="delete_on_read" name='delete_on_read' value='1' />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-row text-warning"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"delete_on_read"),$_smarty_tpl);?>
</div>
                    </div>

                    <input type='hidden' name='public_key' style='display:none;' value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['public_key']->value, ENT_QUOTES, 'UTF-8', true);?>
'/>

                    <div class="form">
                        <label class="control-label col-row" for="submit"></label>
                        <div class="col-row">
                                <input type='submit' class="btn btn-success" value="Send" onclick='messageEncrypt()' />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"inbox",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                       </div>
                    </div>
                </form>
            </div></div></blockquote>
<?php }
}
