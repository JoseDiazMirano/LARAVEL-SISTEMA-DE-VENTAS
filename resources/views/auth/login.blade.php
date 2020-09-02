@extends('layouts.baja')
@section('content')
<div class="container-fluid">
   <div class="row main-content bg-success text-center">
       <div class="col-md-4 text-center company__info">
                <img src="{{asset('img/centerL.png')}}" class="PLATOS" alt="ERROR DE IMAGEN AL CARGAR....." >
				<h4 class="company_title">PROYECTO DE JLDM</h4>
	    </div>
           <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                <div class="">{{ __('Login') }}
                <a href="#" class="d-block">
                    @guest
                         @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Aun no poseés una cuenta: {{ __('Register') }}</a>
                                </li>
                                @endif
                         @else
                    @endguest
                </a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="form-group">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="INGRESE SU E-mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control form__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="INGRESE SU PASSWORD">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color:black;">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                           <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btnL btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
