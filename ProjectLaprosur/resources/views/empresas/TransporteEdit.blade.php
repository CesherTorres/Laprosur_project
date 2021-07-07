<div class="container">
    <div class="modal fade" id="editTransporte{{$empresaTs->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                Nueva Empresa
                <button class="close" data-dismiss='modal'>&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-group" method="POST" action="/empresas/{{$empresaTs->id}}">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="">Nombre de la Empresa</label>
                            <input type="text" name="ntranporte" value="{{$empresaTs->businessName}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Ruc</label>
                            <input type="text" name="ruc" value="{{$empresaTs->Ruc}}" class="form-control">
                        </div>


                        <br>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Actualizar</button>   
                            <a href="{{ url('/empresas') }}" class="btn btn-danger">Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>