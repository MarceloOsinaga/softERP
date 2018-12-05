@extends('layouts.admin')

@section('content')
<div>
    <div>

        <h1 class="logo-name">SOf</h1>

    </div>
    <h3>Registre nuevo usuario</h3>
    <form method="POST" action="">
        <div class="form-group">
            <input id="name" type="text" class="form-control" placeholder="Nombre" name="name"  required autofocus>
        </div>
        <div class="form-group">
            <input id="email" type="email" class="form-control" placeholder="Email" name="email"  required>
    
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" placeholder="Password" name="password_confirmation" required>

        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">Register</button>
    </form>
</div>  
@endsection