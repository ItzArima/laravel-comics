@extends('layout.app')


@section('content')
    <main>
        <div class="jumbo-container">
            <img src="../img/jumbotron.jpg" alt="">
            <div class="title">
                <h2>CURRENT SERIES</h2>
            </div>
        </div>
        <div class="comicses-container">
            @foreach ($comicses as $comics)
                <div class="comics">
                    <img src="{{$comics['thumb']}}" alt="">
                    <h4>{{$comics['series']}}</h4>
                </div>    
            @endforeach    
        </div>
        <div class="button-container">
            <button>LOAD MORE</button>
        </div>
    </main>    
@endsection

@section('script')
    <script>
        let active = document.getElementById('comics');
        active.classList.add('active');
    </script>
@endsection    