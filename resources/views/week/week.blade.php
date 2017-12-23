@extends('layouts.master')

@section('content')
 <div class="container">
            <h1 class="text-center week_number">My Campus Box</h1>
             <a href="{{ route('getMyCampus') }}"><button class="btn btn-default">Go back to calendar</button></a>
            <hr>
            <h3 class="text-center week_name"><strong> Week {{ $week->id }} </strong> : {{ $week->name }}</h3>
            <div class="row">
                <div class="week_desc_text">
                    <p class="text-center">
                    {{ $week->about }}
                    </p>
                </div>
                <hr>
                <div class="col-sm-6 col-sm-offset-3 video_holder">
                    <!-- <video controls class="embed-responsive-item center-block" src="{{ URL::to('/') . $vid }}" type="video/mp4"></video> -->
                      <!-- <video class="embed-responsive-item center-block" controls>
                        <source src="{{ URL::to('/') . $vid }}" type="video/mp4">
                        <source src="{{ URL::to('/') . $vid }}" type="video/ogg">
                        <source src="{{ URL::to('/') . $vid }}" type="video/webm">
                        Your browser does not support the video tag.
                    </video> -->
                    <iframe width="560" height="315" src="{{ $vid }}"  class="center-block" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    <br>
                      <h3 class="text-center"><strong>Self realization</strong> : {{ $week->self_realization_title }}</h3>
                    @if($week->videos->count()>2)
                    <iframe width="560" height="315" src="{{ $vid2 }}"  class="center-block" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    @endif
                </div>
                <div class="col-sm-12">
                    <div class="audio-player text-center row">
                        <!-- <div class="artwork-container col-xs-12">
                            <img src="{{ URL::to('/') . $logo }}" alt="song art" class="artwork" />
                        </div> -->
                        <div class="controls-container col-xs-12">
                             <h3 class="text-center"><strong>Wisdome from the world</strong> : <a href="{{ route('getDocument',['wid'=> $week->id]) }}">{{ $week->wisdome_title }}</a></h3>
                            <hr>
                               <h3 class="text-center"><strong>Healthy Mind in a Healthy body</strong> : {{ $week->healthy_mind_title }}</h3>

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
  </div>
  <hr>   
            <div class="row">
            @if(!($week->id-1)==0)
                <div class="col-xs-6">    
                    <a href="{{ route('getSpecificWeek',['wid'=> $week->id-1]) }}"><button class="btn btn-primary center-block" style="margin-left:60px; margin-bottom: 20px;"> Go to previous week</button></a>
                </div>
            @endif
            @if(($week->id-1)==0)
                <div class="col-xs-12">    
                    <a href="{{ route('getSpecificWeek',['wid'=> $week->id+1]) }}"><button class="btn btn-primary center-block pull-right" style="margin-right:60px;margin-bottom: 20px;"> Go next week </button></a>
                </div>
            @elseif($user->weeks->contains($week->id+1))
                <div class="col-xs-6">    
                    <a href="{{ route('getSpecificWeek',['wid'=> $week->id+1]) }}"><button class="btn btn-primary center-block pull-right" style="margin-right:60px;margin-bottom: 20px;"> Go next week </button></a>
                </div>
            @endif
            </div>

@endsection