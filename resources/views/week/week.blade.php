@extends('layouts.master')

@section('content')
<style>
@media (max-width: 600px) {
    .col-xs-6 {
        width: 100% !important;
    }
}
</style>
 <div class="container">
            <h1 class="text-center week_number">My Campus Box</h1>
             <a href="{{ route('getMyCampus') }}"><button class="btn btn-default">Retourner au calendrier</button></a>
            <hr>
            <h3 class="text-center week_name"><strong> Semaine {{ $week->id }} </strong> : {{ $week->name }}</h3>
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
                    <iframe src="{{ $vid }}"  class="center-block responsive-video" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    <br>
                     <h3 class="text-center"><strong>Self realization</strong> : {{ $week->self_realization_title }}</h3>
                    @if($week->videos->count()>2)
                    <iframe src="{{ $vid2 }}"  class="center-block responsive-video" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    @endif
                </div>
                <div class="col-sm-12">
                    <div class="audio-player text-center row">
                        <!-- <div class="artwork-container col-xs-12">
                            <img src="{{ URL::to('/') . $logo }}" alt="song art" class="artwork" />
                        </div> -->
                        <div class="controls-container col-xs-12">
                             <h3 class="text-center"><strong>Sagesse du Monde</strong> : <a href="{{ route('getDocument',['wid'=> $week->id]) }}">{{ $week->wisdome_title }}</a></h3>
                            <hr>
                               <h3 class="text-center"><strong>Corps sain dans un esprit sain</strong> : {{ $week->healthy_mind_title }}</h3>

                            <audio controls>
                                  <source src="{{ URL::to('/') . $aud }}" type="audio/ogg">
                                  <source src="{{ URL::to('/') . $aud }}" type="audio/mpeg">
                                  Your browser does not support the audio element.
                           </audio>
                         
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <h3 class="text-center"><strong>Exercice Pratique </strong>: {{ $week->exercise_title }}</h3>
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
                    <a href="{{ route('getSpecificWeek',['wid'=> $week->id-1]) }}"><button class="btn btn-primary center-block" style="margin-left:60px; margin-bottom: 20px;">Retourner à la semaine précédente</button></a>
                </div>
            @endif
            @if(($week->id-1)==0)
                <div class="col-xs-12">    
                    <a href="{{ route('getSpecificWeek',['wid'=> $week->id+1]) }}"><button class="btn btn-primary center-block pull-right" style="margin-right:60px;margin-bottom: 20px;">Aller à la semaine suivante</button></a>
                </div>
            @elseif($user->weeks->contains($week->id+1))
                <div class="col-xs-6">    
                    <a href="{{ route('getSpecificWeek',['wid'=> $week->id+1]) }}"><button class="btn btn-primary center-block pull-right" style="margin-right:60px;margin-bottom: 20px;">Aller à la semaine suivante</button></a>
                </div>
            @endif
            </div>

@endsection