<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="../librerias/css/bootstrap.min.css">
    <link rel="stylesheet" href="../librerias/css/datatablesmin.css">
    <link rel="stylesheet" href="../librerias/fullCalendar/main.css">
    <link rel="stylesheet" href="../resources/estilos/style.css">
    <link rel="stylesheet" href="../resources/estilos/animaciones.css">

    <script src="../librerias/js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="../librerias/js/unpkg.com_@popperjs_core@2.11.8_dist_umd_popper.min.js"></script>
    <script src="../librerias/js/bootstrap.min.js"></script>
    <script src="../librerias/js/datatablesmin.js"></script>
    <script src="../librerias/js/momentjs.com_downloads_moment-with-locales.js"></script>
    <script src="../librerias/fullCalendar/main.js"></script>
</head>
<body>

    <?php
        require_once('../components/preloader.html');
        require_once('../components/menu2.html');
    ?>

<div class="row" style="margin-top:40px; margin-right:0; margin-left:0; padding:20px;">
            <div id="calendario1" style="border: 1px; solid:#000; padding: 2px;"></div>
        <div class="col-2">
            <div id="external-events" style="margin-top: 1em; height: 350px; display:none; box-shadow: 0 0 5px #00000a40; border-radius: 10px; overflow: auto; padding: 1em;">
                <h4 class="text-center">Eventos predefinidos</h4>                
                <div id="listaeventospredefinidos">
            </div>
            <hr>
            <div class="" style="text-align: center;">
                <button type="button" id="BotonEventosPredefinidos" class="btn btn-primary">
                   Administrar eventos predefinidos 
                </button>
            </div>
        </div>
    </div>
    <!-- formulario -->
    <div class="modal fade" id="EventPreview" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-bd">
                    <h2 id="Titulo"></h2>
                    <img src="" alt="No se pudo cargar" id="imagen" style="margin-bottom:20px;">
                    <div class="grid">
                        <div>
                            <label>Fecha de inicio:</label>
                            <span id="FechaInicio"></span>
                        </div>
                        <div>
                            <label>Hora de inicio:</label>
                            <span id="HoraInicio"></span>
                        </div>
                        <div>
                            <label>Fecha de fin:</label>
                            <span id="FechaFin"></span>
                        </div>
                        <div>
                            <label>Hora de fin:</label>
                            <span id="HoraFin"></span>
                        </div>
                    </div>
                    <a target="_BLANK" id="lugar" style="margin-bottom:15px; color:var(--main-bg-color); font-family:'GalanItalic', sans-serif; font-weight:600;"></a>
                    <span id="Descripcion"></span>
                </div>
            </div>
        </div>
    </div>
    <script>

        document.addEventListener("DOMContentLoaded", function(){
        let calendario1 = new FullCalendar.Calendar(document.getElementById('calendario1'),{
            droppable:false,
            height:600,
            headerToolbar:{
                left:'prev,next,today',
                center:'title',
                right:'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
                today: 'Hoy'
            },
            editable : false,
            events: 'datoseventos.php?accion=listar',
            eventClick: function(info){
                console.log(info.event);
                $("#EventPreview").modal('show')
                $('#Id').val(info.event.id);
                $('#Titulo').text(info.event.title);
                $('#Descripcion').text(info.event.extendedProps.descripcion);
                $('#FechaInicio').text(moment(info.event.start).format("YYYY-MM-DD"));
                $('#FechaFin').text(moment(info.event.end).format("YYYY-MM-DD"));
                $('#HoraInicio').text(moment(info.event.start).format("HH:mm"));
                $('#HoraFin').text(moment(info.event.end).format("HH:mm"));
                $('#ColorFondo').val(info.event.backgroundColor);
                $('#ColorTexto').val(info.event.textColor);
                $('#imagen').attr('src', '../destino/' + info.event.extendedProps.imagen);
                $('#lugar').text(info.event.extendedProps.location);
                $('#lugar').attr('href', info.event.extendedProps.ubication);
            }
        });

        function verificarResolucion(){
            if (window.matchMedia("(max-width:767px)").matches){
                calendario1.changeView('listWeek');
            }else{
                calendario1.changeView('dayGridMonth');
            }
        }

        verificarResolucion();
        window.addEventListener('resize', verificarResolucion);
        calendario1.render();

        //Funciones para comunicarse con el servidor AJAX! 
        //funciones que interactuan con el formulario eventos
        function recuperarDatosFormulario(){
            let registro = {
                id: $('#Id').val(),
                titulo: $('#Titulo').val(),
                descripcion: $('#Descripcion').val(),
                inicio: $('#FechaInicio').val() + ' ' + $('#HoraInicio').val(),
                fin: $('#FechaFin').val() + ' ' + $('#HoraFin').val(),
                colorfondo: $('#ColorFondo').val(),
                colorTexto: $('#ColorTexto').val(),
                ubicacion: $('#ubicacion').val(),
                imagen: $('#imagen').val()
            }
            return registro;
        }
    });
    </script>
</body>
</html>