@extends('layout.master')

@section('title', 'Ask')

@section('content')
    @foreach ($result as $item)
        <ul>
            <li><b>Request Title: </b>{{ $item->req_title }}</li>                
            <li><b>Request Text: </b>{{ $item->req_txt }}</li>
            <li><b>Volunteer: </b>{{ $item->volunteer_id }}</li>
            <li><b>User: </b>{{ $item->user_id }}</li>
            <li><b><a href="{{ url('/respond') }}">Replay</a></li>
        </ul>
    @endforeach
@endsection