<div class="container">
    <div class="modal fade" id="editalmacenC{{$almacenCs->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                Nueva Registro en Crudo
                <button class="close" data-dismiss='modal'>&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-group" method="POST" action="/almacenCrudo/{{$almacenCs->id}}">
                        @method('put')
                        @csrf

                        <div class="form-group">
                            <label for="">Nombre de Almacen</label>
                            <input type="text" name="nombreC" value="{{$almacenCs->name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Ubicacion</label>
                            <input type="text" name="UbicacionC" value="{{$almacenCs->location}}" class="form-control">
                        </div>


                        <br>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Actualizar</button>   
                            <a href="{{ url('/almacenCrudo') }}" class="btn btn-danger">Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>