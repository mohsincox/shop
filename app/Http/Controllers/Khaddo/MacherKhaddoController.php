<?php

namespace App\Http\Controllers\Khaddo;

use App\Models\MacherKhaddo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use File;

class MacherKhaddoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $khaddos = MacherKhaddo::paginate(10);

        return view('khaddo.mach.index', compact('khaddos'));
    }

    public function create()
    {
        return view('khaddo.mach.create');
    }

    public function store(Request $request)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $khaddo = MacherKhaddo::create(['image' => $fileName,
                                        'name' => $request->name,
                                        'code' => $request->code,
                                        'quantity' => $request->quantity,
                                        'price' => $request->price,
                                        'description' => $request->description
                                       ]);

        flash()->message($khaddo->name . ' Successfully Created');

        return redirect('macher-khaddo-auth');
    }

    public function edit($id)
    {
        $khaddo = MacherKhaddo::find($id);

        return view('khaddo.mach.edit', compact('khaddo'));
    }

    public function update(Request $request, $id)
    {
        if (Input::file('image')->isValid()) {
            $destinationPath = 'uploads';
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            Input::file('image')->move($destinationPath, $fileName);
        }

        $khaddo = MacherKhaddo::find($id);
        File::delete('uploads/' . $khaddo->image);
        $khaddo->update(['image' => $fileName,
                         'name' => $request->name,
                         'code' => $request->code,
                         'quantity' => $request->quantity,
                         'price' => $request->price,
                         'description' => $request->description
                        ]);

        flash()->message($khaddo->name . ' Successfully Updated');

        return redirect('macher-khaddo-auth');
    }

    public function destroy($id)
    {
        $khaddo = MacherKhaddo::find($id);
        File::delete('uploads/' . $khaddo->image);

        $khaddo::destroy($id);

        flash()->error('Successfully Deleted');

        return redirect('macher-khaddo-auth');
    }
}
