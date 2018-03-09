<?php
/* Smarty version 3.1.30, created on 2018-03-06 03:56:41
  from "/var/www/html/shop/application/views/smarty_templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9e57c989d9e0_89307310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d1a7c97d7918f5840c4151a0ad2decf3962505a' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/header.tpl',
      1 => 1520326594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9e57c989d9e0_89307310 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['header']->value['site_description'], ENT_QUOTES, 'UTF-8', true);?>
" />
        <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['header']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
 | <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['header']->value['site_title'], ENT_QUOTES, 'UTF-8', true);?>
</title>
        <link rel="stylesheet" type="text/css"  href="<?php echo smarty_function_url(array('type'=>"base_url",'url'=>''),$_smarty_tpl);?>
assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css"  href="<?php echo smarty_function_url(array('type'=>"base_url",'url'=>''),$_smarty_tpl);?>
assets/css/style.css">
        <link rel="stylesheet" href="<?php echo smarty_function_url(array('type'=>"base_url",'url'=>''),$_smarty_tpl);?>
assets/css/fontawesome-all.css">
        <!-- JavaScript -->
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_url(array('type'=>"base_url",'url'=>''),$_smarty_tpl);?>
assets/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_url(array('type'=>"base_url",'url'=>''),$_smarty_tpl);?>
assets/js/popper.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_url(array('type'=>"base_url",'url'=>''),$_smarty_tpl);?>
assets/js/fontawesome-all.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo smarty_function_url(array('type'=>"base_url",'url'=>''),$_smarty_tpl);?>
assets/js/bootstrap.js"><?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->tpl_vars['header']->value['header_meta'];?>

</head>
<body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
                <a class="navbar-brand" href="#"><img src="/icons/col.png" width="40" height="40" /></a>
                <div class="container-fluid">
                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>'','text'=>htmlspecialchars($_smarty_tpl->tpl_vars['header']->value['site_title'], ENT_QUOTES, 'UTF-8', true),'attr'=>"class='navbar-brand'"),$_smarty_tpl);?>



<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
                     

<div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav ml-auto">
                        <?php if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Admin') {?>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'','text'=>"Home",'attr'=>"title='Home' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"items",'text'=>"Items",'attr'=>"title='Items' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin",'text'=>"Admin",'attr'=>"title='Admin' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php ob_start();
if ($_smarty_tpl->tpl_vars['count_unread_messages']->value > 0) {
echo " (";
echo (string)$_smarty_tpl->tpl_vars['count_unread_messages']->value;
echo ")";
}
$_prefixVariable1=ob_get_clean();
echo smarty_function_url(array('type'=>"anchor",'url'=>"inbox",'text'=>"Inbox".$_prefixVariable1,'attr'=>'title="Inbox" class="nav-link"'),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account",'text'=>"Account",'attr'=>"title='Account' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'','text'=>"News",'attr'=>"title='News' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'','text'=>"Help",'attr'=>"title='Help' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"logout",'text'=>"Logout",'attr'=>"title='Logout' class='nav-link'"),$_smarty_tpl);?>
</li>

                        <?php } elseif ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Buyer') {?>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'','text'=>"Home",'attr'=>"title='Home' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"items",'text'=>"Items",'attr'=>"title='Items' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php ob_start();
if ($_smarty_tpl->tpl_vars['count_unread_messages']->value > 0) {
echo " (";
echo (string)$_smarty_tpl->tpl_vars['count_unread_messages']->value;
echo ")";
}
$_prefixVariable2=ob_get_clean();
echo smarty_function_url(array('type'=>"anchor",'url'=>"inbox",'text'=>"Inbox".$_prefixVariable2,'attr'=>'title="Inbox" class="nav-link"'),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account",'text'=>"Account",'attr'=>"title='Account' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'','text'=>"News",'attr'=>"title='News' class='nav-link'"),$_smarty_tpl);?>
</li>                                                       <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'','text'=>"Help",'attr'=>"title='Help' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"logout",'text'=>"Logout",'attr'=>"title='Logout' class='nav-link'"),$_smarty_tpl);?>
</li>

                        <?php } elseif ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Vendor') {?>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'','text'=>"Home",'attr'=>"title='Home' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"items",'text'=>"Items",'attr'=>"title='Items' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php ob_start();
if ($_smarty_tpl->tpl_vars['count_unread_messages']->value > 0) {
echo " (";
echo (string)$_smarty_tpl->tpl_vars['count_unread_messages']->value;
echo ")";
}
$_prefixVariable3=ob_get_clean();
echo smarty_function_url(array('type'=>"anchor",'url'=>"inbox",'text'=>"Inbox".$_prefixVariable3,'attr'=>'title="Inbox" class="nav-link"'),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"account",'text'=>"Account",'attr'=>"title='Account' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'','text'=>"News",'attr'=>"title='News' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'','text'=>"Help",'attr'=>"title='Help' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"logout",'text'=>"Logout",'attr'=>"title='Logout' class='nav-link'"),$_smarty_tpl);?>
</li>

                        <?php } elseif ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'half') {?>
                                <?php if ($_smarty_tpl->tpl_vars['allow_guests']->value == TRUE) {?>
                                        <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'','text'=>"Home",'attr'=>"title='Home' class='nav-link'"),$_smarty_tpl);?>
</li>
                                        <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"items",'text'=>"Items",'attr'=>"title='Items' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <?php }?>
                                <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"logout",'text'=>"Logout",'attr'=>"title='Logout' class='nav-link'"),$_smarty_tpl);?>
</li>

                        <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['allow_guests']->value == TRUE) {?>
                                        <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>'','text'=>"Home",'attr'=>"title='Home' class='nav-link'"),$_smarty_tpl);?>
</li>
                                        <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"items",'text'=>"Items",'attr'=>"title='Items' class='nav-link'"),$_smarty_tpl);?>
</li>
                                <?php }?>
                                        <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"login",'text'=>"Login",'attr'=>"title='Login' class='nav-link'"),$_smarty_tpl);?>
</li>
                                        <li class="nav-item"><?php echo smarty_function_url(array('type'=>"anchor",'url'=>"register",'text'=>"Register",'attr'=>"title='Register' class='nav-link'"),$_smarty_tpl);?>
</li>
                        <?php }?>

                        </ul>
                        </div>
                </div>
        </nav>

<?php if (in_array($_smarty_tpl->tpl_vars['current_user']->value['user_role'],array('guest','half')) == FALSE) {?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<div class="container-flu">
    <div class="input-group">
      <input type="text" class="form-control text-right-center" placeholder="Search">
      <span class="input-group-btn">
        <button class="btn btn-outline-success" type="submit">Go!</button>
      </span>
    </div>
  </div>

</nav>

<?php }?>
        <br/>
        <!-- left-side-bar-space -->
        <div class="container-fluid">
               <div class="text-center"><div class="col-row">
                <!-- sidebar-nav -->
               <div class="form">
                        <?php if (in_array($_smarty_tpl->tpl_vars['current_user']->value['user_role'],array('guest','half')) == FALSE) {?>
                                <!-- Logged in bar-->
                                <div class="list-group">
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_user_link", null, null);
?>
user/<?php echo $_smarty_tpl->tpl_vars['current_user']->value['user_hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_user_link'),'text'=>htmlspecialchars($_smarty_tpl->tpl_vars['current_user']->value['user_name'], ENT_QUOTES, 'UTF-8', true),'attr'=>"class='list-group-item' title='Your Profile'"),$_smarty_tpl);?>

                                <?php if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Vendor') {?>
                                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"listings",'text'=>"My Listings",'attr'=>"class='list-group-item' title='My Listings'"),$_smarty_tpl);?>

                                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"orders",'text'=>"Orders",'attr'=>"class='list-group-item' title='Orders'"),$_smarty_tpl);?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Admin') {?>
                                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/orders",'text'=>"Orders",'attr'=>"class='list-group-item' title='Orders'"),$_smarty_tpl);?>

                                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"admin/disputes",'text'=>"Disputes",'attr'=>"class='list-group-item' title='Disputes'"),$_smarty_tpl);?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Buyer') {?>
                                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"purchases",'text'=>"My Purchases",'attr'=>"class='list-group-item' title='Your Purchases'"),$_smarty_tpl);?>

                                <?php }?>
                                </div>
                        <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['category_data']->value['block'] == FALSE) {?>
                <div class="card bg-light card-body mb-3 sidebar-nav">
                 <a data-toggle="collapse" href="#sidebar" aria-expanded="true" aria-controls="test-block"><h6>Categories:</h6></a>
                        <ul class="nav navbar-nav list-inline">
                           <div id="sidebar" class="collapse show">
                                <div class="card-block">
                                    <?php echo $_smarty_tpl->tpl_vars['category_data']->value['cats'];?>

                                </div></div>
                            </div>
                        </ul>
                </div>
                <?php }?>
        </div>
        <!-- /sidebar-nav -->
<?php }
}
