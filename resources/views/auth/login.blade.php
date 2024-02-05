@extends('layouts.app2')

@section('content')
    <div class="container" >
        <div class="row justify-content-center d-flex align-items-center" style="height: 90vh">
            <div class="col-md-5">
                <div class="card" style="background-color: #fff; opacity: 0.85;" >
                    <div class="card-body">
                        <form method="POST"  action="{{ route('login') }}" >
                            @csrf
                            <div class="row text-center">
                                <h2 class="h2">Inicio de sesión</h2>
                            </div>

                            <div class="row mb-3 justify-content-center pt-5">
                        

                                <div class="col-md-10">
                                    <input id="email" type="email" class="form-control text-center @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="CORREO">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                            

                                <div class="col-md-10">
                                    <input id="password" type="password" class="form-control text-center @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus placeholder="CONTRASEÑA">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-10 d-grid gap-2">
                                    <button type="submit" class="btn btn-lili">
                                        {{ __('INGRESAR') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
