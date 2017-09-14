@extends('layout.master')

@section('content')
   <section>
      <div id="head">
         <div class="line">
            <h1>{{$title->title or ''}}</h1>
         </div>
      </div>

         <div id="content">
            <div class="line">
               <div class="margin">
                  @foreach($galerias as $galeria)
                  <div class="s-12 m-6 l-4">
                     <img src="{{$galeria->image}}">
                     <p class="subtitile">{{$galeria->name}} </p>
                     <p class="subtitile">{{$galeria->description}} </p>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>

      <div id="fourth-block">
         <div class="line">
            <div id="owl-demo2" class="owl-carousel owl-theme">
               @foreach($footer_textos as $ft)
                  <div class="item">
                     <h2>{{$ft->title}}</h2>
                     <p class="s-12 m-12 l-8 center">{{$ft->description}}
                     </p>
                  </div>
               @endforeach
            </div>
         </div>
      </div>
   </section>
@endsection