{include file='templates/header.tpl'}
{include file='templates/sidebarPac.tpl'}

    <div class="contenedorCentral">
		<h1 class="titulo">Nuevo turno</h1>
		
        <h2 class="subtitulo">Cobertura y médico</h2>


        <form action="" method="POST" class="formPaciente">

            <div class="row">
                <div class="form-group">
                        <label>Obra social</label>
                        <input class="form-control inputPaciente" name= "input_obraSocial">
                    </div>
            </div>

            <div class="row">
                <div class="form-group">
                        <label>Especialidad</label>
                        <input class="form-control inputPaciente" name= "input_especialidad">
                    </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Médico</label>
                        <select class="form-select inputPaciente" name="select_medico"> 
                            <option value=""></option>
                        </select>
                       
                    </div>
            </div>

            <div class="row">  
                <div class="col"> 
                </div> 
                <div class="col"> 
                    <button type="submit" class="btn-nuevoTurnoPaciente" data-bs-toggle="modal" data-bs-target="#popUpNuevoTurno">Continuar</button>							
                </div> 
            </div>

        </form>	



    </div>