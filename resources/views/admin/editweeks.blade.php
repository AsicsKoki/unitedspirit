@extends('admin.layout.auth')

@section('content')
<div class="container">

@foreach($weeks as $week)
<div class="col-sm-12 text-center" style="background: #eee; border: solid 1px; line-height: 2em;"><a href="{{route('getEditWeek',['wid'=> $week->id]) }}">Week {{ $week->id }}</a></div>
@endforeach

</div>
@endsection
