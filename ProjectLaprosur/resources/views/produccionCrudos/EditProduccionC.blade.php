<div class="container">
    <div class="modal fade" id="editPCrudo{{$Pcrudo->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                Nueva Registro en Turno
                <button class="close" data-dismiss='modal'>&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-group" method="POST" action="/produccionCrudos/{{$Pcrudo->id}}">
                        @method('put')
                        @csrf
                        <div class="form-group col-12">
                                    <label for="" class="control-label col-3">CORTES DE MAQUINA:</label>
                                    <input type="text" name="CortesCrudo" id="" placeholder="Número de corte total" class="col-8">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">TIEMPO DE PARA:</label>
                                    <input type="time" name="TPara" id="" class="col-3">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">HOROMETRO :</label>
                                    <input type="text" name="HorometroC" id="" class="col-8"
                                        placeholder="Ingrese el Horómetro de la extrusora">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">CANTIDAD DE PERSONAS :</label>
                                    <input type="text" name="CPersonasCrudo" id="" class="col-8"
                                        placeholder="Ingrese la cantidad de personas que trabajaron">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">CANTIDAD DE PRODUCCION TOTAL :</label>
                                    <input type="text" name="" id="CProductoCrudo" class="col-8"
                                        placeholder="Ingrese la cantidad de produccion total del día">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">FECHA:</label>
                                    <input type="date" name="FechaCrudo" id="" class="col-3">
                                </div>


                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">TURNO :</label>
                                    <select name="TurnoA" class="custom-select col-6" id="horno">
                                        <option selected>Escoja el turno</option>
                                        <option value="">mañana</option>
                                        <option value="">tarde</option>
                                    </select>
                                </div>


                        <br>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Actualizar</button>   
                            <a href="{{ url('/produccionCrudos') }}" class="btn btn-danger">Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>