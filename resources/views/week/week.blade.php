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

{{Form::open(array('route' => 'uploadVideo','method'=>'POST', 'files'=>true))}}
  <input type="file" name="video" id="uploaded_video" value="Upload video!">
  {{ csrf_field() }}
  <div>
    <input type="submit" value="Update" id="upload_video_submit">
    <input type="hidden" name="wid" value="{{ $week->id }}">
  </div>
{{Form::close()}}

<video width="320" height="240" controls>
  <source src="{{ URL::to('/') . $vid }}" type="video/mp4">
  <source src="{{ URL::to('/') . $vid }}" type="video/ogg">
  <source src="{{ URL::to('/') . $vid }}" type="video/webm">
  Your browser does not support the video tag.
</video>



{{Form::open(array('route' => 'uploadAudio','method'=>'POST', 'files'=>true))}}
  <input type="file" name="audio" id="uploaded_audio" value="Upload audio!">
  {{ csrf_field() }}
  <div>
    <input type="submit" value="Update" id="upload_audio_submit">
    <input type="hidden" name="wid" value="{{ $week->id }}">
  </div>
{{Form::close()}}

<audio controls>
  <source src="{{ URL::to('/') . $aud }}" type="audio/ogg">
  <source src="{{ URL::to('/') . $aud }}" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

{{Form::open(array('route' => 'uploadDocument','method'=>'POST', 'files'=>true))}}
  <input type="file" name="document" id="uploaded_document" value="Upload document!">
  {{ csrf_field() }}
  <div>
    <input type="submit" value="Update" id="upload_document_submit">
    <input type="hidden" name="wid" value="{{ $week->id }}">
  </div>
{{Form::close()}}

<br>

<a href="{{ route('getDocument',['wid'=> $week->id]) }}"><button class="submit"> Download documentation! </button></a>


<!-- radi ovako -->
 <a href="{{ URL::to('/') . $doc }}" download> Download here </a>

@endsection