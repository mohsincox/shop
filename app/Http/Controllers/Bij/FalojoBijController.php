<?php

namespace App\Http\Controllers\Bij;

use App\Models\FalojoBij;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class FalojoBijController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $falojoBijs = FalojoBij::paginate(10);

        return view('bij.falojo_bij.index', compact('falojoBijs'));
    }

    public function create()
    {
        return view('bij.falojo_bij.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $falojoBij = FalojoBij::create(['image' => $fileName,
                                  'name' => $request->name,
                                  'code' => $request->code,
                                  'quantity' => $request->quantity,
                                  'price' => $request->price,
                                  'description' => $request->description
                                 ]);

        flash()->message($falojoBij->name . ' Successfully Created');

        return redirect('falojo-bij-auth');
    }

    public function edit($id)
    {
        $falojoBij = FalojoBij::find($id);

        return view('bij.falojo_bij.edit', compact('falojoBij'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $falojoBij = FalojoBij::find($id);
        File::delete('uploads/' . $falojoBij->image);
        $falojoBij->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($falojoBij->name . ' Successfully Updated');

        return redirect('falojo-bij-auth');
    }

    public function destroy($id)
    {
        $falojoBij = FalojoBij::find($id);
        File::delete('uploads/' . $falojoBij->image);

        FalojoBij::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('falojo-bij-auth');
    }
}
