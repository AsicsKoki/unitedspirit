@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


            
            <h2 class="text-center">Our Experts</h2>
                @foreach($experts as $expert)
                <div class="col-lg-2">
                    <div class="experts_img_holder">
                        <h3>{{$expert->title }}</h3>
                        <img src="{{ URL::to('/') . $expert->path }}" alt="" style="height:140px;width:140px">
                    </div>
                {{Form::open(array('route' => 'expertEdit','method'=>'POST', 'files'=>true))}}
                    <p>Enter expert's title:</p>
                    <input type="text" value="{{$expert->title }}" name="title">
                    <input type="file" name="photo" id="uploaded_photo" value="Upload photo!">
                    {{ csrf_field() }}
                    <div>
                        <input type="submit" value="Update" id="expert_photo_submit">
                        <input type="hidden" name="eid" value="{{ $expert->id }}">
                    </div>

                    <a href="{{ route('deleteExpert', ['eid' => $expert->id ]) }}" class="btn btn-danger">Delete {{$expert->title}}</a>
                {{Form::close()}}
                    
                </div>
                @endforeach

                <a href="{{ route('addExpert') }}" class="btn btn-primary">Add New Expert</a>

            </div>
        </div>
    </div>
</div>
@endsection
