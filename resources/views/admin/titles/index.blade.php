@extends('admin.master')

@section('content')
    <table id="rounded-corner" style="width: 100%">
        <thead>
        <tr>
            <th scope="col" class="rounded">ID</th>
            <th scope="col" class="rounded">Titulo</th>
            <th scope="col" class="rounded">Descripción</th>
            <th scope="col" class="rounded">Imagen</th>
            <th scope="col" class="rounded">Tipo</th>
            <th  scope="col" class="rounded">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($titles as $title)
            <tr>
                <td>{{$title->id}}</td>
                <td>{{$title->title}}</td>
                <td>{{$title->description}}</td>
                <td><a><img src="{{$title->image}}" width="150px" height="150px"/></a></td>
                <td>{{$title->type}}</td>
                <td>
                    <a href="{{url('titulos/editar/' . $title->id)}}" ><img src="{{asset('images/user_edit.png')}}"></a>
                    <a href="{{url('titulos/eliminar/' . $title->id)}}" ><img src="{{asset('images/trash.png')}}"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection