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
               @foreach($servicios as $servicio)
               <div class="s-12 m-6 l-4">
                  <div class="content-block margin-bottom">
                     <i class="{{$servicio->image}}"></i>
                     <h3>{{$servicio->name}}</h3>
                     <p>{{$servicio->description}}
                     </p>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <!-- GALLERY -->
      <div id="third-block">
         <div class="line">
            <div class="margin">
               @foreach($galerias as $g)
               <div class="s-12 m-6 l-3">
                  <img src="{{$g->image}}">
                  <p class="subtitile">{{$g->description}} </p>
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