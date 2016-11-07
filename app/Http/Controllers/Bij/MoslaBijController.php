<?php

namespace App\Http\Controllers\Bij;

use App\Models\MoslaBij;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class MoslaBijController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $moslaBijs = MoslaBij::paginate(10);

        return view('bij.mosla_bij.index', compact('moslaBijs'));
    }

    public function create()
    {
        return view('bij.mosla_bij.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $moslaBij = MoslaBij::create(['image' => $fileName,
                                  'name' => $request->name,
                                  'code' => $request->code,
                                  'quantity' => $request->quantity,
                                  'price' => $request->price,
                                  'description' => $request->description
                                 ]);

        flash()->message($moslaBij->name . ' Successfully Created');

        return redirect('mosla-bij-auth');
    }

    public function edit($id)
    {
        $moslaBij = MoslaBij::find($id);

        return view('bij.mosla_bij.edit', compact('moslaBij'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $moslaBij = MoslaBij::find($id);
        File::delete('uploads/' . $moslaBij->image);
        $moslaBij->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($moslaBij->name . ' Successfully Updated');

        return redirect('mosla-bij-auth');
    }

    public function destroy($id)
    {
        $moslaBij = MoslaBij::find($id);
        File::delete('uploads/' . $moslaBij->image);

        MoslaBij::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('mosla-bij-auth');
    }
}
