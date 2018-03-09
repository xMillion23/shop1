<?php
/* Smarty version 3.1.30, created on 2018-03-07 09:31:26
  from "/var/www/html/shop/application/views/smarty_templates/reviews/view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9ff7be64ecd9_89437984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33ff3bf71bd9f96369ca589b22b5f9d731418dfc' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/reviews/view.tpl',
      1 => 1520433069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9ff7be64ecd9_89437984 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_review_a_url", null, null);
?>
reviews/view/<?php echo $_smarty_tpl->tpl_vars['review_type']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['subject_hash']->value;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_review_a_str", null, null);
?>
[All Reviews: <?php echo $_smarty_tpl->tpl_vars['review_count']->value['all'];?>
]<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_review_p_url", null, null);
?>
reviews/view/<?php echo $_smarty_tpl->tpl_vars['review_type']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['subject_hash']->value;?>
/0<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_review_p_str", null, null);
?>
[Positive: <?php echo $_smarty_tpl->tpl_vars['review_count']->value['positive'];?>
]<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_review_d_url", null, null);
?>
reviews/view/<?php echo $_smarty_tpl->tpl_vars['review_type']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['subject_hash']->value;?>
/1<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_review_d_str", null, null);
?>
[Disputed: <?php echo $_smarty_tpl->tpl_vars['review_count']->value['disputed'];?>
]<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


            <div class="col-row" id="view-reviews">
            <blockquote class="blockquote text-center">
                <h2><?php if (is_string($_smarty_tpl->tpl_vars['disputed']->value) == TRUE) {?>
                        <?php if ($_smarty_tpl->tpl_vars['disputed']->value == '0') {?>Positive<?php } else { ?>Negative<?php }?> reviews
                    <?php } else { ?>Reviews
                    <?php }?> for <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
</h2><hr/>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', '');
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <div class='form'>
                    <div class='col-row'>Average Rating: <?php echo $_smarty_tpl->tpl_vars['average']->value;?>
</div>

                    <div class='col-row'>
                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_review_a_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_review_a_str'),'attr'=>''),$_smarty_tpl);?>

                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_review_p_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_review_p_str'),'attr'=>''),$_smarty_tpl);?>

                        <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_review_d_url'),'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_review_d_str'),'attr'=>''),$_smarty_tpl);?>

                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['search_reviews']->value == TRUE) {?>

                    <div class="well" style="background:white;">
                        <h4>Recent Reviews</h4>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_reviews']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
                            <hr/>
                            <div class="form">
                                <div class="col-row">
                                    <div class="col-row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['review']->value['rating'], 'rating', false, 'quality');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['quality']->value => $_smarty_tpl->tpl_vars['rating']->value) {
?>
                                            <div class="col-row">
                                                <div class="col-row">
                                                    <?php echo ucfirst($_smarty_tpl->tpl_vars['quality']->value);?>

                                                </div>
                                                <div class="col-row">
                                                    <?php
$_smarty_tpl->tpl_vars['var1'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var1']->step = 1;$_smarty_tpl->tpl_vars['var1']->total = (int) ceil(($_smarty_tpl->tpl_vars['var1']->step > 0 ? $_smarty_tpl->tpl_vars['rating']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['rating']->value)+1)/abs($_smarty_tpl->tpl_vars['var1']->step));
if ($_smarty_tpl->tpl_vars['var1']->total > 0) {
for ($_smarty_tpl->tpl_vars['var1']->value = 1, $_smarty_tpl->tpl_vars['var1']->iteration = 1;$_smarty_tpl->tpl_vars['var1']->iteration <= $_smarty_tpl->tpl_vars['var1']->total;$_smarty_tpl->tpl_vars['var1']->value += $_smarty_tpl->tpl_vars['var1']->step, $_smarty_tpl->tpl_vars['var1']->iteration++) {
$_smarty_tpl->tpl_vars['var1']->first = $_smarty_tpl->tpl_vars['var1']->iteration == 1;$_smarty_tpl->tpl_vars['var1']->last = $_smarty_tpl->tpl_vars['var1']->iteration == $_smarty_tpl->tpl_vars['var1']->total;?><span class="fas fa-star"></span><?php }
}
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars['var1']->value) : $_smarty_tpl->tpl_vars['var1']->value-(5)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = $_smarty_tpl->tpl_vars['var1']->value, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?><span class="far fa-star"></span><?php }
}
?>

                                                </div>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <div class="col-row">
                                            <div class="col-row">
                                                Average
                                            </div>
                                            <div class="col-row">
                                                <?php
$_smarty_tpl->tpl_vars['var1'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var1']->step = 1;$_smarty_tpl->tpl_vars['var1']->total = (int) ceil(($_smarty_tpl->tpl_vars['var1']->step > 0 ? $_smarty_tpl->tpl_vars['review']->value['average_rating']+1 - (1) : 1-($_smarty_tpl->tpl_vars['review']->value['average_rating'])+1)/abs($_smarty_tpl->tpl_vars['var1']->step));
if ($_smarty_tpl->tpl_vars['var1']->total > 0) {
for ($_smarty_tpl->tpl_vars['var1']->value = 1, $_smarty_tpl->tpl_vars['var1']->iteration = 1;$_smarty_tpl->tpl_vars['var1']->iteration <= $_smarty_tpl->tpl_vars['var1']->total;$_smarty_tpl->tpl_vars['var1']->value += $_smarty_tpl->tpl_vars['var1']->step, $_smarty_tpl->tpl_vars['var1']->iteration++) {
$_smarty_tpl->tpl_vars['var1']->first = $_smarty_tpl->tpl_vars['var1']->iteration == 1;$_smarty_tpl->tpl_vars['var1']->last = $_smarty_tpl->tpl_vars['var1']->iteration == $_smarty_tpl->tpl_vars['var1']->total;?><span class="fas fa-star"></span><?php }
}
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars['var1']->value) : $_smarty_tpl->tpl_vars['var1']->value-(5)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = $_smarty_tpl->tpl_vars['var1']->value, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?><span class="far fa-star"></span><?php }
}
?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-row"></div>

                                    <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['review']->value['time_f'];?>
</span>
                                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['comments'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                                </div>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>

                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['disputed']->value == FALSE) {?>
                        No reviews for <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        No <?php if ($_smarty_tpl->tpl_vars['disputed']->value == '0') {?>positive<?php } else { ?>negative<?php }?> reviews for <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
.
                    <?php }?>
                <?php }?>

            </div></blockquote>
<?php }
}
