<div class="container">
    <div class="modal fade" id="editLadrillosT{{$TypeLadrillos->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                Nueva Empresa
                <button class="close" data-dismiss='modal'>&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-group" method="POST" action="/tipoLadrillos/{{$TypeLadrillos->id}}">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="">Nombre de la Empresa</label>
                            <input type="text" name="nameLadrillo" value="{{$TypeLadrillos->name}}" class="form-control">
                        </div>


                        <br>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Actualizar</button>   
                            <a href="{{ url('/tipoLadrillos') }}" class="btn btn-danger">Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>