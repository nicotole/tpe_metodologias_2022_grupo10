<?php
/* Smarty version 3.1.34-dev-7, created on 2022-01-30 15:43:34
  from 'C:\xampp\htdocs\Proyectos\Proyecto-php\templates\productosByCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61f6a4167d7596_92895889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6bd4cbea4d2efba0ccc66c1ff33d0b434eadb95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Proyecto-php\\templates\\productosByCategories.tpl',
      1 => 1606955650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61f6a4167d7596_92895889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>


<table class="table">
    <thead  class="thead-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
        </tr>
    </thead>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria']->value, 'categories');
$_smarty_tpl->tpl_vars['categories']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categories']->value) {
$_smarty_tpl->tpl_vars['categories']->do_else = false;
?> 
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['categories']->value->nombre;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['categories']->value->descripcion;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['categories']->value->precio;?>
</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>

<a  href='home'>Volver</a> 


  <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
