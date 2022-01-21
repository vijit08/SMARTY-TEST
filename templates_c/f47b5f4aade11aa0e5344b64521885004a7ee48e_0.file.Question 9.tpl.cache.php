<?php
/* Smarty version 3.1.39, created on 2022-01-21 11:48:56
  from 'C:\xampp\htdocs\smarty-master\SMARTY TEST\templates\Question 9.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ea8f98ef1543_77764959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f47b5f4aade11aa0e5344b64521885004a7ee48e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-master\\SMARTY TEST\\templates\\Question 9.tpl',
      1 => 1642762134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ea8f98ef1543_77764959 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty-master\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty-master\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),));
$_smarty_tpl->compiled->nocache_hash = '45935569061ea8f98cd3234_27605852';
echo smarty_function_html_checkboxes(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['Options']->value,'selected'=>$_smarty_tpl->tpl_vars['select']->value,'seperator'=>'<br>'),$_smarty_tpl);?>

<br>
<?php echo smarty_function_html_radios(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['Options']->value,'selected'=>$_smarty_tpl->tpl_vars['select']->value,'seperator'=>'<br>'),$_smarty_tpl);
}
}
