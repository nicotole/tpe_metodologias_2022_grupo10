{include file='templates/header.tpl'}
{include file='templates/sidebar.tpl'}
<div class="contenedorCentral">
<h1 class="titulo">{$titulo}</h1>
	<table id="tabla" class="table table-striped">
		<thead>
			<tr>
            <th scope="col">Medico</th>
			<th scope="col">Especialidad</th>
			<th scope="col">Paciente</th>
			<th scope="col">Turno</th>
			<th scope="col">Horario</th>
			<th scope="col">Fecha</th>
			<th scope="col">Administrar</th>
			</tr>
		</thead>

        {foreach from=$turno item=t} 
            <tr> 
                <td>{$t->nombre_medico} {$t->apellido_medico}</td>
                <td>{$t->especialidad}</td>
                <td>{$t->nombre_paciente} {$t->apellido_paciente}</td>
				{if $t->tipo_de_turno eq "t"}
					<td>Tarde</td>
				{else}
					<td>Mañana</td>
				{/if}
                <td>{$t->horario}</td>
                <td>{$t->fecha}</td>
		        <td>
					<button data-id_turno={$t->id_turno} type="button" class="btn btn-outline-secondary"><em class="fa fa-pencil"></em></button>
					<button data-id_turno={$t->id_turno} type="button" class="btn btn-outline-danger borrarTurno" ><em class="fa fa-trash"></em></button>
				</td>
            </tr>

        {/foreach}
    </table>
  </div> 
<script type="text/javascript" src="./js/turnosBorrar.js"></script>
</body>
</html>