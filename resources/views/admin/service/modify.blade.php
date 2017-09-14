@extends('admin.master')

@section('content')
    <form action="{{route('web.services.update')}}" method="post" enctype='multipart/form-data' accept="image/*">
        {{csrf_field()}}
        <input type="hidden" name="id" id="id" value="{{$service->id}}">
        <div style="margin-left: 20px">
            <br>
            <div class="row">
                <input type="text" name="name" placeholder="Nombre" value="{{$service->name}}" required/>
            </div>
            <br>
            <div class="row">
                <input type="text" name="description" value="{{$service->description}}" placeholder="Descripción" required/>
            </div>
            <br>
            <div class="row">
                <input type="file" name="file" placeholder="Imagen" required/>
            </div>
            <br>
            <div class="row">
                <button type="submit" class="btn btn-info">Enviar</button>
            </div>
            <br>
        </div>
    </form>
@endsection