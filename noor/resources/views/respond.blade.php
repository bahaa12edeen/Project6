@extends('layout.master')

@section('title', 'Respond')

@section('content')
    <div style="margin: 20px;">
        <form action="{{ url('respond/send') }}" method="post" enctype="multipart/form-data">
            @csrf
            Book Name: <input type="text" name="name">
            <br><br>
            Book Description: <textarea name="Description"></textarea>
            <br><br>
            Author: <input type="text" name="Author">
            <br><br>
            image: <input type="file" name="img" id="img">
            <br><br>
            file: <input type="file" name="file" id="file">
            <br><br>
            <input type="submit" value="submit">
        </form>
    </div>
@endsection