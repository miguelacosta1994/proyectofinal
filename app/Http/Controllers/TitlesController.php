<?php

namespace App\Http\Controllers;

use App\Title;
use Illuminate\Http\Request;

class TitlesController extends Controller
{
    private $destinationPath = '../storage/app/public';

    public function index()
    {
        return view('admin.titles.index', ['titles' => Title::all()]);
    }

    public function add()
    {
        return view('admin.titles.add', ['types' => $this->getTiposType()]);
    }

    public function edit($id)
    {
        return view('admin.titles.modify', ['title' => Title::where('id', $id)->first(), 'types' => $this->getTiposType()]);
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
                Title::create([ 'title' => $request['title'], 'type' => $request['type'], 'image' => asset('storage/' . $fileName), 'description' => $request['description'] ]);

            }

        }
        return redirect()->route('web.titles.list');
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
                Title::where('id', $request['id'])->update([ 'title' => $request['title'],  'type' => $request['type'], 'image' => asset('storage/' . $fileName), 'description' => $request['description']]);

            }

        }

        return redirect()->route('web.titles.list');
    }

    public function destroy($id)
    {
        Title::where('id', $id)->delete();
        return redirect()->back();
    }

    private function getTiposType()
    {
        $types = ['home', 'service', 'gallery', 'contact', 'product'];
        return $types;
    }
}
