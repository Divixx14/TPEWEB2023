<?php
/* Smarty version 4.2.1, created on 2023-10-18 00:00:34
  from 'C:\xampp\htdocs\TPE-web2023\templates\LibrosList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f0402570697_75037934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3059f009aadddd3ef39a2fbc90e65180ba70dd1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-web2023\\templates\\LibrosList.tpl',
      1 => 1697574240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:LibroForm.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f0402570697_75037934 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\TPE-web2023\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((isset($_SESSION['USER_ID']))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:LibroForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>


<table class="table table-striped">
    <thead>
        <th>Nombre</th>
        <th>Nombre del autor</th>
        <th>Año de Publicacion</th>
        <th>Descripcion</th>
    </thead>     

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
    <tr>
        <span>  
            <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libro']->value->nombre,35);?>
</td>
            <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libro']->value->nombre_del_autor,35);?>
</td>
            <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libro']->value->anio_publicacion,35);?>
</td>
            <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['libro']->value->descripcion,1000);?>
</td> 
                <?php if ((isset($_SESSION['USER_ID']))) {?>
                <td><a href='editLibroform/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id;?>
' type='button' class='btn btn-info'>Editar</a></td>
                <td><a href='eliminar/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
                <?php }?>
        </span> 
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
