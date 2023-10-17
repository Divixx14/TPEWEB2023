<?php
/* Smarty version 4.2.1, created on 2023-10-18 01:04:14
  from 'C:\xampp\htdocs\TPE-web2023-2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f12ee135187_70092693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2f3b589cfb7a68dc87f33c697cb58eb5992af14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-web2023-2\\templates\\login.tpl',
      1 => 1697508264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f12ee135187_70092693 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="form small">
    <form action='validate' method='post'>

        <label for='email'>Email</label>
        <input type='email' name='email' id='email'>

        <label for='password'>Password</label>
        <input type='Password' name='password' id='password'>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        <?php }?>
        <input type='submit' value='Iniciar Sesion'>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
