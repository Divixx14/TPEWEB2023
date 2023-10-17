<?php
/* Smarty version 4.2.1, created on 2023-10-18 01:03:21
  from 'C:\xampp\htdocs\TPE-web2023-2\templates\autForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f12b90b12d5_24155029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc3b2e1da41273c6c485b8f1f62ad5cc1ee8eff2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-web2023-2\\templates\\autForm.tpl',
      1 => 1697508130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f12b90b12d5_24155029 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
                <input required name="nombre" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Universidad</label>
        <input required name="universidad" type="text" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
</form><?php }
}
