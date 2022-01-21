<?php
/* Smarty version 3.1.39, created on 2022-01-21 12:01:37
  from 'C:\xampp\htdocs\smarty-master\SMARTY TEST\templates\Question 7.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ea9291140617_46697472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '873fad50bc5760dcdfc42f1c2bb10af44b515231' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-master\\SMARTY TEST\\templates\\Question 7.tpl',
      1 => 1642762893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ea9291140617_46697472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty-master\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty-master\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),));
$_smarty_tpl->compiled->nocache_hash = '74549800761ea9290dc4822_34202178';
?>
<p>TO LOWERCASE</p>
<?php echo mb_strtolower($_smarty_tpl->tpl_vars['string_one']->value, 'UTF-8');?>

<br>
<?php echo mb_strtolower($_smarty_tpl->tpl_vars['string_two']->value, 'UTF-8');?>

<br>
<br>
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['string_one']->value,'ucertify','uCertify');?>

<br>
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['string_two']->value,'ucertify','uCertify');?>

<br>
<br>
<?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['string_one']->value,30,"\n",false);?>

<br>
<?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['string_two']->value,30,"\n",false);?>

<br>
<br>
<?php echo ($_smarty_tpl->tpl_vars['string_one']->value).($_smarty_tpl->tpl_vars['string_two']->value);?>

<?php }
}
