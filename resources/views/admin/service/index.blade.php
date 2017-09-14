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
        @foreach($services as $service)
            <tr>
                <td>{{$service->id}}</td>
                <td>{{$service->name}}</td>
                <td>{{$service->description}}</td>
                <td><a><img src="{{$service->image}}" width="150px" height="150px"/></a></td>
                <td>
                    <a href="{{url('servicios/editar/' . $service->id)}}" ><img src="{{asset('images/user_edit.png')}}"></a>
                    <a href="{{url('servicios/eliminar/' . $service->id)}}" ><img src="{{asset('images/trash.png')}}"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection