<div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" wire:model="nombre">
        <small>{{$nombre}}</small>
    </div>

    <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <input type="text" class="form-control" id="mensaje" wire:model="mensaje">
        <small>{{$mensaje}}</small>
    </div>

    <button class="btn btn-primary" wire:click="enviarMensaje"> Enviar Mensaje </button>

    <!--Mensaje de alerta -->

    <div style="position: absolute;" class="alert alert-success collapse mt-3" role="alert" id="avisoSuccess">
        Se ha enviado
    </div>


    <script>
        $( document ).ready(function() {
            window.livewire.on('mensajeEnviado', function () {
                $("#avisoSuccess").fadeIn("slow");
                setTimeout(function(){ $("#avisoSuccess").fadeOut("slow"); }, 3000);
            });
        });
    </script>



</div>
