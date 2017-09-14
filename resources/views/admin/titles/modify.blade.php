@extends('admin.master')

@section('content')
    <form action="{{route('web.titles.update')}}" method="post" enctype='multipart/form-data' accept="image/*">
        {{csrf_field()}}
        <input type="hidden" name="id" id="id" value="{{$title->id}}">
        <div style="margin-left: 20px">
            <br>
            <div class="row">
                <input type="text" name="title" placeholder="Nombre" value="{{$title->name}}" required/>
            </div>
            <br>
            <div class="row">
                <input type="text" name="description" value="{{$title->description}}" placeholder="Descripción" required/>
            </div>
            <br>
            <div class="row">
                <input type="file" name="file" placeholder="Imagen" required/>
            </div>
            <br>
            <select name="type">
                @foreach($types as $type)
                    <option value="{{$type}}">{{$type}}</option>
                @endforeach
            </select>
            <br>
            <div class="row">
                <button type="submit" class="btn btn-info">Enviar</button>
            </div>
            <br>
        </div>
    </form>
@endsection