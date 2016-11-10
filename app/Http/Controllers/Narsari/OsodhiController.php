<?php

namespace App\Http\Controllers\Narsari;

use App\Models\Osodhi;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class OsodhiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $narsaris = Osodhi::paginate(10);

        return view('narsari.osodhi.index', compact('narsaris'));
    }

    public function create()
    {
        return view('narsari.osodhi.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $narsari = Osodhi::create(['image' => $fileName,
                                'name' => $request->name,
                                'code' => $request->code,
                                'quantity' => $request->quantity,
                                'price' => $request->price,
                                'description' => $request->description
                               ]);

        flash()->message($narsari->name . ' Successfully Created');

        return redirect('osodhi-auth');
    }

    public function edit($id)
    {
        $narsari = Osodhi::find($id);

        return view('narsari.osodhi.edit', compact('narsari'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $narsari = Osodhi::find($id);
        File::delete('uploads/' . $narsari->image);
        $narsari->update(['image' => $fileName,
                          'name' => $request->name,
                          'code' => $request->code,
                          'quantity' => $request->quantity,
                          'price' => $request->price,
                          'description' => $request->description
                         ]);

        flash()->message($narsari->name . ' Successfully Updated');

        return redirect('osodhi-auth');
    }

    public function destroy($id)
    {
        $narsari = Osodhi::find($id);
        File::delete('uploads/' . $narsari->image);

        $narsari::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('osodhi-auth');
    }
}
