<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 17:28:39
  from 'C:\xampp\htdocs\web1\wer\templates\formProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7ddea745c432_44580168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5b77a542566136081adb7a34204faf5ebf5112c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\wer\\templates\\formProducto.tpl',
      1 => 1602084489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7ddea745c432_44580168 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <h1> Lista de Productos</h1>
    <form action="agregarProducto" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input  id="nombre" name="input_nombre">
        </div>
        <div>
            <label for="descripcion">Descripcion</label>
            <input name="input_descripcion" id="descripcion">
        </div>
        <div>
            <label for="precio">Precio</label>
            <input name="input_precio" id="precio">
        </div>
        <div>
            <label for="nombre">Categoria</label>
            <select name="select_categoria">
                <option value="1">Desayuno</option>
                <option value="2">Almuerzo-cena</option>
                <option value="3">Merienda</option>
            </select>
        </div>
        <button type="submit">Agregar</button>
    </form>
</div>


<br>

<form action="editar" method="POST">
        <div>
            <label for="nombreUpdate">Nombre</label>
            <input   name="input_nombreUpdate" >
        </div>
        <div>
            <label for="descripcionUpdate">Descripcion</label>
            <input  name="input_descripcionUpdate" >
        </div>
        <div>
            <label for="precioUpdate">Precio</label>
            <input  name="input_precioUpdate" >
        </div>
        <div>
            <label for="categoriaUpdate">Categoria</label>
            <select name="select_categoriaUpdate">
                <option value="1">Desayuno</option>
                <option value="2">Almuerzo-cena</option>
                <option value="3">Merienda</option>
            </select>
        </div>

    </form>

<table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>X</th>
                <th>Editar</th>
            </tr>
        </thead>






<?php }
}
