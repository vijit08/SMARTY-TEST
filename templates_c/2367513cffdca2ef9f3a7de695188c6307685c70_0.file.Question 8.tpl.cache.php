<?php
/* Smarty version 3.1.39, created on 2022-01-21 11:42:48
  from 'C:\xampp\htdocs\smarty-master\SMARTY TEST\templates\Question 8.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ea8e28270133_06938631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2367513cffdca2ef9f3a7de695188c6307685c70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-master\\SMARTY TEST\\templates\\Question 8.tpl',
      1 => 1642761765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ea8e28270133_06938631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13989980361ea8e280a0e93_09890505';
?>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['New']->value, 'culture');
$_smarty_tpl->tpl_vars['culture']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['culture']->value) {
$_smarty_tpl->tpl_vars['culture']->do_else = false;
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['culture']->value, 'cult');
$_smarty_tpl->tpl_vars['cult']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cult']->value) {
$_smarty_tpl->tpl_vars['cult']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['cult']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
