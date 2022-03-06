@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Página de Productos</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Nombre</th>
                        <th>Precio Venta</th>
                        <th>Imagen</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)  
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->selling_price }}</td>
                        <td>
                            <img src="{{asset('assets/uploads/products/'.$item->image)}}" class="cate-image" alt="Imagen aquí">
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{url('edit-product/'.$item->id)}}">Editar</a>
                            <a class="btn btn-danger btn-sm" href="{{url('delete-product/'.$item->id)}}">Borrar</a>
                        </td>
                    </tr>
                    @endforeach                
                </tbody>
            </table>
        </div>
    </div>
@endsection