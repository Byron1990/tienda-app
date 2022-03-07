@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Agregar producto</h4>
        </div>
        <div class="card-body">
            <form action="{{url('insert-product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col md-12 mb-3">
                        <label for="">Category</label>
                        <select class="form-select" name="cate_id">
                            <option selected>Seleccione categoria</option>
                            @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Small Description</label>
                        <textarea type="text" class="form-control" name="small_description"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <textarea type="text" class="form-control" name="description"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="number" class="form-control" name="original_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Selling Price</label>
                        <input type="number" class="form-control" name="selling_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control" name="qty">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type="number" class="form-control" name="tax">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox" name="trending">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea type="text" class="form-control" name="meta_keywords"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Description</label>
                        <textarea type="text" class="form-control" name="meta_description"></textarea>
                    </div>          
                    <div class="col-md-12 mb-3">
                        <button class="btn btn-primary">Enviar</button>
                    </div>        
                </div>
            </form>
        </div>
    </div>
@endsection