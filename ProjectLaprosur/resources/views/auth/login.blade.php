@extends('auth.InterfazLogin')
@section('content')
                    <form method="POST" action="{{ route('login') }}">
                         @csrf
							<h2 class="title">Bienvenido</h2>
							<div class="row px-3"> <label class="mb-1">
									<h6 class="mb-0 text-sm">Correo Electronico</h6>
									</label> <input placeholder="INGRESE SU CORREO" id="email" type="email" class="input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>	 
							</div>
								<br>
							<div class="row px-3"> <label class="mb-1">
									<h6 class="mb-0 text-sm">Contraseña</h6>
									</label><input id="password" type="password" class="input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>	  
							</div>
							
							<br>
							@if ($errors->has('email'))
								<div class="error">
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								</div>
							@endif
							<br>
							@if ($errors->has('password'))
								<div class="error">
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								</div>
							@endif
							<br>			 
							<div class="row mb-3 px-3 justify-content-center"> <button type="submit" class="btn btn-success text-center" value="Ingresar">INGRESAR</button> </div>
                    </form>
@endsection
