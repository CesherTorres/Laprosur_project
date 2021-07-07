<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


<div class="modal fade" id="editsC" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div  class="modal-dialog modal-dialog-centered">
    <div  class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar Contraseña</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>              
            </div> 
              <div class="modal-body">
                      <form id="formsL" class="form-group" method="POST" action="/user/Updatepassword/{{auth()->user()->id}}" enctype="multipart/form-data">   
                        @csrf
                            <img id="AvatarB" style="height: 100px; width: 100px; background-color: #EFEFEF;" class="card-img-top rounded-circle mx-auto d-block" src="/avatarss/{{ Auth()->user()->avatar}}" alt="">
                            <hr size="2px" width="100%" noshade="noshade" align="right" />
                            <br>
                            <div class="form-group">
                                <label for="">Contraseña Actual</label> 
                                <input type="password" class="form-control" id="newpas" name="actpasW"  value="{{auth()->user()->password}}">
                            </div>

                            <div class="form-group">
                                <label for="">Nueva Contraseña</label>
                                <input type="password" class="form-control" id="" name="newpasw">     
                            </div>
                            <div class="form-group">
                                <label for="">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="" name="confirnpasw">     
                            </div>

                            <div class="text-right">
                            <button type="submit" class="btn btn-primary" onclick="CambioContraseña()">Actualizar contraseña</button>   
                           
                        </div>
                            
                      </form>
                      
                      
              </div>
    </div>
  </div>
</div>
