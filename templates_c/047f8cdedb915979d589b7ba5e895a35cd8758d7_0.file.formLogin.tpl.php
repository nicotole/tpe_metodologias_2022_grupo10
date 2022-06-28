<?php
/* Smarty version 3.1.34-dev-7, created on 2022-01-30 16:16:50
  from 'C:\xampp\htdocs\Proyectos\Proyecto-php\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61f6abe2c18894_79419788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '047f8cdedb915979d589b7ba5e895a35cd8758d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Proyecto-php\\templates\\formLogin.tpl',
      1 => 1643555805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61f6abe2c18894_79419788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
<div class="alert alert-danger text-center" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>   
<?php }?>


<div class="spa">
      <form class="formulario" action="verificar" method="POST">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <ul class="formulario-ul">
          <li>
            <label for="">Nombre: </label>
              <input class="form-control" type="text" name="input_nombre">
          </li>
          <li>
            <label for="">Contraseña: </label>
              <input class="form-control" type="password" name="input_password">
          </li>
          <li>
            <button class="btn btn-primary">Iniciar sesion</button>
            <button class="btn btn-light"> <a href='registrarse'>REGISTRARSE</a></button> </td>
          </li>
        </ul>
      </form>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
