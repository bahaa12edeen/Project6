@extends('layout.master')

@section('title', 'Aduio Book')

@section('content')
    <div class="head" style="padding: 20px;">
        <div class="search" style="display: flex; display-direction: row; justify-content: space-between;">
            <form action="/book/seaech/" method="get">
                <input type="text" name="search" id="search">
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
            <div class="request">
                <a href="{{ url('request') }}">Request</a>
            </div>
        </div>
        <hr>
        <div>
            @foreach ($data as $item)
                <ul>
                    <li><b>Book Name: </b>{{ $item->book_name }}</li>                
                    <li><b>Book Author: </b>{{ $item->book_author }}</li>
                    <li><b>Book Description: </b>{{ $item->book_description }}</li>
                </ul>
            @endforeach
        </div>
    </div>
@endsection