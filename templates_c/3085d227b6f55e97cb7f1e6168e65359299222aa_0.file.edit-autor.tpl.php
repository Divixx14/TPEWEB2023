<?php
/* Smarty version 4.2.1, created on 2023-10-18 00:06:41
  from 'C:\xampp\htdocs\TPE-web2023\templates\edit-autor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f05713890b2_14779839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3085d227b6f55e97cb7f1e6168e65359299222aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-web2023\\templates\\edit-autor.tpl',
      1 => 1697509595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f05713890b2_14779839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <h1 class="display-5 mt-5 text-center">Editar Autor</h1>
        <div class="row justify-content-md-center">
            <form action="editautor/<?php echo $_smarty_tpl->tpl_vars['autor']->value->id;?>
" method="POST" class="my-4">
                <div class="row justify-content-md-center">
                    <div class="col-9">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="nombre" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->nombre;?>
" required>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <label>Universidad</label>
                            <input name="universidad" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->universidad;?>
" required>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="submit" class="btn btn-primary mt-2">Editar autor</button>
                </div>
            </form>  
        </div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
