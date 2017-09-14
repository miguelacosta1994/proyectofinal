<?php

namespace App\Http\Controllers;

use App\FooterText;
use Illuminate\Http\Request;

class FooterTextController extends Controller
{

    public function index()
    {
        return view('admin.footerText.index', ['footerTexts' => FooterText::all()]);
    }

    public function add()
    {
        return view('admin.footerText.add');
    }

    public function edit($id)
    {
        return view('admin.footerText.modify', ['footerText' => FooterText::where('id', $id)->first()]);
    }

    public function store(Request $request)
    {
        FooterText::create([ 'title' => $request['title'], 'description' => $request['description']]);
        return redirect()->route('web.footerText.list');
    }

    public function update(Request $request)
    {
        FooterText::where('id', $request['id'])->update([ 'title' => $request['title'],  'description' => $request['description']]);
        return redirect()->route('web.footerText.list');
    }

    public function destroy($id)
    {
        FooterText::where('id', $id)->delete();
        return redirect()->back();
    }

}
