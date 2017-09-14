<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    private $destinationPath = '../storage/app/public';

    public function index()
    {
        return view('admin.service.index', ['services' => Service::all()]);
    }

    public function add()
    {
        return view('admin.service.add');
    }

    public function edit($id)
    {
        return view('admin.service.modify', ['service' => Service::where('id', $id)->first()]);
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
                Service::create([ 'name' => $request['name'], 'image' => asset('storage/' . $fileName), 'description' => $request['description']]);

            }

        }
        return redirect()->route('web.services.list');
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
                Service::where('id', $request['id'])->update([ 'name' => $request['name'], 'image' => asset('storage/' . $fileName), 'description' => $request['description']]);

            }

        }
        return redirect()->route('web.services.list');
    }

    public function destroy($id)
    {
        Service::where('id', $id)->delete();
        return redirect()->back();
    }

}
