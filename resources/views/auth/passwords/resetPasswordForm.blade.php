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
		    <h1>Reset Password</h1>
	
			<form action="{{ route('setNewPassword') }}" method="POST" class="form_reset_password">
			<div class="col-sm-12">

				<input type="hidden" value="{{ $token }}">
				<label for="">Enter New Password</label>
				<br>

				<input type="password" name="password" placeholder="Enter new password" id="new_password">
				<div class="col-sm-12 text-center">
					<label for="show_password">Show Password |</label>
					<input type="checkbox" id="show_password" name="show_password"> 
					<label for="hide_password">Hide Password</label>
					<input type="checkbox" id="hide_password" name="hide_password"> 
				</div>
			</div>
			<hr>
			<div class="col-sm-12">
			<label for="">Confirm New Password</label>
				<input type="password" name"confirm_password" placeholder="Confirm new password">
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