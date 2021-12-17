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
            <a href="{{route('characters')}}">CHARACTERS</a>
            <a href="{{route('comics')}}">COMICS</a>
            <a href="{{route('movies')}}">MOVIES</a>
            <a href="{{route('tv')}}">TV</a>
            <a href="{{route('games')}}">GAMES</a>
            <a href="{{route('collectibles')}}">COLLECTIBLES</a>
            <a href="{{route('videos')}}">VIDEOS</a>
            <a href="{{route('fans')}}">FANS</a>
            <a href="{{route('news')}}">NEWS</a>    
            <div class="shop-select">
                <a href="{{route('shop')}}">SHOP</a>
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