{include file='templates/header.tpl'}
{include file='templates/sidebarPac.tpl'}

    <div class="contenedorCentral">
		<h1 class="titulo">Nuevo turno</h1>
		
        <h2 class="subtitulo">Cobertura y médico</h2>


        <form action="" method="POST" class="formPaciente" id="formPaciente">

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
                        <option selected value=""> Seleccione medico </option> 
                            {foreach from=$medicos item=medico} 
							    <option data-diferencial={$medico->cobra_diferencial} data-obra={$medico->obra_social} data-especialidad={$medico->especialidad} value="{$medico->nombre} {$medico->apellido}">{$medico->nombre} {$medico->apellido}</option>
						    {/foreach}
                        </select>
                </div>
            </div>

            <p class="alertConfirmacion hidden">Atencion! despues lo vemos.</p>
            <p class="alertConfirmacion hidden">Atencion! El medico no trabaja con la obra social elegida.</p>
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