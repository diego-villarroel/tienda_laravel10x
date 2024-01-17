<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/menu.css">
    @if ($_SERVER['REQUEST_URI'] == '/')
    <link rel="stylesheet" href="css/inicio.css">
    @elseif (str_starts_with($_SERVER['REQUEST_URI'],'/productos'))
    <link rel="stylesheet" href="/css/tienda.css">
    @elseif ($_SERVER['REQUEST_URI'] == '/nosotros' || $_SERVER['REQUEST_URI'] == '/contacto')
    <link rel="stylesheet" href="css/nos_contact.css">
    @endif
    <link rel="shortcut icon" href="img/cactus_amp.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Cactus Amps</title>
</head>
<body class="container-fluid">
    @include('/generico/header_menu')