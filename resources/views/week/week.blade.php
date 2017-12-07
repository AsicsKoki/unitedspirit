@extends('layouts.master')

@section('content')

 <div class="container">
            <h1 class="text-center">Week {{ $week->id }}</h1>
            <hr>
            <h3 class="text-center">{{ $week->name }} Finding the meaning of life</h3>
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <div class="col-sm-6 col-sm-offset-3">
                    <video controls class="embed-responsive-item center-block" src="{{ URL::to('/') . $vid }}" type="video/mp4"></video>
                </div>
                <div class="col-sm-12">
                    <div class="audio-player text-center row">
                        <div class="artwork-container col-xs-12">
                            <img src="#" alt="song art" class="artwork" />
                        </div>
                        <div class="controls-container col-xs-12">
                            <p class="meta "><strong>Wisdom from the world</strong> : Gandhi</p>
                            <audio controls>
                                  <source src="{{ URL::to('/') . $aud }}" type="audio/ogg">
                                  <source src="{{ URL::to('/') . $aud }}" type="audio/mpeg">
                                  Your browser does not support the audio element.
                           </audio>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <h3 class="text-center">Week {{ $week->id }}: practical exercise</h3>
                    <p class="text-center">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                
            </div>

  </div>
  <a href="{{ route('getDocument',['wid'=> $week->id]) }}"><button class="submit"> Download documentation! </button></a>


<h1> Specific week {{ $week->id }} </h1>


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


<!-- radi i ovako -->
 <!-- <a href="{{ URL::to('/') . $doc }}" download> Download here </a> -->

@endsection