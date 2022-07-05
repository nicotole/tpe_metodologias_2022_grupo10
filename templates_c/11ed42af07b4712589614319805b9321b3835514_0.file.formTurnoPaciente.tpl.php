<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-05 23:13:40
  from 'G:\xampp\htdocs\tpe_metodologias_2022_grupo10\templates\formTurnoPaciente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62c4a984187c55_93023282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11ed42af07b4712589614319805b9321b3835514' => 
    array (
      0 => 'G:\\xampp\\htdocs\\tpe_metodologias_2022_grupo10\\templates\\formTurnoPaciente.tpl',
      1 => 1657051680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/sidebarPac.tpl' => 1,
  ),
),false)) {
function content_62c4a984187c55_93023282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/sidebarPac.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                    <input class="inputPaciente form-control" name= "id_medico" type=text value= <?php echo $_smarty_tpl->tpl_vars['medico']->value->id_medico;?>
>
                    <input class="inputPaciente form-control" name= "medico" type=text value= "<?php echo $_smarty_tpl->tpl_vars['medico']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['medico']->value->apellido;?>
">	
                    <input class="inputPaciente form-control" name= "especialidad" type=text value= <?php echo $_smarty_tpl->tpl_vars['medico']->value->especialidad;?>
>
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
