{include file='templates/header.tpl'}
{include file='templates/sidebarPac.tpl'}

    <div class="contenedorCentral">
		<h1 class="titulo">Nuevo turno</h1>
		
        <h2 class="subtitulo">Cobertura y médico</h2>


        <form action="confirmarDatos" method="POST" class="formPaciente" id="formPaciente" >

            <div class="row">
                <div class="form-group">
                    <label>Especialidad</label>
                        <select class="form-select inputPaciente" name="select_especialidad">
                        <option selected value=""> Cualquiera </option> 
                            {foreach from=$especialidades item=especialidad} 
							    <option value="{$especialidad->especialidad}"> {$especialidad->especialidad}</option>
						    {/foreach}
                        </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Obra social</label>
                        <select class="form-select inputPaciente" name="select_obra">
                        <option selected value=""> Cualquiera </option>  
                            {foreach from=$obras item=obra} 
							    <option value="{$obra->obra_social}"> {$obra->obra_social}</option>
						    {/foreach}
                        </select>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <label>Médico</label>
                        <select class="form-select inputPaciente" name="select_medico">
                        <option selected value=""> Seleccione médico </option> 
                            {foreach from=$medicos item=medico} 
							    <option data-diferencial={$medico->cobra_diferencial} data-obra={$medico->obra_social} data-especialidad={$medico->especialidad} value="{$medico->id_medico}">{$medico->nombre} {$medico->apellido}</option>
						    {/foreach}
                        </select>
                </div>
            </div>

            <input class="inputPaciente form-control hidden" id="obra_paciente" value= "PAMI">

            <p class="alertConfirmacion hidden">Atención! No se encuentran médicos con los filtros aplicados.</p>
            <p class="alertConfirmacion hidden">Atención! El médico no trabaja con tu obra social.</p>
            <p class="alertConfirmacion hidden">Es posible que se cobre un diferencial.</p>

            <div class="row">  
                <div class="col"> 
                </div> 
                <div class="col"> 
                    <button type="submit" class="btn-nuevoTurnoPaciente" data-bs-toggle="modal" data-bs-target="#popUpNuevoTurno">Continuar</button>							
                </div> 
            </div>
        </form>	
    </div>

    <script type="text/javascript" src="./js/filtrarMedico.js"></script>