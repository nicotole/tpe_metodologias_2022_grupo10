{include file='templates/header.tpl'}
{include file='templates/sidebarPac.tpl'}

    <div class="contenedorCentral">
		<h1 class="titulo">Nuevo turno</h1>
		
        <h2 class="subtitulo">Confirmar datos personales</h2>

        <form action="agregarPaciente" method="POST" class="formPaciente">

            <div class="row">

                <div class="col">
                    <label>Nombre</label>
                    <input class="inputPaciente form-control" name= "input_nombre">	
                </div>
                <div class="col">
                    <label>Apellido</label>
                    <input class="inputPaciente form-control" name= "input_apellido">	
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label>DNI</label>
                    <input class="inputPaciente form-control" name= "input_dni" type=number>	
                </div>
                <div class="col">
                    <label>Teléfono</label>
                    <input class="inputPaciente form-control" name= "input_telefono" type=number>	
                </div>
            </div>

                <div class="form-group">
                    <label>Email</label>
                    <input class="inputPaciente form-control" name= "input_email">
                </div>

                <div class="form-group">
                    <label>Dirección</label>
                    <input class="inputPaciente form-control" name= "input_direccion">
                </div>

             <div class="row">
                <div class="col">
                    <label>Obra social</label>
                    <input class="inputPaciente form-control" name= "input_obraSocial">
                </div>
                <div class="col">
                    <label>N° de afiliado</label>
                    <input class="inputPaciente form-control" name= "input_NAfiliado" type=number>
                </div>  
            </div>  
            <div class="row">  
                <div class="col"> 
                </div> 
                <div class="col"> 
                    <button type="submit" class="btn-nuevoTurnoPaciente" data-bs-toggle="modal" data-bs-target="#popUpNuevoTurno">Confirmar</button>							
	            </div> 
            </div> 
        </form>	

</div>
			