<div class="container">
    <div class="modal fade" id="editTurnoP{{$turnoPs->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                Nueva Registro en Turno
                <button class="close" data-dismiss='modal'>&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-group" method="POST" action="/turnoProduccion/{{$turnoPs->id}}">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Turno</label>
                            <input type="text" name="TurnoP" value="{{$turnoPs->nameShift}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">H/comienzo</label>
                            <input type="text" name="startimeP" value="{{$turnoPs->startTime}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">H/termino</label>
                            <input type="text" name="EndTimeP" value="{{$turnoPs->endTime}}" class="form-control">
                        </div>


                        <br>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Actualizar</button>   
                            <a href="{{ url('/turnoProduccion') }}" class="btn btn-danger">Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>