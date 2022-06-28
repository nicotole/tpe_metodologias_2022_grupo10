<?php
/* Smarty version 3.1.34-dev-7, created on 2022-05-30 20:10:44
  from 'C:\xampp\htdocs\TPE_METO\TPEMeto\templates\proximoTurno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_629508a477cfe8_39533363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6394264feca2f5b310f87d83a2b98b3e8af827c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_METO\\TPEMeto\\templates\\proximoTurno.tpl',
      1 => 1653934110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/sidebar.tpl' => 1,
  ),
),false)) {
function content_629508a477cfe8_39533363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
		<table id="tabla" class="table table-striped">
			<thead>
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


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['turno']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?> 
        
                <tr> 
                
                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->id_medico;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->nro_afiliado;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->dni;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->tipo_de_turno;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->horario;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['t']->value->fecha;?>
</td>

                    <td> <button class="btn btn-light"><a href='turno/<?php echo $_smarty_tpl->tpl_vars['t']->value->id_turno;?>
'>X</a> </button> </td>

                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </table><?php }
}
