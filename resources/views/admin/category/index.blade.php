@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Página de categorias</h4>
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
                    @foreach ($categories as $item)  
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img src="{{asset('admin/assets/uploads/category/'.$item->image)}}" class="cate-image" alt="Imagen aquí">
                        </td>
                        <td>
                            <button class="btn btn-primary">Editar</button>
                            <button class="btn btn-danger">Borrar</button>
                        </td>
                    </tr>
                    @endforeach                
                </tbody>
            </table>
        </div>
    </div>
@endsection