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
        @foreach($galleries as $gallery)
            <tr>
                <td>{{$gallery->id}}</td>
                <td>{{$gallery->name}}</td>
                <td>{{$gallery->description}}</td>
                <td><a><img src="{{$gallery->image}}" width="150px" height="150px"/></a></td>
                <td>
                    <a href="{{url('galeria/editar/' . $gallery->id)}}" ><img src="{{asset('images/user_edit.png')}}"></a>
                    <a href="{{url('galeria/eliminar/' . $gallery->id)}}" ><img src="{{asset('images/trash.png')}}"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection