<?php

namespace App\Http\Controllers\Proyojon;

use App\Models\Furniture;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FurnitureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $proyojons = Furniture::paginate(10);

        return view('proyojon.furniture.index', compact('proyojons'));
    }

    public function create()
    {
        return view('proyojon.furniture.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $proyojon = Furniture::create(['image' => $fileName,
                                        'name' => $request->name,
                                        'code' => $request->code,
                                        'quantity' => $request->quantity,
                                        'price' => $request->price,
                                        'description' => $request->description
                                       ]);

        flash()->message($proyojon->name . ' Successfully Created');

        return redirect('furniture-auth');
    }

    public function edit($id)
    {
        $proyojon = Furniture::find($id);

        return view('proyojon.furniture.edit', compact('proyojon'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $proyojon = Furniture::find($id);
        File::delete('uploads/' . $proyojon->image);
        $proyojon->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($proyojon->name . ' Successfully Updated');

        return redirect('furniture-auth');
    }

    public function destroy($id)
    {
        $proyojon = Furniture::find($id);
        File::delete('uploads/' . $proyojon->image);

        $proyojon::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('furniture-auth');
    }
}
