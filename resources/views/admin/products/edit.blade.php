@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Agregar producto</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col md-12 mb-3">
                        <label for="">Category</label>
                        <select class="form-select">
                            <option selected>{{$product->category->name}}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" value={{$product->name}} name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" value={{$product->slug}} name="slug">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Small Description</label>
                        <textarea type="text" class="form-control" name="small_description">{{$product->small_description}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <textarea type="text" class="form-control" name="description">{{$product->description}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="number" value={{$product->original_price}} class="form-control" name="original_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Selling Price</label>
                        <input type="number" value={{$product->selling_price}} class="form-control" name="selling_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Image</label>
                        @if($product->image)
                        <img src="{{asset('assets/uploads/products/'.$product->image)}}" alt="" width="100">
                        @endif
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" value={{$product->qty}} class="form-control" name="qty">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type="number" value={{$product->tax}} class="form-control" name="tax">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" {{$product->status == '1' ? 'checked' :''}} name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox" {{$product->trending == '1' ? 'checked' :'' }} name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" value={{$product->meta_title}} name="meta_title"class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea type="text" class="form-control" name="meta_keywords">{{$product->meta_keywords}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Meta Description</label>
                        <textarea type="text" class="form-control" name="meta_description">{{$product->meta_description}}</textarea>
                    </div>          
                    <div class="col-md-12 mb-3">
                        <button class="btn btn-primary">Enviar</button>
                    </div>        
                </div>
            </form>
        </div>
    </div>
@endsection