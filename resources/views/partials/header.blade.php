<header>
    <div>
        <img src="{{asset('images/dc-logo.png')}}" alt="dc logo">
    </div>
    <div>
        <ul>
           
            <li><a href="{{route('shop')}}" class="{{Request::route()->getName() == 'shop'?'active':''}}">SHOP</a></li>
            <li><a href="{{route('tv')}}" class="{{Request::route()->getName() == 'tv'?'active':''}}">TV</a></li>
            <li><a href="{{route('movies')}}" class="{{Request::route()->getName() == 'movies'?'active':''}}">MOVIES</a></li>
        </ul>
    </div>
  </header>