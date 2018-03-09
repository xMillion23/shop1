<?php
/* Smarty version 3.1.30, created on 2018-03-01 15:54:00
  from "/var/www/html/shop/application/views/smarty_templates/admin/user_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9868685d20c8_03636121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '491bff2ac483d559ef824fa37fc859bf2512340d' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/admin/user_list.tpl',
      1 => 1519937637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9868685d20c8_03636121 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
?>
            <div class="container-fluid" id="admin-users-list">
            <blockquote class="blockquote text-center">
            <div class="col-row">

                <h2><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'admin/users','text'=>'Back','attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>
<br/>User List</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <div class="form">
                    <?php echo $_smarty_tpl->tpl_vars['links']->value;?>


                    <?php echo smarty_function_form(array('method'=>"open",'url'=>'admin/tokens','attr'=>'class="form-horizontal"'),$_smarty_tpl);?>


                    <p><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/users/list#Search",'text'=>'Click here to search for a user','attr'=>'class="btn btn-primary"'),$_smarty_tpl);?>
</p>

                    <?php if ($_smarty_tpl->tpl_vars['users']->value == TRUE) {?>
                    <table class='table'>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th></th>
                            <th>Activated</th>
                            <th>Banned?</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_user_url", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_ban_url", null, null);
?>
admin/ban_user/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_ban_url_status", null, null);
if ($_smarty_tpl->tpl_vars['user']->value['banned'] == TRUE) {?>Unban<?php } else { ?>Ban<?php }?> user?<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                            <tr>
                                <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_user_url'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>''),$_smarty_tpl);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_role'];?>
</td>
                                <td>Registered: <?php echo $_smarty_tpl->tpl_vars['user']->value['register_time_f'];?>
<br/><br/>Last Login: <?php echo $_smarty_tpl->tpl_vars['user']->value['login_time_f'];?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['user']->value['entry_paid'] == TRUE) {?>yes<?php }?></td>
                                <td><?php if ($_smarty_tpl->tpl_vars['user']->value['banned'] == TRUE) {?>yes<?php }?></td>
                                <td><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_ban_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_ban_url_status'),'attr'=>'class="btn btn-warning"'),$_smarty_tpl);?>
</td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                    <?php } else { ?>
                        <?php if (isset($_smarty_tpl->tpl_vars['search_fail']->value) && $_smarty_tpl->tpl_vars['search_fail']->value == TRUE) {?>
                            No users were found in your query.
                        <?php } else { ?>
                            There are no users.
                        <?php }?>
                    <?php }?>

                    <hr/><a name="Search"></a><legend>Search Users</legend>
                    <?php echo smarty_function_form(array('method'=>"open",'action'=>"admin/users/list",'attr'=>'class="form-horizontal"'),$_smarty_tpl);?>

                        <div class='form'>
                            <label class="control-label col-row" for="user_name">Username:</label>
                            <div class="col-row"><input type="text" class="form-control text-center" id="user_name" name="user_name" value="" placeholder="Username"/></div>
                            <br/><div class="col-row"><input type="submit" name="search_username" value="Search" class="btn btn-primary"/></div>
                        </div><hr/>

                        <div class='form'>
                            <label class="control-label col-row" for="search_for">Search For:</label>
                            <div class="col-row">
                                <select name='search_for' id="search_for" class="form-control">
                                    <option value=''></option>
                                    <option value='all_users'>All Users</option>
                                    <option value='buyers'>Buyer Users</option>
                                    <option value='vendors'>Vendor Users</option>
                                    <option value='admins'>Admin Users</option>
                                </select>
                            </div><br/>
                            <div class="col-row">
                                <input type='submit' name='list_options' value='Advanced Search' class='btn btn-primary' />
                            </div>
                        </div><hr/>

                        <div class='form'>
                            <label class="control-label col-row" for="with_property">That Are:</label>
                            <div class='col-row'>
                                <select name='with_property' id="with_property" class="form-control">
                                    <option value=''></option>
                                    <option value='activated'>Activated</option>
                                    <option value='not_activated'>Not Activated</option>
                                    <option value='banned'>Banned</option>
                                    <option value='not_banned'>Not Banned</option>
                                </select>
                            </div>
                        </div><hr/>

                        <div class="form">
                            <label class="control-label col-row">Order By</label>
                            <div class="col-row">
                                <select name="order_by" id="order_by" class="form-control">
                                    <option value=""></option>
                                    <option value="id">User ID</option>
                                    <option value="user_name">User Name</option>
                                    <option value="register_time">Time Registered</option>
                                    <option value="login_time">Login Time</option>
                                    <option value="banned">Banned?</option>
                                </select>
                            </div>
                        </div><hr/>

                        <div class='form'>
                            <label class='control-label col-row'>List</label>
                            <div class='col-row'>
                                <label class="radio-inline">
                                    <input type='radio' name='list' value='ASC' /> Ascending
                                </label>
                                <label class="radio-inline">
                                    <input type='radio' name='list' value='DESC' /> Descending
                                </label>
                                <label class="radio-inline">
                                    <input type='radio' name='list' value='random' /> Random
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div></div></blockquote>
<?php }
}
