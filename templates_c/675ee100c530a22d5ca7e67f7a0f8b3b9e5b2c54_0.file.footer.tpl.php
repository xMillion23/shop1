<?php
/* Smarty version 3.1.30, created on 2018-03-09 07:59:15
  from "/var/www/html/shop/application/views/smarty_templates/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa28523718f87_86723337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '675ee100c530a22d5ca7e67f7a0f8b3b9e5b2c54' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/footer.tpl',
      1 => 1520600350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa28523718f87_86723337 (Smarty_Internal_Template $_smarty_tpl) {
?>
      </div> <!-- /row-fluid -->
      <hr/>
      <div class="container-fluid">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <footer>
        <p class="text-center">
            <i>
<?php if ($_smarty_tpl->tpl_vars['footer']->value['price_index'] != 'Disabled' && isset($_smarty_tpl->tpl_vars['footer']->value['exchange_rates'])) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footer']->value['exchange_rates'], 'rate', false, 'code');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['rate']->value) {
?>
		<?php if (in_array($_smarty_tpl->tpl_vars['code']->value,array('time','time_f')) != TRUE) {?>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value, ENT_QUOTES, 'UTF-8', true);
echo strtoupper($_smarty_tpl->tpl_vars['code']->value);?>
 / 
		<?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    Obtained <?php echo $_smarty_tpl->tpl_vars['footer']->value['exchange_rates']['time_f'];?>
 from <?php echo $_smarty_tpl->tpl_vars['footer']->value['price_index'];?>
.
<?php }?>
                <br/><a href="#">Powered by Girl</a>
            </i>
        </p>
      </footer></nav>
    </div></div>  <!-- /container -->

  </body>
</html>
<?php }
}
