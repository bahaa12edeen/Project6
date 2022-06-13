@extends('layout.master')

@section('title', 'Request')

@section('content')
    {{-- <form action="{{ url('request/send') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file">
        <input type="submit" value="submit">
    </form> --}}

    <form action="{{ url('request/send') }}" method="get">
        @csrf
        <input type="text" name="req_title">
        <br><br>
        {{-- <input type="text" name="req_txt"> --}}
        <textarea type="text" name="req_txt" cols="30" rows="10"></textarea>
        <br><br>
        <input type="text" name="volunteer_id" value="volunteer_id" disabled>
        <br><br>
        <input type="text" name="user_id" value="user_id" disabled>
        <br><br>
        <input type="submit" value="submit">
    </form>
@endsection