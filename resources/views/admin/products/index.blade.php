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
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)  
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img src="{{asset('assets/uploads/products/'.$item->image)}}" class="cate-image" alt="Imagen aquí">
                        </td>
                        <td>
                            <a class="btn btn-primary" href="#">Editar</a>
                            <a class="btn btn-danger" href="#">Borrar</a>
                        </td>
                    </tr>
                    @endforeach                
                </tbody>
            </table>
        </div>
    </div>
@endsection