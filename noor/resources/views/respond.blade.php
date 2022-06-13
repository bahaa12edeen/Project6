@extends('layout.master')

@section('title', 'Respond')

@section('content')
    {{-- <form action="{{ url('/respond/send') }}" method="get" style="margin: 20px;">
        @csrf
        message: <textarea name="message"></textarea>
        <br><br>
        file: <input type="file" name="file">
        <br><br>
        <input type="submit" value="submit">
    </form> --}}

    <form action="{{ url('respond/send') }}" method="post" enctype="multipart/form-data">
        @csrf
        message: <textarea name="message"></textarea>
        <br><br>
        file: <input type="file" name="file" id="file">
        <br><br>
        <input type="submit" value="submit">
    </form>
@endsection