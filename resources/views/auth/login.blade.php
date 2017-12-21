@extends('layouts.master')

@section('content')

     <div class="wrapper1">

	    <div class="container1">
@if(session('message'))
    <h4 style="text-align: center; margin-bottom: 15px;color: #ff5c5c;">{{ session('message') }} </h4>
@endif
		    <h1>Welcome to United Spirit</h1>
            <h2>Please Login</h2>
		<form class="login_form cf"  method="POST" action="{{ route('postUserLogin') }}">
         {{ csrf_field() }}
         <div class="col-sm-12">
			<input type="email" placeholder="e-mail" name="email" value="{{ old('email') }}" required autofocus>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>
        <div class="col-sm-12">
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
        </div>
            <button type="submit" id="login-button">Login</button>
        </form>
        <a class="btn btn-link" href="{{ route('getResetPasswordEmail') }}"> Forgot Password? </a>
	    </div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
    </div>

@endsection
