@extends('admin.master')

@section('content')
    <form action="{{route('web.footerText.update')}}" method="post" enctype='multipart/form-data' accept="image/*">
        {{csrf_field()}}
        <input type="hidden" name="id" id="id" value="{{$footerText->id}}">
        <div style="margin-left: 20px">
            <br>
            <div class="row">
                <input type="text" name="title" placeholder="Nombre" value="{{$footerText->title}}" required/>
            </div>
            <br>
            <div class="row">
                <input type="text" name="description" value="{{$footerText->description}}" placeholder="Descripción" required/>
            </div>
            <br>
            <div class="row">
                <button type="submit" class="btn btn-info">Enviar</button>
            </div>
            <br>
        </div>
    </form>
@endsection