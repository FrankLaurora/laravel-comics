@extends('layout.main')

@section('pageTitle', 'Home | DC Comics')
    
@section('mainContent')
    <section class="comics">
        <div class="container">
            <div class="section_tag">
                <h2>
                    Current series
                </h2>
            </div>
            @foreach ($comics as $comic)
                <div class="card">
                    <div class="img_container">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <h5>{{$comic['series']}}</h5>
                </div>
            @endforeach
        </div>
        <button>Load more</button>
    </section>
    <section class="shop">
        <div class="container">
            @foreach ($shop as $item)
                <div class="shop_card">
                    <img src="{{asset($item['img'])}}" alt="{{$item['name']}}">
                    <h5>{{$item['name']}}</h5>
                </div>
            @endforeach
        </div>
    </section>
@endsection