<?php
/* Smarty version 3.1.34-dev-7, created on 2022-05-30 19:57:46
  from 'C:\xampp\htdocs\TPE_METO\TPEMeto\templates\nuevoTurno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6295059a957ae0_06118587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fbaf2537b614757bffe4564aa41717a4af36273' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_METO\\TPEMeto\\templates\\nuevoTurno.tpl',
      1 => 1653933463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/sidebar.tpl' => 1,
  ),
),false)) {
function content_6295059a957ae0_06118587 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<table class="table">


    <thead class="thead-dark">
        <tr>
            <th scope="col">Medico</th>
			<th scope="col">Paciente</th>
			<th scope="col">DNI</th>
			<th scope="col">Turno</th>
			<th scope="col">Horario</th>
			<th scope="col">Fecha</th>
			<th scope="col">Administrar</th>
        </tr>
    </thead>
  
</table>


<form class="formulario" action="agregarTurno" method="POST">
        <div>
          <select name="select_medico"> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medico']->value, 'medicos');
$_smarty_tpl->tpl_vars['medicos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['medicos']->value) {
$_smarty_tpl->tpl_vars['medicos']->do_else = false;
?> 
                    <option value="<?php echo $_smarty_tpl->tpl_vars['medicos']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['medicos']->value->nombre;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
            <input  class="form-control" name="input_dni">
            <input  class="form-control" name="input_nroAfiliado">
            <input  class="form-control" name="input_tipoTurno">
            <input  class="form-control" name="input_horario" type="time">
            <input  class="form-control" name="input_fecha"  type="date">
             
        </div>
        <button type="submit" class="btn-nuevoTurno" data-bs-toggle="modal" data-bs-target="#popUpNuevoTurno">Crear</button>
    </form><?php }
}
