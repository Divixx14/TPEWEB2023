<?php
/* Smarty version 4.2.1, created on 2023-10-18 00:06:36
  from 'C:\xampp\htdocs\TPE-web2023\templates\autForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f056c69cdc9_44783561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '281fc6b9e77de421e7cf2606afbecee9b24d7a62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-web2023\\templates\\autForm.tpl',
      1 => 1697508130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f056c69cdc9_44783561 (Smarty_Internal_Template $_smarty_tpl) {
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
