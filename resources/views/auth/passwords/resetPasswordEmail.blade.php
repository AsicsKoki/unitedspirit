@extends('layouts.master')
@section('content')

<style>
input {
    appearance: none;
    outline: 0;
    border: 1px solid rgba(255, 255, 255, 0.4);
    background-color: rgba(255, 255, 255, 1);
    width: 250px;
    border-radius: 3px;
    padding: 5px 15px;
    margin: 0 auto 10px auto;
    display: block;
    text-align: center;
    font-size: 18px;
    color: black;
    transition-duration: 0.25s;
    font-weight: 300;
}
input[type="checkbox"] {
	display: none;
}
hr {
    margin-top: 20px;
border: solid 1px #fff;
width: 50%;
}

</style>

<div class="wrapper1">
	    <div class="container1">
		    <h1>Reset E-mail</h1>
			<form action="{{ route('sendResetPasswordEmail') }}" method="POST" class="form_reset_password">
			<div class="col-sm-12">
				<label for="">Enter New E-mail</label>
				<input type="email" name="email" placeholder="Enter your email">
			</div>
			{{ csrf_field() }}
			<div class="col-sm-12 center-block">
				<input type="submit" value="Confirm" class="btn btn-primary">
			</div>
		</form>
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