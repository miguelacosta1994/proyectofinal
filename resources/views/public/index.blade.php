@extends('layout.master')

@section('content')
   <section>
      <!-- CAROUSEL -->
      <div id="carousel">
         <div id="owl-demo" class="owl-carousel owl-theme">
            @foreach($titles as $title)
            <div class="item">
               <img src="{{$title->image}}" alt="">
               <div class="carousel-text">
                  <div class="line">
                     <div class="s-12 l-9">
                        <h2>{{$title->title or ''}}</h2>
                     </div>
                     <div class="s-12 l-9">
                        <p>{{$title->description or ''}} 
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
      <!-- FIRST BLOCK -->
      <div id="first-block">
         <div class="line">
            <h2>Some awesome blocks</h2>
            <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            </p>
            <div class="margin">
               <div class="s-12 m-6 l-3 margin-bottom">
                  <i class="icon-paperplane_ico icon2x"></i>
                  <h3>About</h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                  </p>
               </div>
               <div class="s-12 m-6 l-3 margin-bottom">
                  <i class="icon-star icon2x"></i>
                  <h3>Company</h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                  </p>
               </div>
               <div class="s-12 m-6 l-3 margin-bottom">
                  <i class="icon-message icon2x"></i>
                  <h3>Services</h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                  </p>
               </div>
               <div class="s-12 m-6 l-3 margin-bottom">
                  <i class="icon-mail icon2x"></i>
                  <h3>Contact</h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- SECOND BLOCK -->
      <div id="second-block">
         <div class="line">
            <div class="margin-bottom">
               <div class="margin">
                  <article class="s-12 l-8 center">
                     <h1>Amazing title</h1>
                     <p class="margin-bottom">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                     <a class="button s-12 l-4 center" href="product.html">Read more</a>
                  </article>
               </div>
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
                     <p class="subtitile">{{$g->description or ''}}  </p>
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
                     <h2>{{$ft->title or ''}}</h2>
                     <p class="s-12 m-12 l-8 center">{{$ft->description or ''}}
                     </p>
                  </div>
               @endforeach
            </div>
         </div>
      </div>
   </section>
@endsection
