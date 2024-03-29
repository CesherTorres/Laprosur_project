<!doctype html>
<html lang="en">

<head>
<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">
    <link href="css/plantilla.css" rel="stylesheet">
    <link rel="stylesheet" href="css/loginst.css" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<body>
    <div id="fondo">
        <div class="container px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
            <div class="card card0 border-0">
                <div class="row d-flex">
                    <div class="col- col-lg-6">
                        <div class="card1 pb-5">
                            <div id="dibujo1"> <img src="/images/portada/PORTADA_LAPRO.png" style="height: 500px; width: 500px;" class="image"> </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-5">
                            <div class="row mb-4 px-3">
                                <h6 class="mb-0 mr-4 mt-2">Siguenos en</h6>
                                <div class="facebook text-center mr-3">
                                    <a target="_blank" href="{{ url('https://www.facebook.com/LAPROSURSAC') }}">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="linkedin text-center mr-3">
                                    <div class="fa fa-linkedin"></div>
                                </div>
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="line"></div> <small class="or text-center">Or</small>
                                <div class="line"></div>
                            </div>
                            <br>
                            <br>
                                <div class="login-content">
                                    @yield('content')
                                </div>
                        </div>
                    </div>
                </div>
                <div class="bg-blue py-4">
                    <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2"><h1>Copyright &copy; 2021. All rights reserved - LAPROSUR S.A.C</h1></small>
                        <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script src="js/plantilla.js"></script>

</body>
</html>

