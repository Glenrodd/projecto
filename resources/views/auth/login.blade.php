@extends('layouts.login')

@section('content')
<form class="login100-form validate-form"  method="POST" action="{{ route('login') }}">
        @csrf
        <span class="login100-form-title">
            <i class="fa fa-store-alt"></i>
            FACEBA
        </span>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input id="usr_usuario" type="text" class="input100" name="usr_usuario" value="{{ old('usr_usuario') }}" required autofocus>

            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
            </span>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input id="password" type="password" class="input100" name="password" required>            
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
        </div>
        @php
            $date=date('Y-m-d');
        @endphp
        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" onclick="dateufv();">
                Iniciar Sesion
            </button>                 
        </div>
    </form>
@endsection
<script>
    
</script>
