{include file='templates/header.tpl'}
{include file='templates/sidebarPac.tpl'}

    <div class="contenedorCentral">
		<h1 class="titulo">{$titulo}</h1>
		
    <h2 class="subtitulo">{$subtitulo}</h2>
    <div class="confirmacionTurno">
        <div class="datosPaciente">
        <p>Paciente: {$nombre}  {$apellido}</p>
        <p>Dirección: {$direccion}</p>
        <p>Telefono: {$telefono}</p>
        <p>Email: {$email}</p>
        <p>Obra social: {$obra_social}</p>
        <p>Nro Afiliado: {$nro_afiliado}</p>
        </div>

        <div class="datosTurno">
        <p>Médico: {$medico}</p> 

        <p>Especialidad: {$especialidad}</p>
        <p>Fecha: {$fecha}</p>
        <p>Hora: {$horario}</p>
        </div>
    </div>
</div>
