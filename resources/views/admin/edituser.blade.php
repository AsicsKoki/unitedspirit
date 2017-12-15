@extends('admin.layout.auth')

@section('content')

<div class="container">
        <form class="login_form cf"  method="POST" action="{{ route('postEditUserAccount') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <input type="hidden" name="id" value="{{ $user->id }}">
                <label for="first_name" class="col-md-4 control-label">First Name</label>

                <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" required autofocus>

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
                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" >

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
                    <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" >

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
                    <input id="birthdate" type="date" class="form-control" name="birthdate" value="{{ $user->birthdate }}" >

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
                    <input id="phone" type="text" class="form-control" name="phone" value="{{ $user->phone }}">

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
                    <input id="password" type="password" class="form-control" name="password">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group">
                <label for="is_subscribed" class="col-md-4 control-label">Is subscribed</label>

                <div class="col-md-6">
              
                @if($user->active==1)
               
                <label class="radio-inline control-label" for="is_subscribed">Yes
                <input id="is_subscribed" type="radio" class="form-control" name="is_subscribed" value="1" checked></label>
                <label class="radio-inline control-label" for="is_not_subscribed">No  
                <input id="is_not_subscribed" type="radio" class="form-control" name="is_subscribed" value="0"></label>
              
                @elseif($user->active==0)
                
                <label class="radio-inline control-label" for="is_subscribed">Yes
                <input id="is_subscribed" type="radio" class="form-control" name="is_subscribed" value="1"></label>
                <label class="radio-inline control-label" for="is_not_subscribed">No  
                <input id="is_not_subscribed" type="radio" class="form-control" name="is_subscribed" value="0" checked></label>
              
                @else
                
                <label class="radio-inline control-label" for="is_subscribed">Yes
                <input id="is_subscribed" type="radio" class="form-control" name="is_subscribed" value="1"></label>
                <label class="radio-inline control-label" for="is_not_subscribed">No  
                <input id="is_not_subscribed" type="radio" class="form-control" name="is_subscribed" value="0"></label>
               
                @endif





                </div>
            </div>





            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button style="margin-top:50px;" type="submit" class="btn btn-primary">
                        Edit
                    </button>
                
                </div>
            </div>
        </form>
</div>

@endsection
