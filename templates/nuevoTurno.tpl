{include file='templates/header.tpl'}
{include file='templates/sidebar.tpl'}

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
								{foreach from=$medicos item=medico} 
									<option value="{$medico->id}">{$medico->nombre} {$medico->apellido}</option>
								{/foreach}
							</select></td>
						<td class="fields"> <select name="select_paciente"> 
								{foreach from=$pacientes item=paciente} 
									<option data-afiliado={$paciente->afiliado}  value="{$paciente->dni}">{$paciente->nombre} {$paciente->apellido}</option>														
								{/foreach}
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

	<script type="text/javascript" src="./js/turnosAgregar.js"></script>
