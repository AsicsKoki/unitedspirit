@extends('admin.layout.auth')

@section('content')

<div class="container">
        <form class="login_form cf"  method="POST" action="{{ route('postGenerateAccount') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="first_name" class="col-md-4 control-label">First Name</label>

                <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                <label for="last_name" class="col-md-4 control-label">Last Name</label>

                <div class="col-md-6">
                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Adresa</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                <label for="phone" class="col-md-4 control-label">Birthdate</label>

                <div class="col-md-6">
                    <input id="birthdate" type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}" required autofocus>

                    @if ($errors->has('birthdate'))
                        <span class="help-block">
                            <strong>{{ $errors->first('birthdate') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label for="phone" class="col-md-4 control-label">Phone</label>

                <div class="col-md-6">
                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

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
                <label for="is_subscribed" class="col-md-4 control-label">Is subscribed</label>

                <div class="col-md-6">
                <label for="is_subscribed">Yes
                    <input id="is_subscribed" type="radio" class="form-control" name="is_subscribed">

                <label for="is_not_subscribed">No  <input id="is_not_subscribed" type="radio" class="form-control" name="is_subscribed"></label>
                </div>
            </div>





            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                
                </div>
            </div>
        </form>
</div>

@endsection
