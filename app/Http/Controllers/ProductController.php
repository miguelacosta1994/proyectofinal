<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $destinationPath = '../storage/app/public';

    public function index()
    {
        return view('admin.products.index', ['productos' => Product::all()]);
    }

    public function add()
    {
        return view('admin.products.add');
    }

    public function edit($id)
    {
        return view('admin.products.modify', ['producto' => Product::where('id', $id)->first()]);
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
                Product::create([ 'name' => $request['name'], 'image' => asset('storage/' . $fileName), 'description' => $request['description']]);

            }

        }
        return redirect()->route('web.products.list');
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
                Product::where('id', $request['id'])->update([ 'name' => $request['name'], 'image' => asset('storage/' . $fileName), 'description' => $request['description']]);

            }

        }
        return redirect()->route('web.products.list');
    }

    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->back();
    }
}
