<?php
    session_start();

    // Verificar si el usuario tiene una sesión activa
    if (!isset($_SESSION['usuario'])) {
        // El usuario no tiene una sesión activa, redirigir a la página de inicio de sesión
        header("Location: login.html");
        exit();
    }
    if (isset($_POST['cerrar_sesion'])) {
        // Destruir la sesión
        session_destroy();
        
        // Redirigir al usuario a la página de inicio de sesión o a cualquier otra página que desees
        header("Location: login.html");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datatablesmin.css">
    <link rel="stylesheet" href="fullCalendar/main.css">
    <link rel="stylesheet" href="style.css">

    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="js/unpkg.com_@popperjs_core@2.11.8_dist_umd_popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/datatablesmin.js"></script>
    <script src="js/momentjs.com_downloads_moment-with-locales.js"></script>
    <script src="fullCalendar/main.js"></script>
</head>
<body>
<form method="POST" action="">
        <button type="submit" name="cerrar_sesion">Cerrar sesión</button>
</form>

    <div class="row" style="margin-top:40px; margin-right:0; margin-left:0; padding:20px;">
        <div class="col-10">
            <div id="calendario1" style="border: 1px; solid:#000; padding: 2px;"></div>
        </div>
        <div class="col-2">
            <div id="external-events" style="margin-top: 1em; height: 350px; box-shadow: 0 0 5px #00000a40; border-radius: 10px; overflow: auto; padding: 1em;">
                <h4 class="text-center">Eventos predefinidos</h4>                
                <div id="listaeventospredefinidos">
                    
                <?php
                    require("bd.php");
                    $conexion = regresarConexion();

                    $datos = mysqli_query($conexion, "SELECT id, titulo, horainicio, horafin, colortexto, colorfondo FROM eventos_predefinidos");
                    $ep = mysqli_fetch_all($datos, MYSQLI_ASSOC);

                    foreach($ep as $fila){
                        echo "<div class='fc-event' data-titulo='$fila[titulo]' data-horafin='$fila[horafin]' data-horainicio='$fila[horainicio]' data-colortexto='$fila[colortexto]' data-colorfondo='$fila[colorfondo]'
                        style='border-color:$fila[colorfondo]; color:$fila[colortexto]; background-color:$fila[colorfondo]; margin:10px; padding:5px; border-radius:3px;'>
                            $fila[titulo][" . substr($fila['horainicio'],0,5) . " a " . substr($fila['horafin'],0,5) . "]</div>";
                    }

                ?>

                
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

    <div class="modal fade" id="FormularioEventos" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="Id">

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="">Titulo del Evento:</label>
                            <input type="text" id="Titulo" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Fecha de inicio:</label>
                            <div class="input-group" data-autoclose="true">
                                <input type="date" id="FechaInicio" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="TituloHoraInicio">
                            <label>Hora de inicio:</label>
                            <div class="input-group" data-autoclose="true"> 
                                <input type="time" id="HoraInicio" value="" class="form-control" autocomplete="off" >
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Fecha de fin:</label>
                            <div class="input-group" data-autoclose="true">
                                <input type="date" id="FechaFin" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group col-md-6" id="TituloHoraInicio">
                            <label for="">Hora de fin:</label>
                            <div class="input-group" data-autoclose="true"> 
                                <input type="time" id="HoraFin" value="" class="form-control" autocomplete="off" >
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <label for="">Descripción:</label>
                        <textarea id="Descripcion" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-row">
                        <label for="">Color de fondo:</label>
                        <input type="color" value="#3788D8" id="ColorFondo" class="form-control" style="height: 36px;">
                    </div>
                    <div class="form-row">
                        <label for="">Color de texto:</label>
                        <input type="color" value="#ffffff" id="ColorTexto" class="form-control" style="height: 36px;">
                    </div>
                    <div class="form-row">
                        <label>Selecciona una imagen</label>
                        <input type="file" id="imagen">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="BotonAgregar" class="btn btn-success">Agregar</button>
                    <button type="button" id="BotonModificar" class="btn btn-success">Modificar</button>
                    <button type="button" id="BotonBorrar" class="btn btn-success">Borrar</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <script>

        document.addEventListener("DOMContentLoaded", function(){

        new FullCalendar.Draggable(document.getElementById('listaeventospredefinidos'), {
            itemSelector: '.fc-event',
            eventData: function(eventEl){
                return{
                    title: eventEl.innerText.trim()
                }
            }
        });

        let calendario1 = new FullCalendar.Calendar(document.getElementById('calendario1'),{
            droppable:true,
            height:600,
            headerToolbar:{
                left:'prev,next,today',
                center:'title',
                right:'dayGridMonth, timeGridWeek,timeGridDay'
            },
            editable : true,
            events: 'datoseventos.php?accion=listar',
            dateClick: function(info){
                /* alert(info.dateStr); */
                limpiarformulario()
                $('#BotonAgregar').show();
                $('#BotonModificar').hide();
                $('#BotonBorrar').hide();
                if(info.allDay){
                    $('#FechaInicio').val(info.dateStr);
                    $('#FechaFin').val(info.dateStr);
                }else{
                    let fechaHora = info.dateStr.split("T");
                    $('#FechaInicio').val(fechaHora[0]);
                    $('#FechaFin').val(fechaHora[0]);
                    $('#HoraInicio').val(fechaHora[1].substring(0,5));
                }
                $("#FormularioEventos").modal('show');
            },
            eventClick: function(info){
                $("#BotonAgregar").hide();
                $("#BotonModificar").show();
                $("#BotonBorrar").show();

                $('#Id').val(info.event.id);
                $('#Titulo').val(info.event.title);
                $('#Descripcion').val(info.event.extendedProps.descripcion);
                $('#FechaInicio').val(moment(info.event.start).format("YYYY-MM-DD"));
                $('#FechaFin').val(moment(info.event.end).format("YYYY-MM-DD"));
                $('#HoraInicio').val(moment(info.event.start).format("HH:mm"));
                $('#HoraFin').val(moment(info.event.end).format("HH:mm"));
                $('#ColorFondo').val(info.event.backgroundColor);
                $('#ColorTexto').val(info.event.textColor);
                $('#imagen').val(info.event.imagen);
                $("#FormularioEventos").modal('show');
            },
            eventDrop: function(info){
                $('#Id').val(info.event.id);
                $('#Titulo').val(info.event.title);
                $('#Descripcion').val(info.event.extendedProps.descripcion);
                $('#FechaInicio').val(moment(info.event.start).format("YYYY-MM-DD"));
                $('#FechaFin').val(moment(info.event.end).format("YYYY-MM-DD"));
                $('#HoraInicio').val(moment(info.event.start).format("HH:mm"));
                $('#HoraFin').val(moment(info.event.end).format("HH:mm"));
                $('#ColorFondo').val(info.event.backgroundColor);
                $('#ColorTexto').val(info.event.textColor);
                $('#imagen').val(info.event.imagen);
                let registro = recuperarDatosFormulario();
                modificarRegistro(registro);
            },
            drop: function(info){
                limpiarformulario();
                $('#ColorFondo').val(info.draggedEl.dataset.colorfondo);
                $('#ColorTexto').val(info.draggedEl.dataset.colortexto);
                $('#Titulo').val(info.draggedEl.dataset.titulo);
                let fechaHora = info.dateStr.split("T");
                $('#FechaInicio').val(fechaHora[0]);
                $('#FechaFin').val(fechaHora[0]);
                if(info.allDay){
                    $('#HoraInicio').val(info.draggedEl.dataset.horainicio);
                    $('#HoraFin').val(info.draggedEl.dataset.horafin);
                }else{
                    $('#HoraInicio').val(fechaHora[1].substring(0,5));
                    $('#HoraFin').val(moment(fechaHora[1].substring(0,5)).add(1,'hours'));
                }
                let registro = recuperarDatosFormulario();
                agregarEventoPredefinido(registro);
            },

            eventResize: function(info){
                $('#Id').val(info.event.id);
                $('#Titulo').val(info.event.title);
                $('#Descripcion').val(info.event.extendedProps.descripcion);
                $('#FechaInicio').val(moment(info.event.start).format("YYYY-MM-DD"));
                $('#FechaFin').val(moment(info.event.end).format("YYYY-MM-DD"));
                $('#HoraInicio').val(moment(info.event.start).format("HH:mm"));
                $('#HoraFin').val(moment(info.event.end).format("HH:mm"));
                $('#ColorFondo').val(info.event.backgroundColor);
                $('#ColorTexto').val(info.event.textColor);
                $('#imagen').val(info.event.imagen);
                let registro = recuperarDatosFormulario();
                modificarRegistro(registro);
            }
        });

        calendario1.render();

        //Eventos de botones de la aplicación
        $('#BotonAgregar').click(function(){
            let registro = recuperarDatosFormulario();
            agregarRegistro(registro);
            $('#FormularioEventos').modal('hide');
        });

        $('#BotonModificar').click(function(){
            let registro = recuperarDatosFormulario();
            modificarRegistro(registro);
            $('#FormularioEventos').modal('hide');
        });

        $('#BotonBorrar').click(function(){
            let registro = recuperarDatosFormulario();
            borrarRegistro(registro);
            $('#FormularioEventos').modal('hide');
        })

        $('#BotonEventosPredefinidos').click(function(){
            window.location = "eventospredefinidos.html"
        })


        //Funciones para comunicarse con el servidor AJAX!

        function agregarRegistro(registro){
            $.ajax({
                type: 'POST',
                url: 'datoseventos.php?accion=agregar',
                data: registro,
                success: function(msg){
                    calendario1.refetchEvents();
                },
                error: function(error){
                    alert("Hubo un error al agregar el evento: " + error);
                }
            })
        }

        function modificarRegistro(registro){
            $.ajax({
                type: 'POST',
                url: 'datoseventos.php?accion=modificar',
                data: registro,
                success: function(msg){
                    calendario1.refetchEvents();
                },
                error: function(error){
                    alert("Hubo un error al modificar el evento: " + error);
                }
            })
        }
        function borrarRegistro(registro){
            $.ajax({
                type: 'POST',
                url: 'datoseventos.php?accion=borrar',
                data: registro,
                success: function(msg){
                    calendario1.refetchEvents();
                },
                error: function(error){
                    alert("Hubo un error al borrar el evento: " + error);
                }
            })
        }
        function agregarEventoPredefinido(registro){
            $.ajax({
                type: 'POST',
                url: 'datoseventos.php?accion=agregar',
                data: registro,
                success: function(msg){
                    calendario1.removeAllEvents();
                    calendario1.refetchEvents();
                },
                error: function(error){
                    alert("Hubo un error al agregar un ep: " + error);
                }
            })
        }

        //funciones que interactuan con el formulario eventos

        function limpiarformulario(){
            $('#Id').val('')
            $('#Titulo').val('')
            $('#Descripcion').val('')
            $('#FechaFin').val('')
            $('#FechaInicio').val('')
            $('#HoraInicio').val('')
            $('#HoraFin').val('')
            $('ColorFondo').val('#3788D8')
            $('ColorTexto').val('#ffffff')
        }

        function recuperarDatosFormulario(){
            let registro = {
                id: $('#Id').val(),
                titulo: $('#Titulo').val(),
                descripcion: $('#Descripcion').val(),
                inicio: $('#FechaInicio').val() + ' ' + $('#HoraInicio').val(),
                fin: $('#FechaFin').val() + ' ' + $('#HoraFin').val(),
                colorfondo: $('#ColorFondo').val(),
                colorTexto: $('#ColorTexto').val()
            }
            return registro;
        }
    });
    </script>
</body>
</html>