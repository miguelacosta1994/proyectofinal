@extends('layout.master')

@section('content')
   <section>
      <div id="head">
         <div class="line">
            <h1>{{$title->title or ''}}</h1>
         </div>
      </div>
      <div id="content" class="left-align contact-page">
         <div class="line">
            <div class="margin">
               <div class="s-12 l-6">
                  <h2>Vision Design - graphic zoo</h2>
                  <address>
                     <p><i class="icon-home icon"></i> Gallayova 19, 841 02 Bratislava</p>
                     <p><i class="icon-globe_black icon"></i> Slovakia - Europe</p>
                     <p><i class="icon-mail icon"></i> info@visiondesign.sk</p>
                  </address>
                  <br />
                  <h2>Social</h2>
                  <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091">Vision Design - graphic zoo</a></p>
                  <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/myresponsee">Responsee</a></p>
                  <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="https://twitter.com/MyResponsee">Responsee</a></p>
               </div>
               <div class="s-12 l-6">
                  <form class="customform" action="{{route('web.contacto')}}" method="post">
                     {{csrf_field()}}
                     <div class="s-12 l-7"><input name="email" placeholder="Your e-mail" title="Your e-mail" type="text" /></div>
                     <div class="s-12 l-7"><input name="name" placeholder="Your name" title="Your name" type="text" /></div>
                     <div class="s-12"><textarea placeholder="Your message" name="message" rows="5"></textarea></div>
                     <div class="s-12 m-6 l-4"><button type="submit">Enviar</button></div>
                  </form>
               </div>
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