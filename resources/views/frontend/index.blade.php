@extends('layouts.front')

@section('title')
    Bienvenido a la tienda en linea
@endsection

@section('content')
    @include('layouts.inc.slider')
    <div class="py-5">
        <div class="row">
            <h2>Featured Products</h2>
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach($feature_products as $item)
                <div class="item">
                    <div class="card">
                        <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="Demo Product">
                        <div class="card-body">
                            <h5>{{$item->name}}</h5>
                            <span class="float-start">{{$item->selling_price}} $</span>
                            <span class="float-end"><s>{{$item->original_price}} $</s></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        responsive:{
            //Número de items por tamaño de la pantalla
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
    </script>
@endsection