@extends('admin.layout.auth')

@section('content')
<style>
.weeks_as_week {
    background: #fff;
    line-height: 1.9em;
    box-shadow: 0px 1px 11px 4px pink;
    border-radius: 30px;
    color: #2196f3;
    font-size: 20px;
    font-weight: bold;
    text-decoration: none;
}
.weeks_as_week:hover {
    box-shadow: 0px -3px 11px 4px pink;
}


</style>
<div class="container">

@foreach($weeks as $week)
<a href="{{route('getEditWeek',['wid'=> $week->id]) }}" style="display: block;">
<div class="col-sm-12 text-center weeks_as_week">Week {{ $week->id }} : {{ $week->name }}</div></a>
@endforeach

</div>
@endsection
