<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Proyecto Final</title>
    {{Html::style('style.css')}}
    {{Html::style('niceforms-default.css')}}
    {{Html::script('clockp.js')}}
    {{Html::script('clockh.js')}}
    {{Html::script('jquery.min.js')}}
    {{Html::script('ddaccordion.js')}}

<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

    {{Html::script('jconfirmaction.jquery.js')}}
<script type="text/javascript">

	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});

</script>

    {{Html::script('niceforms.js')}}

    </head>
    <body>
    <div id="main_container">

        <div class="header">

        <div class="right_header">Welcome {{\Illuminate\Support\Facades\Auth::user()->name}}, <a href="{{route('web.logout')}}" class="logout">Logout</a></div>
        <div id="clock_a"></div>
    </div>

    <div class="main_content">

        <div class="menu">
            <ul>
            <li><a>Productos<!--[if IE 7]><!--></a><!--<![endif]-->
            <!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul>
                    <li><a href="{{route('web.products.list')}}" title="">Listado</a></li>
                    <li><a href="{{route('web.products.add')}}" title="">Agregar</a></li>
                </ul>
            <!--[if lte IE 6]></td></tr></table></a><![endif]-->
            </li>
            <li><a>Galeria<!--[if IE 7]><!--></a><!--<![endif]-->
            <!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul>
                    <li><a href="{{route('web.gallery.list')}}" title="">Listado</a></li>
                    <li><a href="{{route('web.gallery.add')}}" title="">Agregar</a></li>
                </ul>
            <!--[if lte IE 6]></td></tr></table></a><![endif]-->
            </li>
            <li><a>Servicios<!--[if IE 7]><!--></a><!--<![endif]-->
                <!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul>
                    <li><a href="{{route('web.services.list')}}" title="">Listado</a></li>
                    <li><a href="{{route('web.services.add')}}" title="">Agregar</a></li>
                </ul>
                <!--[if lte IE 6]></td></tr></table></a><![endif]-->
            </li>
                <li><a>Titulos<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                    <ul>
                        <li><a href="{{route('web.titles.list')}}" title="">Listado</a></li>
                        <li><a href="{{route('web.titles.add')}}" title="">Agregar</a></li>
                    </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </li>
                <li><a>Footer<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                    <ul>
                        <li><a href="{{route('web.footerText.list')}}" title="">Listado</a></li>
                        <li><a href="{{route('web.footerText.add')}}" title="">Agregar</a></li>
                    </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </li>
            </ul>
        </div>

        <div class="center_content">
            @yield('content')
        </div>   <!--end of center content -->


    </div> <!--end of main content-->

</div>
</body>
</html>