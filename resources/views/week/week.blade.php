@extends('layouts.app')

@section('content')


<h1> Specific week {{ $week->id }} </h1>

  <table> 
    <tr>
        <th> {{ $audio->id }} </th>
        <th> {{ $video->id }} </th>
        <th> {{ $document->id }} </th>
        <th> {{ $video->name }} </th>
    </tr>
  </table>

  {{Form::open(array('route' => 'uploadImage','method'=>'POST', 'files'=>true))}}
  <input type="file" name="photo" id="uploaded_photo" value="Upload photo!">
  {{ csrf_field() }}
  <div>
    <input type="submit" value="Update" id="upload_photo_submit">
    <input type="hidden" name="wid" value="{{ $week->id }}">
  </div>
{{Form::close()}}

<img src="{{ URL::to('/') . $logo }}" alt="">




@endsection