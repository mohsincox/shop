<?php

namespace App\Http\Controllers\Bij;

use App\Models\TontoBij;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class TontoBijController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tontoBijs = TontoBij::paginate(10);

        return view('bij.tonto_bij.index', compact('tontoBijs'));
    }

    public function create()
    {
        return view('bij.tonto_bij.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $tontoBij = TontoBij::create(['image' => $fileName,
                                  'name' => $request->name,
                                  'code' => $request->code,
                                  'quantity' => $request->quantity,
                                  'price' => $request->price,
                                  'description' => $request->description
                                 ]);

        flash()->message($tontoBij->name . ' Successfully Created');

        return redirect('tonto-bij-auth');
    }

    public function edit($id)
    {
        $tontoBij = TontoBij::find($id);

        return view('bij.tonto_bij.edit', compact('tontoBij'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $tontoBij = TontoBij::find($id);
        File::delete('uploads/' . $tontoBij->image);
        $tontoBij->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($tontoBij->name . ' Successfully Updated');

        return redirect('tonto-bij-auth');
    }

    public function destroy($id)
    {
        $tontoBij = TontoBij::find($id);
        File::delete('uploads/' . $tontoBij->image);

        TontoBij::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('tonto-bij-auth');
    }
}
