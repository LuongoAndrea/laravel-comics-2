@extends('layaut.app')
@section('page-title', 'comics')
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
            <span class="title"><a href="{{route('comic.show', $comic->id)}}">{{$comic->title}}</a></span>

            {{-- <span class="title">{{$comic['title']}}</span> --}}

        </div>
    </div>
    @endforeach
</div>

@endsection


<style lang="scss" scoped>
    .d-flex {
        display: flex;
        flex-wrap: wrap;
    }

    .card {
        margin: 10px;
    }

    .img {
        overflow: hidden;
        height: 150px;
        width: 150px;
    }

    .title {
        color: $white;
        width: 150px;
        text-transform: uppercase;
    }
</style>