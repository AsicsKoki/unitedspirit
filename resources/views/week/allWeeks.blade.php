@extends('layouts.master')

@section('content')

<h1> All weeks! </h1>



<div class="row" >
@foreach($weeks as $week)
  <div class="box">
  <p>{{ $week->id }}</p>
<a href="{{route('getSpecificWeek',['wid'=> $week->id]) }}"><img src="https://media.licdn.com/media/AAEAAQAAAAAAAApkAAAAJDE4ZDdkODAyLTcyZTctNDkzNy1iZjU2LTliYzI5ZGY3NTM1Nw.jpg" alt="">
  </div>
@endforeach

</div>  



@endsection











