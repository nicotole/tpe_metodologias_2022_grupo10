<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 17:00:24
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\productosByCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f846f88b76dd5_10669927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ba1d021ba47f6e00acaebd27590d2658d2d849a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\productosByCategories.tpl',
      1 => 1602514822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f846f88b76dd5_10669927 (Smarty_Internal_Template $_smarty_tpl) {
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
