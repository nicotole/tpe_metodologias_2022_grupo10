<?php
/* Smarty version 3.1.34-dev-7, created on 2022-07-05 23:13:30
  from 'G:\xampp\htdocs\tpe_metodologias_2022_grupo10\templates\nuevoTurnoPAC.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62c4a97a3c3ef0_70282001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c756aa6303d933645b296badfdc2fe5aaf45f47d' => 
    array (
      0 => 'G:\\xampp\\htdocs\\tpe_metodologias_2022_grupo10\\templates\\nuevoTurnoPAC.tpl',
      1 => 1657055475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/sidebarPac.tpl' => 1,
  ),
),false)) {
function content_62c4a97a3c3ef0_70282001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/sidebarPac.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="contenedorCentral">
		<h1 class="titulo">Nuevo turno</h1>
		
        <h2 class="subtitulo">Cobertura y médico</h2>


        <form action="confirmarDatos" method="POST" class="formPaciente" id="formPaciente" >

            <div class="row">
                <div class="form-group">
                    <label>Especialidad</label>
                        <select class="form-select inputPaciente" name="select_especialidad">
                        <option selected value=""> Cualquiera </option> 
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especialidades']->value, 'especialidad');
$_smarty_tpl->tpl_vars['especialidad']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['especialidad']->value) {
$_smarty_tpl->tpl_vars['especialidad']->do_else = false;
?> 
							    <option value="<?php echo $_smarty_tpl->tpl_vars['especialidad']->value->especialidad;?>
"> <?php echo $_smarty_tpl->tpl_vars['especialidad']->value->especialidad;?>
</option>
						    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Obra social</label>
                        <select class="form-select inputPaciente" name="select_obra">
                        <option selected value=""> Cualquiera </option>  
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obras']->value, 'obra');
$_smarty_tpl->tpl_vars['obra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['obra']->value) {
$_smarty_tpl->tpl_vars['obra']->do_else = false;
?> 
							    <option value="<?php echo $_smarty_tpl->tpl_vars['obra']->value->obra_social;?>
"> <?php echo $_smarty_tpl->tpl_vars['obra']->value->obra_social;?>
</option>
						    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <label>Médico</label>
                        <select class="form-select inputPaciente" name="select_medico">
                        <option selected value=""> Seleccione médico </option> 
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medicos']->value, 'medico');
$_smarty_tpl->tpl_vars['medico']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['medico']->value) {
$_smarty_tpl->tpl_vars['medico']->do_else = false;
?> 
							    <option data-diferencial=<?php echo $_smarty_tpl->tpl_vars['medico']->value->cobra_diferencial;?>
 data-obra=<?php echo $_smarty_tpl->tpl_vars['medico']->value->obra_social;?>
 data-especialidad=<?php echo $_smarty_tpl->tpl_vars['medico']->value->especialidad;?>
 value="<?php echo $_smarty_tpl->tpl_vars['medico']->value->id_medico;?>
"><?php echo $_smarty_tpl->tpl_vars['medico']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['medico']->value->apellido;?>
</option>
						    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

    <?php echo '<script'; ?>
 type="text/javascript" src="./js/filtrarMedico.js"><?php echo '</script'; ?>
><?php }
}
