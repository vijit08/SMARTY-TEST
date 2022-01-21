<?php
/* Smarty version 3.1.39, created on 2022-01-21 12:19:09
  from 'C:\xampp\htdocs\smarty-master\SMARTY TEST\templates\Question 5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ea96ad14df76_00699669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2275be79e4c151ee23cee07447c1f2ea81d736a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-master\\SMARTY TEST\\templates\\Question 5.tpl',
      1 => 1642763945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ea96ad14df76_00699669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty-master\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty-master\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
$_smarty_tpl->compiled->nocache_hash = '182015021861ea96ac861277_52938158';
?>
<p>COUNTER</p>
<?php echo smarty_function_counter(array('start'=>0,'skip'=>1),$_smarty_tpl);?>

<br>
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br>
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br>
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br>

<?php
$__section_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rows_0_total = $__section_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rows'] = new Smarty_Variable(array());
if ($__section_rows_0_total !== 0) {
for ($__section_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] = 0; $__section_rows_0_iteration <= $__section_rows_0_total; $__section_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']++){
?>
    <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] : null)];?>
</td>
    </tr>
<?php
}
}
}
}
