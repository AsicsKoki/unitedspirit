@extends('layouts.master')


@section('content')
<style>
    .changePW_holder {
        height: 92.2vh;
    }
    .container1 {
    max-width: 600px;
    margin: 0 auto;
    /* height: 400px; */
    text-align: center;
    padding-bottom: 0;
    vertical-align: middle;
    z-index: 20;
    position: relative;
}

</style>

<div class="wrapper1">
	    <div class="container1">
		    <h1>Change password</h1>
            @if(session('message'))
			<div class="flash_message">
   			 <h4>{{ session('message') }} </h4>
			</div>
			@endif
            <form class="form-horizontal" method="POST" action="{{ route('postChangePassword') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('oldpassword') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Old password</label>

                <div class="col-md-6">
                    <input id="oldpassword" type="password" class="form-control" name="oldpassword" required>

                    @if ($errors->has('oldpassword'))
                        <span class="help-block">
                            <strong>{{ $errors->first('oldpassword') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">New password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Change password
                    </button>
                 
            </div>
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
