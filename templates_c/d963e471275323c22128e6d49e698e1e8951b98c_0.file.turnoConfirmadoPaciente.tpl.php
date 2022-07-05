<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-05 23:14:11
  from 'G:\xampp\htdocs\tpe_metodologias_2022_grupo10\templates\turnoConfirmadoPaciente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62c4a9a3bbc8a5_08323969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd963e471275323c22128e6d49e698e1e8951b98c' => 
    array (
      0 => 'G:\\xampp\\htdocs\\tpe_metodologias_2022_grupo10\\templates\\turnoConfirmadoPaciente.tpl',
      1 => 1657054084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/sidebarPac.tpl' => 1,
  ),
),false)) {
function content_62c4a9a3bbc8a5_08323969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/sidebarPac.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="contenedorCentral">
		<h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
		
    <div style= "text-align:center;">
    <h2 class="subtitulo"><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</h2>
        <p>Paciente: <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
</p>
        <p>Dirección: <?php echo $_smarty_tpl->tpl_vars['direccion']->value;?>
</p>
        <p>Telefono: <?php echo $_smarty_tpl->tpl_vars['telefono']->value;?>
</p>
        <p>Email: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</p>
        <p>Obra social: <?php echo $_smarty_tpl->tpl_vars['obra_social']->value;?>
</p>
        <p>Nro Afiliado: <?php echo $_smarty_tpl->tpl_vars['nro_afiliado']->value;?>
</p>

        <p>Médico: <?php echo $_smarty_tpl->tpl_vars['medico']->value;?>
</p> 

        <p>Especialidad: <?php echo $_smarty_tpl->tpl_vars['especialidad']->value;?>
</p>
        <p>Fecha: <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
</p>
        <p>Hora: <?php echo $_smarty_tpl->tpl_vars['horario']->value;?>
</p>
    </div>
</div>
<?php }
}
