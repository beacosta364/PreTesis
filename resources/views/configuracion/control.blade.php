@extends('layouts.plantilla') 

@section('contenido')

<h3>Gestión de Acceso</h3>

<!-- Controles electrónica -->
<section class="Controles">
    <!-- Control de acceso a bodega -->
    <div class="control-acceso">
        <h2>Control de acceso a bodega</h2>
        <button id="ingresarBodegaBtn">Ingresar a bodega</button>
        <p id="statusAcceso">Estado de la puerta: Desconocido</p>
    </div> 

    <!-- Control de estado de alarma -->
    <!-- @can('control.alarma')
    <div class="control-alarma">
        <h2>Control de estado de alarma</h2>
        <button id="activarAlarmaBtn">Activar Alarma</button>
        <p id="statusAlarma">Estado de alarma: Desconocido</p>
    </div>
    @endcan -->
</section>

@if ($configuracion)
    <script>
        const ipAddress = "{{ $configuracion->ip }}"; // Asigna la IP desde la base de datos
        console.log('IP desde la base de datos:', ipAddress);
    </script>
@else
    <script>
        alert("IP no registrada, por favor configúrela.");
    </script>
@endif

<script>
    // Función para ingresar a la bodega (Activar electroimán 1 por 1 segundo)
    document.getElementById("ingresarBodegaBtn").addEventListener("click", function() {
        fetch(`http://${ipAddress}/activar1`)
            .then(response => response.text())
            .then(data => {
                if (data === "Puerta 1 activada") {
                    document.getElementById("statusAcceso").textContent = "Estado de la puerta: Abierta (Se cerrará automáticamente)";
                } else {
                    document.getElementById("statusAcceso").textContent = "Estado de la puerta: Desconocido";
                }
            })
            .catch(error => console.error('Error:', error));
    });

    // Función para activar la alarma
    // document.getElementById("activarAlarmaBtn").addEventListener("click", function() {
    //     fetch(`http://${ipAddress}/activar2`)
    //         .then(response => response.text())
    //         .then(data => {
    //             if (data === "Puerta 2 activada") {
    //                 document.getElementById("statusAlarma").textContent = "Estado de la alarma: Activada";
    //             } else {
    //                 document.getElementById("statusAlarma").textContent = "Estado de la alarma: Desconocido";
    //             }
    //         })
    //         .catch(error => console.error('Error:', error));
    // });
</script>

@endsection
