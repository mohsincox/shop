<?php

namespace App\Http\Controllers\Proyojon;

use App\Models\Telecom;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TelecomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $proyojons = Telecom::paginate(10);

        return view('proyojon.telecom.index', compact('proyojons'));
    }

    public function create()
    {
        return view('proyojon.telecom.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $proyojon = Telecom::create(['image' => $fileName,
                                        'name' => $request->name,
                                        'code' => $request->code,
                                        'quantity' => $request->quantity,
                                        'price' => $request->price,
                                        'description' => $request->description
                                       ]);

        flash()->message($proyojon->name . ' Successfully Created');

        return redirect('telecom-auth');
    }

    public function edit($id)
    {
        $proyojon = Telecom::find($id);

        return view('proyojon.telecom.edit', compact('proyojon'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $proyojon = Telecom::find($id);
        File::delete('uploads/' . $proyojon->image);
        $proyojon->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($proyojon->name . ' Successfully Updated');

        return redirect('telecom-auth');
    }

    public function destroy($id)
    {
        $proyojon = Telecom::find($id);
        File::delete('uploads/' . $proyojon->image);

        $proyojon::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('telecom-auth');
    }
}
