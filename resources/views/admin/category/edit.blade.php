@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Editar/Actualizar categoria</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" value="{{$category->name}}" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Category</label>
                        <input type="text" value="{{$category->category}}" class="form-control" name="category">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" class="form-control">{{$category->description}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" {{$category->status == 1 ? "checked" : ""}} name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" {{$category->popular == 1 ? "checked" : ""}} name="popular">
                    </div>   
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input name="meta_title" value="{{$category->meta_title}}" id="" cols="30" rows="3" class="form-control" name="meta_title"/>
                    </div>      
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" id="" rows="3" class="form-control"cols="30" rows="3" class="form-control" name="meta_keywords">{{$category->meta_keywords}}</textarea>
                    </div> 
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" cols="30" rows="3" class="form-control" name="meta_description">{{$category->meta_description}}</textarea>
                    </div>   
                    @if($category->image)
                    <img src="{{asset('assets/uploads/category/'.$category->image)}}" alt="Imagen de categoria">
                    @endif
                    <div class="col-md-12 mb-3">
                        <input type="file" name="image" class="form-control" id="">
                    </div>        
                    <div class="col-md-12 mb-3">
                        <button class="btn btn-primary">Enviar</button>
                    </div>        
                </div>
            </form>
        </div>
    </div>
@endsection