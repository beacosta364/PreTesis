@extends('layouts.plantilla') 

@section('contenido')

<!-- Controles electrónica -->
<section class="Controles">
    <!-- Control de acceso a bodega -->
    <div class="control-acceso">
        <h2>Control de acceso a bodega</h2>
        <button id="ingresarBodegaBtn">Ingresar a bodega</button>
        <p id="statusAcceso">Estado de la puerta: Desconocido</p>
    </div> 
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
    document.getElementById("ingresarBodegaBtn").addEventListener("click", function() {
        // Primero, registrar intento en Laravel
        fetch("{{ route('bodega.registrar') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({})
        })
        .then(res => res.json())
        .then(data => {
            console.log("Intento registrado en BD:", data);
        })
        .catch(error => console.error("Error al registrar intento:", error));

        // Segundo, hacer la solicitud al ESP
        fetch(`http://${ipAddress}/activar1`)
            .then(response => response.text())
            .then(data => {
                if (data === "Puerta 1 activada") {
                    document.getElementById("statusAcceso").textContent = "Estado de la puerta: Abierta (Se cerrará automáticamente)";
                } else {
                    document.getElementById("statusAcceso").textContent = "Estado de la puerta: Desconocido";
                }
            })
            .catch(error => console.error('Error ESP:', error));
    });
</script>


@endsection
