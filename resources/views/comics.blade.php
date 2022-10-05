@extends('layout.app')
{{-- @section('pageTitle', $comic['title']) --}}
@section('main')
<div id="jumbo"></div>

@foreach ($comics as $comic)
    <p>This is user {{ $comic['title'] }}</p>
    <div class="container">
        <div class="myCards">
          <div class="imgWrapper">
            <img class="itemImg" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            <h2 class="itemTitle">{{$comic['title']}}</h2>
            <h3 class="itemSerie">{{$comic['series']}}</h3>
            <span class="itemPrice">{{$comic['price']}}</span>
            <p class="itemDescription">{{$comic['description']}}</p>
            <h5 class="itemSale">On Sale Date:{{$comic['sale_date']}}</h5>
          </div>
      </div> 
    </div>
@endforeach
 

@endsection  


