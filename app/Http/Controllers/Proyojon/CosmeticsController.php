<?php

namespace App\Http\Controllers\Proyojon;

use App\Models\Cosmetics;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CosmeticsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $proyojons = Cosmetics::paginate(10);

        return view('proyojon.cosmetics.index', compact('proyojons'));
    }

    public function create()
    {
        return view('proyojon.cosmetics.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $proyojon = Cosmetics::create(['image' => $fileName,
                                        'name' => $request->name,
                                        'code' => $request->code,
                                        'quantity' => $request->quantity,
                                        'price' => $request->price,
                                        'description' => $request->description
                                       ]);

        flash()->message($proyojon->name . ' Successfully Created');

        return redirect('cosmetics-auth');
    }

    public function edit($id)
    {
        $proyojon = Cosmetics::find($id);

        return view('proyojon.cosmetics.edit', compact('proyojon'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $proyojon = Cosmetics::find($id);
        File::delete('uploads/' . $proyojon->image);
        $proyojon->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($proyojon->name . ' Successfully Updated');

        return redirect('cosmetics-auth');
    }

    public function destroy($id)
    {
        $proyojon = Cosmetics::find($id);
        File::delete('uploads/' . $proyojon->image);

        $proyojon::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('cosmetics-auth');
    }
}
