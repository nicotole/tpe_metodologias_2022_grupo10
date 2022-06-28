<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-28 21:55:44
  from 'C:\xampp\htdocs\METO\tpe_metodologias_2022_grupo10\templates\formTurnoPaciente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62bb5cc054b5d0_42092699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23f1e9bddb52146524d4c771f7521e183470b5ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\METO\\tpe_metodologias_2022_grupo10\\templates\\formTurnoPaciente.tpl',
      1 => 1656446141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/sidebarPac.tpl' => 1,
  ),
),false)) {
function content_62bb5cc054b5d0_42092699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/sidebarPac.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
			<?php }
}
