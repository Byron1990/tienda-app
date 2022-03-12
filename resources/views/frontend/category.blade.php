@extends('layouts.front')

@section('title')
    Category
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Todas las categorias</h2>
                    <div class="row">
                        @foreach($category as $item)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="{{asset('assets/uploads/category/'.$item->image)}}" alt="Demo Product">
                                    <div class="card-body">
                                        <h5>{{$item->name}}</h5>
                                        <p>
                                            {{$item->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>        
    </div>
@endsection