<?php

namespace App\Http\Controllers\Narsari;

use App\Models\Ful;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class FulController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $narsaris = Ful::paginate(10);

        return view('narsari.ful.index', compact('narsaris'));
    }

    public function create()
    {
        return view('narsari.ful.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $narsari = Ful::create(['image' => $fileName,
                                        'name' => $request->name,
                                        'code' => $request->code,
                                        'quantity' => $request->quantity,
                                        'price' => $request->price,
                                        'description' => $request->description
                                       ]);

        flash()->message($narsari->name . ' Successfully Created');

        return redirect('ful-auth');
    }

    public function edit($id)
    {
        $narsari = Ful::find($id);

        return view('narsari.ful.edit', compact('narsari'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $narsari = Ful::find($id);
        File::delete('uploads/' . $narsari->image);
        $narsari->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($narsari->name . ' Successfully Updated');

        return redirect('ful-auth');
    }

    public function destroy($id)
    {
        $narsari = Ful::find($id);
        File::delete('uploads/' . $narsari->image);

        $narsari::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('ful-auth');
    }
}
