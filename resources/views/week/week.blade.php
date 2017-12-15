@extends('layouts.master')

@section('content')
 <div class="container">
            <h1 class="text-center week_number">My Campus Box</h1>
             <a href="{{ route('getMyCampus') }}"><button>Go back to calendar</button></a>
            <hr>
            <h3 class="text-center week_name"><strong> Week {{ $week->id }} </strong> : {{ $week->name }}</h3>
            <div class="row">
                <div class="week_desc_text">
                    <p class="text-center">
                    {{ $week->about }}
                    </p>
                </div>
                <div class="col-sm-6 col-sm-offset-3 video_holder">
                    <!-- <video controls class="embed-responsive-item center-block" src="{{ URL::to('/') . $vid }}" type="video/mp4"></video> -->
                      <!-- <video class="embed-responsive-item center-block" controls>
                        <source src="{{ URL::to('/') . $vid }}" type="video/mp4">
                        <source src="{{ URL::to('/') . $vid }}" type="video/ogg">
                        <source src="{{ URL::to('/') . $vid }}" type="video/webm">
                        Your browser does not support the video tag.
                    </video> -->
                    <h3 class="text-center"><strong>Self Realization</strong> : {{ $week->self_realization_title }}</h3>
                    <iframe width="560" height="315" src="{{ $vid }}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="col-sm-12">
                    <div class="audio-player text-center row">
                        <!-- <div class="artwork-container col-xs-12">
                            <img src="{{ URL::to('/') . $logo }}" alt="song art" class="artwork" />
                        </div> -->
                        <div class="controls-container col-xs-12">
                             <h3 class="text-center"><strong>Wisdome from the world</strong> : {{ $week->wisdome_title }}</h3>
                            <audio controls>
                                  <source src="{{ URL::to('/') . $aud }}" type="audio/ogg">
                                  <source src="{{ URL::to('/') . $aud }}" type="audio/mpeg">
                                  Your browser does not support the audio element.
                           </audio>
                           <h3 class="text-center"><strong>Healthy Mind in a Healthy body</strong> : {{ $week->healthy_mind_title }}</h3>
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
            <button> Go back </button>

            <div class="download_links_holder">
                <a href="{{ route('getDocument',['wid'=> $week->id]) }}"><button class="submit"> Download documentation! </button></a>
                <!-- <a href="{{ URL::to('/') . $doc }}" download> Download here </a> -->
            </div>

            <button> Go forward </button>
  </div>
@endsection