@extends('layouts.plantilla') 

@section('contenido')

<section class="controles">
    <div class="control-acceso-card">
        <h2 class="titulo-acceso">Acceso a bodega</h2>
        <button id="ingresarBodegaBtn" class="btn-acceso">Ingresar a bodega</button>
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
