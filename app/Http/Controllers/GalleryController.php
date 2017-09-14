<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    private $destinationPath = '../storage/app/public';

    public function index()
    {
        return view('admin.gallery.index', ['galleries' => Gallery::all()]);
    }

    public function add()
    {
        return view('admin.gallery.add');
    }

    public function edit($id)
    {
        return view('admin.gallery.modify', ['gallery' => Gallery::where('id', $id)->first()]);
    }

    public function store(Request $request)
    {
        if(isset($request['file']))
        {
            $file = $request->file('file');
            if ($request->hasFile('file'))
            {
                $originalName = str_replace(" ", "_", $file->getClientOriginalName());
                $fileName = preg_replace('/\\.[^.\\s]{3,4}$/', '', $originalName)."---".str_random(50). '.' . $file->getClientOriginalExtension();// rename file
                $file->move($this->destinationPath, $fileName);
                Gallery::create([ 'name' => $request['name'], 'image' => asset('storage/' . $fileName), 'description' => $request['description']]);

            }

        }
        return redirect()->route('web.gallery.list');
    }

    public function update(Request $request)
    {
        if(isset($request['file']))
        {
            $file = $request->file('file');
            if ($request->hasFile('file'))
            {
                $originalName = str_replace(" ", "_", $file->getClientOriginalName());
                $fileName = preg_replace('/\\.[^.\\s]{3,4}$/', '', $originalName)."---".str_random(50). '.' . $file->getClientOriginalExtension();// rename file
                $file->move($this->destinationPath, $fileName);
                Gallery::where('id', $request['id'])->update([ 'name' => $request['name'], 'image' => asset('storage/' . $fileName), 'description' => $request['description']]);

            }

        }
        return redirect()->route('web.gallery.list');
    }

    public function destroy($id)
    {
        Gallery::where('id', $id)->delete();
        return redirect()->back();
    }
    
}
