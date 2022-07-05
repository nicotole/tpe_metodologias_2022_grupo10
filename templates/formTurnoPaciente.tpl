{include file='templates/header.tpl'}
{include file='templates/sidebarPac.tpl'}

    <div class="contenedorCentral">
		<h1 class="titulo">Nuevo turno</h1>
		
        <h2 class="subtitulo">Confirmar datos personales</h2>

        <form action="imprimirDatos" method="POST" class="formPaciente">

            <div class="row">

                <div class="col">
                    <label>Nombre</label>
                    <input class="inputPaciente form-control" name= "input_nombre" value= "Rollin">	
                </div>
                <div class="col">
                    <label>Apellido</label>
                    <input class="inputPaciente form-control" name= "input_apellido" value= "Damrell">	
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label>DNI</label>
                    <input class="inputPaciente form-control" name= "input_dni" type=number value= "21362591">	
                </div>
                <div class="col">
                    <label>Teléfono</label>
                    <input class="inputPaciente form-control" name= "input_telefono" type=tel value= "+967-923-606-1661">	
                </div>
            </div>

                <div class="form-group">
                    <label>Email</label>
                    <input class="inputPaciente form-control" name= "input_email" type=email value= "rdamrell1@bizjournals.com">
                </div>

                <div class="form-group">
                    <label>Dirección</label>
                    <input class="inputPaciente form-control" name= "input_direccion"  value= "698 Corben Drive" > 
                </div>

             <div class="row">
                <div class="col">
                    <label>Obra social</label>
                    <input class="inputPaciente form-control"  name= "input_obraSocial" value= "PAMI">
                </div>
                <div class="col">
                    <label>N° de afiliado</label>
                    <input class="inputPaciente form-control" name= "input_NAfiliado" type=number value="2147483647">
                </div>  
            </div>
            <div class="hidden">
                    <label>DNI</label>
                    <input class="inputPaciente form-control" name= "id_medico" type=text value= {$medico->id_medico}>
                    <input class="inputPaciente form-control" name= "medico" type=text value= "{$medico->nombre} {$medico->apellido}">	
                    <input class="inputPaciente form-control" name= "especialidad" type=text value= {$medico->especialidad}>
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
			