<?php

namespace App\Http\Controllers;

use App\Models\Opokoron;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use File;

class OpokoronController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $opokorons = Opokoron::paginate(10);

        return view('opokoron.index', compact('opokorons'));
    }

    public function create()
    {
        return view('opokoron.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $opokoron = Opokoron::create(['image' => $fileName,
                                          'name' => $request->name,
                                          'code' => $request->code,
                                          'quantity' => $request->quantity,
                                          'price' => $request->price,
                                          'description' => $request->description
                                         ]);

        flash()->message($opokoron->name . ' Successfully Created');

        return redirect('opokoron-auth');
    }

    public function edit($id)
    {
        $opokoron = Opokoron::find($id);

        return view('opokoron.edit', compact('opokoron'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $opokoron = Opokoron::find($id);
        File::delete('uploads/' . $opokoron->image);
        $opokoron->update(['image' => $fileName,
                             'name' => $request->name,
                             'code' => $request->code,
                             'quantity' => $request->quantity,
                             'price' => $request->price,
                             'description' => $request->description
                            ]);

        flash()->message($opokoron->name . ' Successfully Updated');

        return redirect('opokoron-auth');
    }

    public function destroy($id)
    {
        $opokoron = Opokoron::find($id);
        File::delete('uploads/' . $opokoron->image);

        Opokoron::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('opokoron-auth');
    }
}
