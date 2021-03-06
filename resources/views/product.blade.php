@extends('master')
@section("content")
    <div class=" custom-product " >
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                @foreach($products as $item)
                    <div class="carousel-item {{$item['id']==5? 'active':''}}">
                        <img class="img" src="{{$item['gallary']}}" alt="chines">
                        <div class="carousel-caption">
                            <h3>{{$item['name']}}</h3>
                            <p>{{$item['describtion']}}</p>
                        </div>

                    </div>
                @endforeach

            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </div>
@endsection
