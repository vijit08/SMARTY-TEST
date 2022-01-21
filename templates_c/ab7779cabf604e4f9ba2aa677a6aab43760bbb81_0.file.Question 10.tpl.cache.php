<?php
/* Smarty version 3.1.39, created on 2022-01-21 11:20:39
  from 'C:\xampp\htdocs\smarty-master\SMARTY TEST\templates\Question 10.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ea88f768fc29_37164285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab7779cabf604e4f9ba2aa677a6aab43760bbb81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-master\\SMARTY TEST\\templates\\Question 10.tpl',
      1 => 1642760436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ea88f768fc29_37164285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '36658586061ea88f750d908_36687054';
?>
<html>
<?php if ((1 & $_smarty_tpl->tpl_vars['Number']->value)) {?>
    <p>NUMBER IS ODD</p>
<?php } else { ?>
    <p>NUMBER IS EVEN</p>
<?php }
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration === 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;?>
    <p><?php echo $_smarty_tpl->tpl_vars['Number']->value;?>
x<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['Number']->value*$_smarty_tpl->tpl_vars['var']->value;?>
</p>
<?php }
}
?>
</html><?php }
}
