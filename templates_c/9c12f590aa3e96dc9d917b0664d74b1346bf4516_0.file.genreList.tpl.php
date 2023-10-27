<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:48:25
  from 'D:\xampp\htdocs\TPE-web2\templates\genreList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634de9c9617ae9_12555154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c12f590aa3e96dc9d917b0664d74b1346bf4516' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPE-web2\\templates\\genreList.tpl',
      1 => 1666050502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:secondDegree/header.tpl' => 1,
    'file:secondDegree/genForm.tpl' => 1,
    'file:secondDegree/footer.tpl' => 1,
  ),
),false)) {
function content_634de9c9617ae9_12555154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:secondDegree/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
    <ul class="list-group">
    <div class="genreContainer">
        <h2 class="genres h2">Modifique la Lista de Generos</h2>
    <li class='list-group-item d-flex justify-content-between align-items-center'>
        <div class="genresTableCont">
            <table class="table table-striped">
                <thead class="genreThead">
                    <tr>
                        <td>Generos</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </tr>
                </thead>
                <tbody class="genreTbody">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                    <tr>
                        <td><a href="genero/<?php echo $_smarty_tpl->tpl_vars['g']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['g']->value->genero;?>
</a></td>
                        <td><a href='showUpdateGen/<?php echo $_smarty_tpl->tpl_vars['g']->value->id_genero;?>
' class="btn btn-primary">Editar</a></button></td>
                        <td><a href='deleteGen/<?php echo $_smarty_tpl->tpl_vars['g']->value->id_genero;?>
' class="btn btn-danger">Eliminar</a></button></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <?php $_smarty_tpl->_subTemplateRender("file:secondDegree/genForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
        </div>
    </li>
    </div>
    </ul>

<?php } else { ?>
    <ul class="list-group">
    <li class='list-group-item d-flex justify-content-between align-items-center'>
    <div class="genreContainer unlogged">
        <h2 class="genres h2">Vea cada pelicula por su genero</h2>
        <ul class="genreList">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
            <li><a href="genero/<?php echo $_smarty_tpl->tpl_vars['g']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['g']->value->genero;?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    </li>
    </ul>
<?php }
$_smarty_tpl->_subTemplateRender("file:secondDegree/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
