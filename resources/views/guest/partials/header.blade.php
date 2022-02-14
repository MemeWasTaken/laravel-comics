<header>
    <div class="container">
        <img class="img-logo-hd" src="{{asset('img/dc-logo.png')}}" alt="">
        <ul class="lista-navbar-header">
            <li class="list-item-navbar"> <a href="{{route('characters')}}" class="link-navabr  {{ 'characters' === Route::currentRouteName() ? 'active' : '' }}"> Characters </a> </li>
            <li class="list-item-navbar "> <a href="{{route('home')}}" class="link-navabr {{ 'home' === Route::currentRouteName() ? 'active' : '' }}"> Comics </a> </li>
            <li class="list-item-navbar "> <a href="{{route('movies')}}" class="link-navabr {{ 'movies' === Route::currentRouteName() ? 'active' : '' }}"> Movies </a> </li>
            <li class="list-item-navbar "> <a href="{{route('tv')}}" class="link-navabr {{ 'tv' === Route::currentRouteName() ? 'active' : '' }}"> Tv </a> </li>
            <li class="list-item-navbar "> <a href="{{route('games')}}" class="link-navabr {{ 'games' === Route::currentRouteName() ? 'active' : '' }}"> Games </a> </li>
            <li class="list-item-navbar "> <a href="{{route('collectibles')}}" class="link-navabr {{ 'collectibles' === Route::currentRouteName() ? 'active' : '' }}"> Collectibles </a> </li>
            <li class="list-item-navbar "> <a href="{{route('videos')}}" class="link-navabr {{ 'videos' === Route::currentRouteName() ? 'active' : '' }}"> Videos </a> </li>
            <li class="list-item-navbar "> <a href="{{route('fans')}}" class="link-navabr {{ 'fans' === Route::currentRouteName() ? 'active' : '' }}"> Fans </a> </li>
            <li class="list-item-navbar "> <a href="{{route('news')}}" class="link-navabr {{ 'news' === Route::currentRouteName() ? 'active' : '' }}"> News </a> </li>
            <li class="list-item-navbar "> <a href="{{route('shop')}}" class="link-navabr {{ 'shop' === Route::currentRouteName() ? 'active' : '' }}"> Shop </a> </li>
        </ul>

    </div>

    <div class="jumbo">

    </div>

</header>