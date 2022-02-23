@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Agregar categoria</h4>
        </div>
        <div class="card-body">
            <form action="{{url('insert-category')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" class="form-control" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" class="form-control" name="popular">
                    </div>   
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <textarea name="meta_title" id="" cols="30" rows="3" class="form-control" name="meta_title"></textarea>
                    </div>      
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" id="" cols="30" rows="3" class="form-control" name="meta_keywords"></textarea>
                    </div> 
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" id="" cols="30" rows="3" class="form-control" name="meta_description"></textarea>
                    </div>   
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