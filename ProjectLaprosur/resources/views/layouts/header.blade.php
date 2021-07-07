<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Inhome.css" type="text/css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-mainbg">

 <a class="navbar-brand navbar-logo" href="#"><img src="{{ 'images/logo.ico' }}" alt="Laprosur" class="brand-image " style="opacity: .8"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars text-white"></i>
            </button>
        <div class="d-flex flex-row-reverse collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                    <li class="nav-item active">
                        <a class="nav-link" href="/produccionCocidos"><i class="fa fa-tachometer"></i>Produccion Cocido</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Saca"><i class="fa fa-address-book"></i>Saca de Ladrillos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Quema"><i class="fa fa-clone"></i>Quema</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Control"><i class="fa fa-calendar"></i>Control de Cocido</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produccionCrudos"><i class="fas fa-chart-bar"></i>Crudo Diario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-copy"></i>Documents</a>
                    </li>
                    <div>
                </ul>
        </div>
</nav>         
  <div class="content">
    @yield('contenido')
  </div>
  <script src="js/Inhome.js"></script>
</body>
</html>
          
