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
@endsection