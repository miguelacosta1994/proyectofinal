@extends('admin.master')

@section('content')
    <form action="{{route('web.products.update')}}" method="post" enctype='multipart/form-data' accept="image/*">
        {{csrf_field()}}
        <input type="hidden" name="id" id="id" value="{{$producto->id}}">
        <div style="margin-left: 20px">
            <br>
            <div class="row">
                <input type="text" name="name" placeholder="Nombre" value="{{$producto->name}}" required/>
            </div>
            <br>
            <div class="row">
                <input type="text" name="description" value="{{$producto->description}}" placeholder="Descripción" required/>
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