<header>
    <div class="header-top-bar">
        <p>DC POWER &#8480; VISA &REG;</p>
        <select name="sites" id="sites">
            <option value="">ADDITIONAL DC SITES</option>
            <option value="option1">Option1</option>
            <option value="option2">Option2</option>
        </select>
    </div>
    <div class="header-main">
        <div class="logo-container">
            <img src="../img/dc-logo.png" alt="" srcset="">
        </div>
        <nav>
            <a id="characters" href="{{route('characters')}}">CHARACTERS</a>
            <a id="comics" href="{{route('comics')}}">COMICS</a>
            <a id="movies" href="{{route('movies')}}">MOVIES</a>
            <a id="tv" href="{{route('tv')}}">TV</a>
            <a id="games" href="{{route('games')}}">GAMES</a>
            <a id="collectibles" href="{{route('collectibles')}}">COLLECTIBLES</a>
            <a id="videos" href="{{route('videos')}}">VIDEOS</a>
            <a id="fans" href="{{route('fans')}}">FANS</a>
            <a id="news" href="{{route('news')}}">NEWS</a>    
            <div class="shop-select">
                <a id="shop" href="{{route('shop')}}">SHOP</a>
                <p>&dtrif;</p>
            </div>        
        </nav>
        <div class="search-container">
            <form action="#">
                <input type="text" placeholder="Search">
                <img src="../img/search-solid.svg" alt="">
            </form>
        </div>
    </div>
</header>