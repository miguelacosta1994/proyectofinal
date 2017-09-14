@extends('admin.master')

@section('content')
    <table id="rounded-corner" style="width: 100%">
        <thead>
        <tr>
            <th scope="col" class="rounded">ID</th>
            <th scope="col" class="rounded">Nombre</th>
            <th scope="col" class="rounded">Descripción</th>
            <th scope="col" class="rounded">Imagen</th>
            <th  scope="col" class="rounded">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->name}}</td>
                <td>{{$producto->description}}</td>
                <td><a class="ask"><img src="{{$producto->image}}" width="150px" height="150px"/></a></td>
                <td>
                    <a href="{{url('productos/editar/' . $producto->id)}}" ><img src="{{asset('images/user_edit.png')}}"></a>
                    <a href="{{url('productos/eliminar/' . $producto->id)}}" ><img src="{{asset('images/trash.png')}}"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection