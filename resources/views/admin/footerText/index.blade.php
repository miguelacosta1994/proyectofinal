@extends('admin.master')

@section('content')
    <table id="rounded-corner" style="width: 100%">
        <thead>
        <tr>
            <th scope="col" class="rounded">ID</th>
            <th scope="col" class="rounded">Titulo</th>
            <th scope="col" class="rounded">Descripción</th>
            <th scope="col" class="rounded">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($footerTexts as $footerText)
            <tr>
                <td>{{$footerText->id}}</td>
                <td>{{$footerText->title}}</td>
                <td>{{$footerText->description}}</td>
                <td>
                    <a href="{{url('footerText/editar/' . $footerText->id)}}" ><img src="{{asset('images/user_edit.png')}}"></a>
                    <a href="{{url('footerText/eliminar/' . $footerText->id)}}" ><img src="{{asset('images/trash.png')}}"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection