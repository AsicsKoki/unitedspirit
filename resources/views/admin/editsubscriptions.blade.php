@extends('admin.layout.auth')

@section('content')
<div class="container">

    @foreach($subscription_types as $sub_t)
     <form class=""  method="POST" action="{{ route('postEditSubscriptions') }}">
     {{ csrf_field() }}
         <label for="first_name" class="col-md-4 control-label">Subscription {{ $sub_t->id }}:</label>
            <div class="col-md-6">
                    Name:<input id="sub{{ $sub_t->id }}_name" type="text" class="form-control" name="sub_name" value="{{ $sub_t->name }}" required>
                    Price:<input id="sub{{ $sub_t->id }}_price" type="text" class="form-control" name="sub_price" value="{{ $sub_t->price }}" required>
                    <input type="hidden" value="{{ $sub_t->id }}" name="sub_id">


                    <input type="submit" value="Edit subscription {{ $sub_t->id }}">
            </div>
     </form>
     @endforeach

</div>
@endsection
