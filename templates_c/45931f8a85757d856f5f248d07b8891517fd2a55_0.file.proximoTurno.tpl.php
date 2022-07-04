<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-03 01:43:46
  from 'G:\xampp\htdocs\TPEMeto2\tpe_metodologias_2022_grupo10\templates\proximoTurno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62c0d832ca8e55_02253956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45931f8a85757d856f5f248d07b8891517fd2a55' => 
    array (
      0 => 'G:\\xampp\\htdocs\\TPEMeto2\\tpe_metodologias_2022_grupo10\\templates\\proximoTurno.tpl',
      1 => 1656768484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/sidebar.tpl' => 1,
  ),
),false)) {
function content_62c0d832ca8e55_02253956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contenedorCentral">
<h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
	<table id="tabla" class="table table-striped">
		<thead>
			<tr>
            		<th scope="col">Médico</th>
			<th scope="col">Especialidad</th>
			<th scope="col">Paciente</th>
			<th scope="col">Turno</th>
			<th scope="col">Horario</th>
			<th scope="col">Fecha</th>
			<th scope="col">Administrar</th>
			</tr>
		</thead>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['turno']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?> 
            <tr> 
                <td><?php echo $_smarty_tpl->tpl_vars['t']->value->nombre_medico;?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value->apellido_medico;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['t']->value->especialidad;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['t']->value->nombre_paciente;?>
 <?php echo $_smarty_tpl->tpl_vars['t']->value->apellido_paciente;?>
</td>
				<?php if ($_smarty_tpl->tpl_vars['t']->value->tipo_de_turno == "t") {?>
					<td>Tarde</td>
				<?php } else { ?>
					<td>Mañana</td>
				<?php }?>
                <td><?php echo $_smarty_tpl->tpl_vars['t']->value->horario;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['t']->value->fecha;?>
</td>
		        <td>
					<button data-id_turno=<?php echo $_smarty_tpl->tpl_vars['t']->value->id_turno;?>
 type="button" class="btn btn-outline-secondary"><em class="fa fa-pencil"></em></button>
					<button data-id_turno=<?php echo $_smarty_tpl->tpl_vars['t']->value->id_turno;?>
 type="button" class="btn btn-outline-danger borrarTurno" ><em class="fa fa-trash"></em></button>
				</td>
            </tr>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
  </div> 
<?php echo '<script'; ?>
 type="text/javascript" src="./js/turnosBorrar.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
