@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center">Week {{ $week->id }} </h1>
        <form action="">
            <div class="form-group">
                <label for="week_name">Week name</label>
                <input type="email" class="form-control" id="week_name" placeholder="Name of the week">
            </div>
            <div class="form-group">
                <label for="week_paragraph">text about this week</label>
                <textarea class="form-control" id="week_paragraph" placeholder="explain what this week is about"></textarea>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                {{Form::open(array('route' => 'uploadVideo','method'=>'POST', 'files'=>true))}}
                 <label for="week_video">Choose a video</label>
                    <input type="file" class="form-control" id="week_video" name="video">
                    {{ csrf_field() }}
                    <input type="submit" value="Update" id="upload_video_submit">
                    <input type="hidden" name="wid" value="{{ $week->id }}">
                 <p class="help-block">Preferably of type mp4,ogg,webm</p>
                {{Form::close()}}
                </div>
             </div>
             <div class="col-sm-6">
                <div class="form-group">
                {{Form::open(array('route' => 'uploadAudio','method'=>'POST', 'files'=>true))}}
                <label for="week_audio">Choose audio</label>
                    <input type="file" class="form-control" id="week_audio" name="audio">
                    {{ csrf_field() }}
                    <input type="submit" value="Update" id="upload_audio_submit">
                    <input type="hidden" name="wid" value="{{ $week->id }}">
                    <p class="help-block">Preferably of type mp3,ogg</p>
                {{Form::close()}}
                </div>
            </div>
            <div class="form-group">
                <label for="practical_exercise" class="text-left">Text for practical exercise</label>
                <textarea class="form-control" id="practical_exercise" placeholder="explain what they should be doing this week"></textarea>
            </div>
            <div class="form-group">
                {{Form::open(array('route' => 'uploadDocument','method'=>'POST', 'files'=>true))}}
                <label for="week_document">Choose a document</label>
               <input type="file" name="document" id="uploaded_document" value="Upload document!">
               {{ csrf_field() }}
                 <div>
                <input type="submit" value="Update" id="upload_document_submit">
                <input type="hidden" name="wid" value="{{ $week->id }}">
                {{ Form::close() }}
            </div>
            </div>
            <p class="help-block">Make sure that all fields are filled before submitting!</p>
            <button class="btn btn-default" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection
