@extends('layaut.app')
@section('page-title', 'form')
@section('content')
{{-- @foreach ($comics as $comic)
<li>{{$comic['title']}}</li> --}}

<div class="d-flex container comics-cards">
    @foreach ($comics as $comic)
    <div class="card-comics">
        <div class="img">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
        <div class="title">
            <span class="title"><a href="{{route('comics.show', $comic['id'])}}">{{$comic['title']}}</a></span>
        </div>
    </div>
    @endforeach
</div>

@endsection