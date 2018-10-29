@extends('layouts.session')

@section('content')
<div>
    <div>

        <h1 class="logo-name">SOf</h1>

    </div>
    <h3>Welcome to IN+</h3>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input  id="email" name="email" type="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Username" required autofocus>
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

        <a href="{{ route('password.request') }}"><small>Olvidaste tu Contraseña?...</small></a>

    </form>
</div>
@endsection
