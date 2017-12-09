@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center">Week {{ $week->id }} : {{ $week->name }} </h1>
            <form action="{{ route('postEditWeek') }}" method="POST">
                {{Form::open(array('route' => 'postEditWeek','method'=>'POST', 'files'=>true))}}
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" name="wid" value="{{ $week->id }}">
                    <label for="week_name">Week name:</label>
                    <input type="text" class="form-control" id="week_name" placeholder="Name of the week" name="week_name" value="{{ $week->name }}">
                </div>
                <div class="form-group">
                    <label for="week_paragraph">Text about this week:</label>
                    <textarea class="form-control" id="week_paragraph" placeholder="explain what this week is about" name="week_about">{{$week->about}}</textarea>
                </div>
            
                <div class="form-group">
                    <label for="practical_exercise" class="text-left">Text for practical exercise</label>
                    <textarea class="form-control" id="practical_exercise" placeholder="Explain what they should be doing this week" name="week_exercise">{{ $week->exercise }}</textarea>
                </div>
                 <input type="submit" value="Submit text edits" id="text_submit">
            </form>
                <div class="col-sm-6">
                    <div class="form-group">
                    {{Form::open(array('route' => 'uploadVideo','method'=>'POST', 'files'=>true))}}
                    <label for="uploaded_video">Choose a video</label>
                    <hr>
                         <input type="file" name="video" id="uploaded_video" value="Upload video!">
                         {{ csrf_field() }}
                        <input class="edit_btns" type="submit" value="Update" id="upload_video_submit">
                        <input type="hidden" name="wid" value="{{ $week->id }}">
                        <p class="help-block">Preferably of type mp4,ogg,webm</p>
                    {{Form::close()}}

                    <video width="320" height="240" controls>
                        <source src="{{ URL::to('/') . $vid }}" type="video/mp4">
                        <source src="{{ URL::to('/') . $vid }}" type="video/ogg">
                        <source src="{{ URL::to('/') . $vid }}" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    {{Form::open(array('route' => 'uploadAudio','method'=>'POST', 'files'=>true))}}
                    <label for="week_audio">Choose audio</label>
                    <hr>
                        <input type="file" class="form-control" id="week_audio" name="audio">
                        {{ csrf_field() }}
                        <input class="edit_btns" type="submit" value="Update" id="upload_audio_submit">
                        <input type="hidden" name="wid" value="{{ $week->id }}">
                        <p class="help-block">Preferably of type mp3,ogg</p>
                    {{Form::close()}}

                    <audio controls>
                        <source src="{{ URL::to('/') . $aud }}" type="audio/ogg">
                        <source src="{{ URL::to('/') . $aud }}" type="audio/mpeg">
                        Your browser does not support the audio element.
                        </audio>
                    </div>

                <div class="col-sm-6">
                    <div class="form-group">
                    {{Form::open(array('route' => 'uploadImage','method'=>'POST', 'files'=>true))}}
                    <label for="week_audio">Choose week logo</label>
                        <input type="file" name="photo" id="uploaded_photo" value="Upload photo!">
                        {{ csrf_field() }}
                        <input class="edit_btns" type="submit" value="Update" id="upload_photo_submit">
                        <input type="hidden" name="wid" value="{{ $week->id }}">
                        <p class="help-block">Preferably of type jpeg,png</p>
                    {{Form::close()}}

                        <img src="{{ URL::to('/') . $logo }}" alt="">
                        
                        </div>
                    </div>
                </div>
<!-- 
                <div class="form-group">
                    <label for="practical_exercise" class="text-left">Text for practical exercise</label>
                    <textarea class="form-control" id="practical_exercise" placeholder="Explain what they should be doing this week" name="week_exercise">{{ $week->exercise }}</textarea>
                </div> -->
                    <div class="form-group">
                        {{Form::open(array('route' => 'uploadDocument','method'=>'POST', 'files'=>true))}}
                        <label for="week_document">Choose a document</label>
                        <input type="file" name="document" id="uploaded_document" value="Upload document!">
                        {{ csrf_field() }}
                    <div>
                        <input class="edit_btns" type="submit" value="Update" id="upload_document_submit">
                        <input type="hidden" name="wid" value="{{ $week->id }}">
                        {{ Form::close() }}
                        <a href="{{ route('getDocument',['wid'=> $week->id]) }}" class="btn btn-primary">Download documentation!</a>
            
                    </div>
                </div>
       


                
                {{Form::close()}}
            </form>
            
    </div>
</div>
@endsection
