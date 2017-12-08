@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center">Week + id </h1>
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
                    <label for="week_video">Choose a video</label>
                <input type="file" class="form-control" id="week_video">
                <p class="help-block">Preferably of type mp4 ili sta god.</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="week_audio">Choose audio</label>
                <input type="file" class="form-control" id="week_audio">
                <p class="help-block">Preferably of type mp3 ili sta god.</p>
                </div>
            </div>
            <div class="form-group">
                <label for="practical_exercise" class="text-left">Text for practical exercise</label>
                <textarea class="form-control" id="practical_exercise" placeholder="explain what they should be doing this week"></textarea>
            </div>
            <div class="form-group">
                <label for="week_document">Choose a document</label>
               <input type="file" class="form-control" id="week_document">
            </div>
            <p class="help-block">Make sure that all fields are filled before submitting!</p>
            <button class="btn btn-default" type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection
