@extends('layout.app')

@section('CSS')
    <link rel="stylesheet" href="{{asset('css/single.css')}}">
@endsection

@section('content')
    <main>
        <div class="jumbo-container">
            <img src="../img/jumbotron.jpg" alt="">
        </div>
        <div class="blue-bar">
            <div class="card">
                <img src="{{$comics[$id]['thumb']}}" alt="">
                <div class="top">
                    <p>COMIC BOOK</p>
                </div>
                <div class="bottom">
                    <p>WIEW GALLERY</p>
                </div>
            </div>    
        </div>
        <div class="single-content">
            <div class="description-container">
                <div class="description">
                    <div class="title">
                        <h1>{{$comics[$id]['title']}}</h1>
                    </div>
                    <div class="green-bar">
                        <div class="left">
                            <p>U.S. Price <em>{{$comics[$id]['price']}}</em></p>
                            <p>AVIABLE</p>
                        </div>
                        <div class="right">
                            <p><strong>Check Availability</strong> &dtrif;</p>
                        </div>
                    </div>
                </div>
                <div class="advertisement">
                    <h4>ADVERTISEMENT</h4>
                    <img src="{{asset('img/single.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </main>

    
    
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