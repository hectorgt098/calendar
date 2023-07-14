<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Albert Corredor - candidato a la alcaldia de Medellín">
    <title>Inicio</title>
    <link rel="stylesheet" href="resources/estilos/style.css">
    <link rel="stylesheet" href="resources/estilos/animaciones.css">
</head>
<body>
    
    
    <?php
    require_once('components/preloader.html');
    require_once('components/cuentareg.html');
    require_once('components/menu2.html');
    ?>
    <?php
    require_once('components/hero2.html');
    require('components/about.html');
    require('components/trayectonewnew.html');
    require('components/team.html');
    /* require('components/trayectonew.html'); */
    require('components/events.html');
    require('pages/eventosCard.php');
    require('components/galeria.html');
    require('components/feeds.html');
    require('components/contact.php');
    ?>  
<script src="resources/scripts/intersection.js"></script>
</body>
</html>