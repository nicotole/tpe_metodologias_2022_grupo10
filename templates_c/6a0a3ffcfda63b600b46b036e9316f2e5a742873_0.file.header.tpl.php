<?php
/* Smarty version 3.1.34-dev-7, created on 2022-01-30 16:22:42
  from 'C:\xampp\htdocs\Proyectos\Proyecto-php\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61f6ad42187751_45090873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a0a3ffcfda63b600b46b036e9316f2e5a742873' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Proyecto-php\\templates\\header.tpl',
      1 => 1643556160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f6ad42187751_45090873 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?php echo BASE_URL;?>
">   
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav"   >
                <span class="navbar-toggler-icon"></span>
            </button>
  </div>

  <div class="collapse navbar-collapse text-center" id="navbarNav">
    <ul class="navbar-nav">
      <li>
        <a class="nav-link" href="inicio">Inicio</a>
      </li>
      <li>
        <a class="nav-link" href="registrarse">Registrarse</a>
      <li>
        <a class="nav-link" href="login">Iniciar sesión</a>
      </li>
      <li>
        <a class="nav-link" href="logout">Cerrar sesión</a>
      </li>
        <li>
        <a class="nav-link" href="administrador">Administrador</a>
      </li>
    </ul>

  </div>
</nav><?php }
}
