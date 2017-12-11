@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in as Admin!
                    <nav>
                        <li><a href="{{ route('getEditWeeks') }}">Edit weeks</a></li>
                        <li><a href="{{ route('getEditExperts') }}">Edit experts</a></li>
                        <li><a href="{{ route('getEditPartners') }}">Edit partners</a></li>
                        <li><a href="{{ route('getGenerateAccount') }}">Generate a subscribed account</a></li>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
