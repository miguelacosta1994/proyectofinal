<?php

namespace App\Http\Controllers;

use App\FooterText;
use App\Gallery;
use App\Product;
use App\Service;
use App\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public/index', ['galerias' => $this->getGalleriesRandom(), 'titles' => Title::where('type','home')->get(), 'footer_textos' => $this->getFooterRandom(), ]);
    }

    public function products()
    {
        return view('public/product', ['productos' => Product::all(), 'galerias' => $this->getGalleriesRandom(), 'title' => Title::whereType('product')->orderBy('id', 'desc')->first(), 'footer_textos' => $this->getFooterRandom()]);
    }

    public function services()
    {

        return view('public/services', ['servicios' => Service::all(), 'galerias' => $this->getGalleriesRandom(),  'title' => Title::whereType('service')->orderBy('id', 'desc')->first(), 'footer_textos' => $this->getFooterRandom() ]);
    }

    public function gallery()
    {
        return view('public/gallery', ['galerias' => Gallery::all(), 'title' => Title::whereType('gallery')->orderBy('id', 'desc')->first(), 'footer_textos' => $this->getFooterRandom()]);
    }

    public function contact()
    {
        return view('public/contact', ['title' => Title::whereType('contact')->orderBy('id', 'desc')->first(), 'footer_textos' => $this->getFooterRandom()]);
    }

    public function postContact(Request $request)
    {
        $data = $request->all();

        Mail::send('vendor.notifications.email', ['data' => $data], function ($message) use ($data)
        {
            $message->from(env('MAIL_USERNAME'));
            $message->subject('Nuevo Contacto');
            $message->to('miguel.acosta.1994@gmail.com');
        });

        
        return redirect()->action('PublicController@contact');

    }

    public function admin()
    {
        return view('admin/login');
    }

    private function getFooterRandom()
    {
        $FooterText = [

        ];
        $listados = FooterText::get();
        foreach ($listados as $listado) {
                    $FooterText [] = $listado;
        }
        return $FooterText;
    }

    private function getGalleriesRandom()
    {
        $Gallery = [

        ];
        $listados = Gallery::get();
        foreach ($listados as $listado) {
                    $Gallery [] = $listado;
        }

        return $Gallery;
    }
}
