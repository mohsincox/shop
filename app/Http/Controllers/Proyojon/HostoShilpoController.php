<?php

namespace App\Http\Controllers\Proyojon;

use App\Models\HostoShilpo;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HostoShilpoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $proyojons = HostoShilpo::paginate(10);

        return view('proyojon.hosto_shilpo.index', compact('proyojons'));
    }

    public function create()
    {
        return view('proyojon.hosto_shilpo.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $proyojon = HostoShilpo::create(['image' => $fileName,
                                        'name' => $request->name,
                                        'code' => $request->code,
                                        'quantity' => $request->quantity,
                                        'price' => $request->price,
                                        'description' => $request->description
                                       ]);

        flash()->message($proyojon->name . ' Successfully Created');

        return redirect('hosto-shilpo-auth');
    }

    public function edit($id)
    {
        $proyojon = HostoShilpo::find($id);

        return view('proyojon.hosto_shilpo.edit', compact('proyojon'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $proyojon = HostoShilpo::find($id);
        File::delete('uploads/' . $proyojon->image);
        $proyojon->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($proyojon->name . ' Successfully Updated');

        return redirect('hosto-shilpo-auth');
    }

    public function destroy($id)
    {
        $proyojon = HostoShilpo::find($id);
        File::delete('uploads/' . $proyojon->image);

        $proyojon::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('hosto-shilpo-auth');
    }
}
