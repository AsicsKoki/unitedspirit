@extends('admin.layout.auth')

@section('content')

<div class="container">

        <ul>
        @foreach($users as $user)
            <li><a href="{{ route('getEditUserAccount',['eid' => $user->id]) }}">User:{{ $user->first_name }} {{ $user->last_name }}</a></li>
        @endforeach
        </ul>

</div>

@endsection
