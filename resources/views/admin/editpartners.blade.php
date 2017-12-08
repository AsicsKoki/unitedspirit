@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <h2 class="text-center">Our Partners</h2>
                 @foreach($partners as $partner)
                <div class="col-lg-2">
                    <div class="">
                        <h3>{{$partner->title }}</h3>
                        <img src="{{ URL::to('/') . $partner->path }}" alt="" style="height:140px;width:140px">
                    </div>
                {{Form::open(array('route' => 'partnerEdit','method'=>'POST', 'files'=>true))}}
                    <p>Enter partner's title:</p>
                    <input type="text" value="{{$partner->title }}" name="title">
                    <input type="file" name="photo" id="uploaded_photo" value="Upload photo!">
                    {{ csrf_field() }}
                    <div>
                        <input type="submit" value="Update" id="partner_photo_submit">
                        <input type="hidden" name="pid" value="{{ $partner->id }}">
                    </div>

                    <a href="{{ route('deletePartner', ['eid' => $partner->id ]) }}" class="btn btn-danger">Delete {{$partner->title}}</a>
                {{Form::close()}}
                    
                </div>
                @endforeach

               <a href="{{ route('addPartner') }}" class="btn btn-primary">Add New Partmer</a>

            </div>
        </div>
    </div>
</div>
@endsection
