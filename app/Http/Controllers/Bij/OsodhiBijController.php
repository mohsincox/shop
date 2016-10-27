<?php

namespace App\Http\Controllers\Bij;

use App\Models\OsodhiBij;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class OsodhiBijController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $osodhiBijs = OsodhiBij::paginate(10);

        return view('bij.osodhi_bij.index', compact('osodhiBijs'));
    }

    public function create()
    {
        return view('bij.osodhi_bij.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $osodhiBij = OsodhiBij::create(['image' => $fileName,
                                  'name' => $request->name,
                                  'code' => $request->code,
                                  'quantity' => $request->quantity,
                                  'price' => $request->price,
                                  'description' => $request->description
                                 ]);

        flash()->message($osodhiBij->name . ' Successfully Created');

        return redirect('osodhi-bij-auth');
    }

    public function edit($id)
    {
        $osodhiBij = OsodhiBij::find($id);

        return view('bij.osodhi_bij.edit', compact('osodhiBij'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $osodhiBij = OsodhiBij::find($id);
        File::delete('uploads/' . $osodhiBij->image);
        $osodhiBij->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($osodhiBij->name . ' Successfully Updated');

        return redirect('osodhi-bij-auth');
    }

    public function destroy($id)
    {
        $osodhiBij = OsodhiBij::find($id);
        File::delete('uploads/' . $osodhiBij->image);

        OsodhiBij::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('osodhi-bij-auth');
    }
}
