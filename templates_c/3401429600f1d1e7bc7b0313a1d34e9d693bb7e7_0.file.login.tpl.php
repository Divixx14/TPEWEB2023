<?php
/* Smarty version 4.2.1, created on 2023-10-18 00:01:06
  from 'C:\xampp\htdocs\TPE-web2023\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f0422aa24c9_28633425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3401429600f1d1e7bc7b0313a1d34e9d693bb7e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-web2023\\templates\\login.tpl',
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
function content_652f0422aa24c9_28633425 (Smarty_Internal_Template $_smarty_tpl) {
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
