  <nav class="navbar fixed-top navbar-light" style="background-color: #188ee2; col-12">
      <img src="{{ 'images/logo.ico' }}" alt="Laprosur" class="brand-image " style="opacity: .8">

      <nav class="navbar navbar-expand-lg navbar-light bg-light col-10">

          <a class="flex-sm-fill text-sm-center nav-link active" href="#">Inicio</a>
          <a class="flex-sm-fill text-sm-center nav-link active" href="#">Nosostros</a>
          <a class="flex-sm-fill text-sm-center nav-link active" href="#">Productos</a>

          <a class="flex-sm-fill text-sm-center nav-link active" href="#">Oportunidades</a>
          <a class="flex-sm-fill text-sm-center nav-link active" href="#">Contacto</a>

          <nav class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                  aria-expanded="false">Procesos</a>
              <div class="dropdown-menu">
                  <a class="flex-sm-fill text-sm-center nav-link active" href="{{route('Saca.index')}}">Saca de Ladrillos</a>  
                  <a class="flex-sm-fill text-sm-center nav-link active" href="{{route('produccionCocidos.index')}}">Produccion Cocido</a> 
                  <a class="flex-sm-fill text-sm-center nav-link active" href="{{route('produccionCrudos.index')}}">Crudo Diario</a>
                  <a class="flex-sm-fill text-sm-center nav-link active" href="{{route('Quema.index')}}">Quema</a>

                  

              </div>
            </nav>

          <a class="flex-sm-fill text-sm-center nav-link active input-group-text" href="#"><i
                  class="fas fa-long-arrow-alt-left"></i>Salir</a>

      </nav>
  </nav>
