@extends('admin.master')

@section('content')
    <form action="{{route('web.footerText.store')}}" method="post" enctype='multipart/form-data' accept="image/*">
        {{csrf_field()}}
        <div style="margin-left: 20px">
            <br>
            <div class="row">
                <input type="text" name="title" placeholder="Nombre" required/>
            </div>
            <br>
            <div class="row">
                <input type="text" name="description"  placeholder="Descripción" required/>
            </div>

            <br>
            <div class="row">
                <button type="submit" class="btn btn-info">Enviar</button>
            </div>
            <br>
        </div>
    </form>
@endsection