@extends('layouts.app')

@section('content')


<h1> Specific week {{ $week[0]->id }} </h1>

  <table> 
        <th> {{ $audio[0]->id }} </th>
        <th> {{ $video[0]->id }} </th>
        <th> {{ $document[0]->id }} </th>
  </table>




@endsection