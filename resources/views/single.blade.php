@extends('layout.app')

@section('content')
    <img src="{{$comics[$id]['thumb']}}" alt="">
    <h1>{{$comics[$id]['title']}}</h1>
    <p>{{$comics[$id]['price']}}</p>
    <p>{{$comics[$id]['description']}}</p>
    <h4>Artists</h4>
    @foreach ($comics[$id]['artists'] as $artist)
        <p>{{$artist}}</p>
    @endforeach
    <h4>Writers</h4>
    @foreach ($comics[$id]['writers'] as $writer)
        <p>{{$writer}}</p>
    @endforeach
    <p>{{$comics[$id]['series']}}</p>
    <p>{{$comics[$id]['price']}}</p>
    <p>{{$comics[$id]['sale_date']}}</p>
@endsection

@section('script')
    <script>
        let active = document.getElementById('comics');
        active.classList.add('active');
    </script>
@endsection    