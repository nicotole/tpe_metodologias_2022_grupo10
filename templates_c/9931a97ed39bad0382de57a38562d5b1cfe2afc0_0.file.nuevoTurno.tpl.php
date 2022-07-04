<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-03 04:56:19
  from 'G:\xampp\htdocs\TPEMeto2\tpe_metodologias_2022_grupo10\templates\nuevoTurno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62c105533b5806_84118810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9931a97ed39bad0382de57a38562d5b1cfe2afc0' => 
    array (
      0 => 'G:\\xampp\\htdocs\\TPEMeto2\\tpe_metodologias_2022_grupo10\\templates\\nuevoTurno.tpl',
      1 => 1656811051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/sidebar.tpl' => 1,
  ),
),false)) {
function content_62c105533b5806_84118810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    	<div class="contenedorCentral">
		<h1 class="titulo">Nuevo turno</h1>
		
        <table id="tabla" class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Médico</th>
					<th scope="col">Paciente</th>
					<th scope="col">D.N.I. paciente</th>
					<th scope="col">N.º afiliado</th>
					<th scope="col">Turno</th>
					<th scope="col">Horario</th>
					<th scope="col">Fecha</th>
					<th scope="col">Administrar</th>
				</tr>
			</thead>

			
				<tbody>
					<form action="agregarTurno" method="POST" >
					<tr>
					
						<td class="fields"> <select name="select_medico"> 
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medicos']->value, 'medico');
$_smarty_tpl->tpl_vars['medico']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['medico']->value) {
$_smarty_tpl->tpl_vars['medico']->do_else = false;
?> 
									<option value="<?php echo $_smarty_tpl->tpl_vars['medico']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['medico']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['medico']->value->apellido;?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select></td>
						<td class="fields"> <select name="select_paciente"> 
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pacientes']->value, 'paciente');
$_smarty_tpl->tpl_vars['paciente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paciente']->value) {
$_smarty_tpl->tpl_vars['paciente']->do_else = false;
?> 
									<option data-afiliado=<?php echo $_smarty_tpl->tpl_vars['paciente']->value->afiliado;?>
  value="<?php echo $_smarty_tpl->tpl_vars['paciente']->value->dni;?>
"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['paciente']->value->apellido;?>
</option>														
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select></td>
						<td class="fields"><input type="number" readonly name="input_dni" id= "paciente_dni"></td>
						<td class="fields"><input type="number" readonly name="input_nroAfiliado"  id= "afiliado"></td>
						<td class="fields"><select name="select_turno"> 							
									<option value="t">Tarde</option>
									<option value="m">Mañana</option>
							</select></td></td>

						<td class="fields"><input name= "input_horario" type="time"></td>
						<td class="fields"><input name= "input_fecha" type="date"></td>
						<td>
						<button type="submit" class="btn-nuevoTurno" data-bs-toggle="modal" data-bs-target="#popUpNuevoTurno">Crear</button>
						</td>
					

					</tr>
					</form>	
		
				</tbody>
		</table>
					
	</div>

	<?php echo '<script'; ?>
 type="text/javascript" src="./js/turnosAgregar.js"><?php echo '</script'; ?>
>
<?php }
}
