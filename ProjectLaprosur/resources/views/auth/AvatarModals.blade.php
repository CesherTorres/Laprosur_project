
<div class="modal fade" id="edits" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div  class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
              <div class="modal-header">
                  Cambiar Avatar
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>              
              </div> 
              <div class="modal-body">
                      <form id="formsL" class="form-group" method="POST" action="/avatarss/{{auth()->user()->id}}" enctype="multipart/form-data"> 
                        @method('put')
                        @csrf
                            
                            <div class="form-group">
                              <label>Subir archivo</label>
                              <br>
                              <input  type="file" name="avatar" required>    
                            </div>    
                            

                           <div class="text-right">
                            <button type="submit" class="btn btn-primary">Guardar</button>   
                        </div>
                      </form>
                      
                      
              </div>
    </div>
  </div>
</div>

