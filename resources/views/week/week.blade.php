@extends('layouts.master')

@section('content')
 <div class="container">
            <h1 class="text-center">Week {{ $week->id }}</h1>
            <hr>
            <h3 class="text-center">{{ $week->name }}</h3>
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center">
                    {{ $week->about }}
                    </p>
                </div>
                <div class="col-sm-6 col-sm-offset-3">
                    <!-- <video controls class="embed-responsive-item center-block" src="{{ URL::to('/') . $vid }}" type="video/mp4"></video> -->
                      <video class="embed-responsive-item center-block" controls>
                        <source src="{{ URL::to('/') . $vid }}" type="video/mp4">
                        <source src="{{ URL::to('/') . $vid }}" type="video/ogg">
                        <source src="{{ URL::to('/') . $vid }}" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-sm-12">
                    <div class="audio-player text-center row">
                        <div class="artwork-container col-xs-12">
                            <img src="{{ URL::to('/') . $logo }}" alt="song art" class="artwork" />
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
                    {{ $week->exercise }}
                    </p>
                </div>

            </div>
            <div class="download_links_holder">
                <a href="{{ route('getDocument',['wid'=> $week->id]) }}"><button class="submit"> Download documentation! </button></a>
                <a href="{{ URL::to('/') . $doc }}" download> Download here </a>
            </div>
  </div>
@endsection